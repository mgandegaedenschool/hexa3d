<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Number;
use App\Models\Status;
use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;
use App\Models\Participation;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function show(Request $request, $token_participation)
    {
        $participation = Participation::where('token', $token_participation)->first();

        if ($participation && $participation->status->name == "test_active") {
            $questions = $participation->test->questions()->where('example', 0);

            $count_questions = $questions->count();

            $question = $questions->whereHas('responses', function ($q) use ($participation) {
                $q->where('time_start_at', '!=', null)->where('participation_id', $participation->id);
            })->first();

            $response = Response::where('question_id', $question->id)->where('participation_id', $participation->id)->first();

            $time_global = "00:00:00";

            $responses_time = Response::where('participation_id', $participation->id)->where('time', '!=', null)->get();

            foreach ($responses_time as $key => $value) {
                $time_global = date("H:i:s", (strtotime($time_global) + strtotime($value->time)));
            }

            $time_global = date("H:i:s", ((strtotime(date("Y/m/d H:i:s")) - strtotime($response->time_start_at)) + strtotime($time_global)));

            if ($time_global >= "00:20:00") {
                $response->time = date("H:i:s",((strtotime(date("Y/m/d H:i:s")) - strtotime($response->time_start_at)) + strtotime($response->time)));
                $response->time_start_at = null;
                $response->save();

                $participation->status()->associate(Status::where('name', 'test_end')->first());
                $participation->save();

                return redirect()->route('participation', [$participation->token]);
            }

            $timer = date("Y-m-d") . " " . $time_global;

            $numbers = Number::all();
            $colors = Color::all();

            $multiple = false;
            $number = null;
            $color = null;

            if (count($question->numberColors) > 1) {
                $multiple = true;
            } else {
                if (count($response->numberColors) > 0) {
                    $number = $response->numberColors()->first();
                    $color = Color::find($number->pivot->color_id);
                }
            }

            $next_question = $participation->test->questions()->where('example', 0)->wherePivot('order', $question->pivot->order + 1)->first();
            $prev_question = $participation->test->questions()->where('example', 0)->wherePivot('order', $question->pivot->order - 1)->first();

            $next_response = null;
            $prev_response = null;

            if ($next_question) {
                $next_response = Response::where('question_id', $next_question->id)->where('participation_id', $participation->id)->first();
            }
            if ($prev_question) {
                $prev_response = Response::where('question_id', $prev_question->id)->where('participation_id', $participation->id)->first();
            }

            if ($request->ajax()) {
                $view = view('test.question', compact('participation', 'numbers', 'colors', 'number', 'color', 'multiple', 'response', 'question', 'prev_response', 'next_response', 'count_questions', 'timer'))->render();
                return response()->json([
                    'question' => [
                        'content' => $view
                    ]
                ]);
            }

            return view('test.index', compact('participation', 'numbers', 'colors', 'number', 'color', 'multiple', 'response', 'question', 'prev_response', 'next_response', 'count_questions', 'timer'));
        }
        abort(404);
    }

    public function update(Request $request, $token_participation)
    {
        if ($request->ajax()) {
            $participation = Participation::where('token', $token_participation)->first();

            if ($participation && $participation->status->name == "test_active") {
                $validator = Validator::make($request->all(), [
                    'number' => 'nullable|required_with:color|exists:numbers,id',
                    'color' => 'nullable|required_with:number|exists:colors,id',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'errors' => $validator->getMessageBag()->toArray()
                    ], 422);
                }

                if (!$request->action || ($request->action != "prev" && $request->action != "next" && $request->action != "end")) {
                    return response()->json([
                        'errors' => [
                            'result' => 'Une erreur s\'est produitefzefez !',
                        ]
                    ], 422);
                }

                $time_global = "00:00:00";

                $responses_time = Response::where('participation_id', $participation->id)->where('time', '!=', null)->get();

                foreach ($responses_time as $key => $value) {
                    $time_global = date("H:i:s", (strtotime($time_global) + strtotime($value->time)));
                }

                $question = $participation->test->questions()->where('example', 0)->whereHas('responses', function ($q) use ($participation) {
                    $q->where('time_start_at', '!=', null)->where('participation_id', $participation->id);
                })->first();
    
                if (!$question) {
                    return response()->json([
                        'errors' => [
                            'result' => 'Une erreur s\'est produite !',
                        ]
                    ], 422);
                }
    
                $response = Response::where('question_id', $question->id)->where('participation_id', $participation->id)->first();

                $time_global = date("H:i:s", ((strtotime(date("Y/m/d H:i:s")) - strtotime($response->time_start_at)) + strtotime($time_global)));

                if ($time_global >= "00:20:00") {
                    $response->time = date("H:i:s",((strtotime(date("Y/m/d H:i:s")) - strtotime($response->time_start_at)) + strtotime($response->time)));
                    $response->time_start_at = null;
                    $response->save();

                    $participation->status()->associate(Status::where('name', 'test_end')->first());
                    $participation->save();

                    return response()->json([
                        'redirect' => [
                            'ajax' => false,
                            'route' => route('participation', [$participation->token])
                        ]
                    ]);
                }

                foreach ($response->numberColors as $key => $value) {
                    $response->numberColors()->detach($value->id);
                }

                $correct = false;

                foreach ($question->numberColors as $key => $value) {
                    $number = $value;
                    $color = Color::find($number->pivot->color_id);

                    if ($request->number && $request->color) {
                        if ($request->number == $number->id && $request->color == $color->id) {
                            $correct = true;

                            $response->rcc = 1;
                            $response->rcp = 0;
                        } elseif (($request->number == $number->id || $request->color == $color->id) && !$correct) {
                            $correct = true;

                            $response->rcc = 0;
                            $response->rcp = 0.5;
                        } elseif (!$correct) {
                            $response->rcc = 0;
                            $response->rcp = 0;
                        }
                    }

                    $response->time = date("H:i:s",((strtotime(date("Y/m/d H:i:s")) - strtotime($response->time_start_at)) + strtotime($response->time)));
                    $response->time_start_at = null;
                    $response->save();

                    if ($request->number && $request->color) {
                        $response->numberColors()->attach($request->number, ['color_id' => $request->color]);
                    }
                }

                if ($request->action == "end") {
                    $participation->status()->associate(Status::where('name', 'test_end')->first());
                    $participation->save();

                    return response()->json([
                        'redirect' => [
                            'ajax' => false,
                            'route' => route('participation', [$participation->token])
                        ]
                    ]);
                } elseif ($request->action == "prev") {
                    $next_order = $question->pivot->order - 1;
                } else {
                    $next_order = $question->pivot->order + 1;
                }

                $next_question = $participation->test->questions()->where('example', 0)->whereHas('responses', function ($q) use ($participation) {
                    $q->where('participation_id', $participation->id);
                })->wherePivot('order', $next_order)->first();

                $next_response = Response::where('question_id', $next_question->id)->where('participation_id', $participation->id)->first();

                $next_response->time_start_at = date('Y:m:d H:i:s');
                $next_response->save();

                return response()->json([
                    'redirect' => [
                        'ajax' => true,
                        'route' => 'refresh'
                    ]
                ]);
            }
        }
        abort(404);
    }
}
