<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Status;
use App\Models\Question;
use App\Models\Response;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Participation;
use Illuminate\Support\Facades\DB;
use App\Models\ParticipationTestType;

class ParticipationController extends Controller
{
    public function index(Request $request, $token_participation)
    {
        $participation = Participation::where('token', $token_participation)->first();

        if ($participation) {
            if ($participation->status->name == "end") {
                abort(404);
            } elseif ($participation->status->name == "setting") {
                return view('participation.setting', compact('participation'));
            } elseif ($participation->status->name == "example_active") {
                return redirect()->route('participation.example', [$participation->token]);
            } elseif ($participation->status->name == "example_result") {
                $examples = Response::where('participation_id', $participation->id)->whereHas('question', function ($query) use ($participation) {
                    $query->where('example', 1);
                })->get();
                
                $count_example = count($examples);
                $count_example_correct = $examples->where('rcc', 1)->count();

                return view('participation.index', compact('participation', 'count_example', 'count_example_correct'));
            } elseif ($participation->status->name == "test_active") {
                return redirect()->route('participation.test', [$participation->token]);
            } elseif ($participation->status->name == "test_end") {
                $time_global = "00:00:00";
                $responses_time = Response::where('participation_id', $participation->id)->where('time', '!=', null)->get();

                foreach ($responses_time as $key => $value) {
                    $time_global = date("H:i:s", (strtotime($time_global) + strtotime($value->time)));
                }

                $timer = false;

                if ($time_global >= "00:20:00") {
                    $timer = true;
                }

                return view('participation.index', compact('participation', 'timer'));
            }

            return view('participation.index', compact('participation'));
        }
        abort(404);
    }

    public function store(Request $request, $patient)
    {
        $request->validate([
            'test' => 'required|exists:tests,id',
        ]);

        $test = Test::where('id', $request->test)->first();
        $status = Status::where('name', 'new')->first();
        $participation_test_type = ParticipationTestType::where('name', 'standard')->first();

        $questions = Question::whereHas('tests', static function ($query) use ($test) {
            return $query->where('id', $test->id);
        });

        $questions = $questions->get();

        $participation = new Participation();
        $participation->id = uniqid();
        $participation->token = Str::uuid();
        $participation->patient()->associate($patient);
        $participation->test()->associate($test);
        $participation->status()->associate($status);
        $participation->participationTestType()->associate($participation_test_type);
        $participation->save();

        // foreach ($questions as $key => $question) {
        //     $response_question = new Response();
        //     $response_question->id = uniqid();
        //     $response_question->question()->associate($question);
        //     $response_question->participation()->associate($participation);
        //     $response_question->save();
        // }

        return back();
    }

    public function update(Request $request, $token_participation)
    {
        $participation = Participation::where('token', $token_participation)->first();

        if ($participation) {
            if ($participation->status->name == "test_active" || $participation->status->name == "example_active") {
                abort(404);
            } else {
                $status = null;
                $return = null;

                if ($participation->status->name == "new") {
                    $status = 'course';
                } elseif ($participation->status->name == "course") {
                    $status = 'instruction';
                } elseif ($participation->status->name == "instruction") {
                    $status = 'accept';
                } elseif ($participation->status->name == "accept") {
                    $status = 'example_start';

                    $request->validate([
                        'understand' => 'accepted',
                        'voluntary' => 'accepted',
                    ]);

                    $participation->understand = true;
                    $participation->voluntary = true;
                } elseif ($participation->status->name == "example_start") {
                    $questions = $participation->test->questions()->where('example', 1)->orderBy('order', 'asc')->get();

                    foreach ($questions as $key => $question) {
                        $response = new Response();
                        $response->id = uniqid();
                        if ($key == 0) {
                            $response->time_start_at = date('Y:m:d H:i:s');
                        }
                        $response->question()->associate($question);
                        $response->participation()->associate($participation);
                        $response->save();
                    }

                    $status = 'example_active';
                    $return = redirect()->route('participation.example', [$participation->token]);
                } elseif ($participation->status->name == "example_result") {
                    $count_example_correct = Response::where('participation_id', $participation->id)->whereHas('question', function ($query) use ($participation) {
                        $query->where('example', 1);
                    })->where('rcc', 1)->count();

                    if ($count_example_correct > 2) {
                        $status = 'setting';
                    } else {
                        $status = 'end';
                    }
                } elseif ($participation->status->name == "setting") {

                    if ($request->theme) {
                        $participation->theme = "dark";
                    } else {
                        $participation->theme = "light";
                    }
                    $participation->save();

                    $questions = $participation->test->questions()->where('example', 0)->orderBy('order', 'asc')->get();

                    foreach ($questions as $key => $question) {
                        $response = new Response();
                        $response->id = uniqid();
                        if ($key == 0) {
                            $response->time_start_at = date('Y:m:d H:i:s');
                        }
                        $response->question()->associate($question);
                        $response->participation()->associate($participation);
                        $response->save();
                    }

                    $status = 'test_active';
                } elseif ($participation->status->name == "test_end") {
                    $status = 'end';
                }

                $participation->status()->associate(Status::where('name', $status)->first());
                $participation->save();

                if ($return) {
                    return $return;
                } else {
                    return back();
                }
            }
        }
        abort(404);
    }

    public function reset(Request $request, $id)
    {
        $participation = Participation::find($id);

        if ($participation) {
            $responses = Response::where('participation_id', $participation->id)->whereHas('question', function ($q) {
                $q->where('example', 0);
            })->get();

            foreach ($responses as $key => $response) {
                $response->delete();
            }

            $participation->status()->associate(Status::where('name', 'setting')->first());
            $participation->save();
        }
        return back();
    }

    public function delete(Request $request, $id){
        $participation = Participation::find($id);

        if ($participation){
            $participation->delete();
        }
        return back();
    }
}
