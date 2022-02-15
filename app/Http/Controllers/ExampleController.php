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

class ExampleController extends Controller
{
    public function index(Request $request, $token_participation)
    {
        $participation = Participation::where('token', $token_participation)->first();

        if ($participation && $participation->status->name == "example_active") {
            $questions = $participation->test->questions()->where('example', 1);

            $count_questions = $questions->count();

            $question = $questions->whereHas('responses', function ($q) use ($participation) {
                $q->where('time', null)->where('participation_id', $participation->id);
            })->orderBy('order', 'asc')->first();

            if (count($question->numberColors) > 1) {
                $question->multiple = true;
            } else {
                $question->multiple = false;
            }

            $response = Response::where('question_id', $question->id)->where('participation_id', $participation->id)->first();

            $numbers = Number::all();
            $colors = Color::all();

            $number = $question->numberColors()->first();
            $color = Color::find($number->pivot->color_id);

            if ($request->ajax()) {
                $view = view('test.example.question', compact('participation', 'numbers', 'colors', 'number', 'color', 'response', 'question', 'count_questions'))->render();
                return response()->json([
                    'question' => [
                        'content' => $view
                    ]
                ]);
            }

            return view('test.example.index', compact('participation', 'numbers', 'colors', 'number', 'color', 'response', 'question', 'count_questions'));
        }
        abort(404);
    }

    public function store(Request $request, $token_participation)
    {
        if ($request->ajax()) {
            $participation = Participation::where('token', $token_participation)->first();

            if ($participation && $participation->status->name == "example_active") {
                $validator = Validator::make($request->all(), [
                    'number' => 'required|exists:numbers,id',
                    'color' => 'required|exists:colors,id',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'errors' => $validator->getMessageBag()->toArray()
                    ], 422);
                }
                
                $question = $participation->test->questions()->where('example', 1)->whereHas('responses', function ($q) use ($participation) {
                    $q->where('time', null)->where('participation_id', $participation->id);
                })->orderBy('order', 'asc')->first();

                $response = Response::where('question_id', $question->id)->where('participation_id', $participation->id)->first();

                if ($response->time) {
                    return response()->json([
                        'errors' => [
                            'result' => 'Une erreur s\'est produite !',
                        ]
                    ], 422);
                }

                $number = $question->numberColors()->first();
                $color = Color::find($number->pivot->color_id);

                $next_question = $participation->test->questions()->where('example', 1)->whereHas('responses', function ($q) use ($participation) {
                    $q->where('participation_id', $participation->id);
                })->wherePivot('order', $question->pivot->order + 1)->first();

                if ($response->retry_times < 2) {
                    $response->retry_times = $response->retry_times + 1;

                    if (count($response->numberColors) > 0) {
                        $response->numberColors()->detach($response->numberColors[0]['id']);
                    }
                    
                    $response->numberColors()->attach($number, ['color_id' => $color->id]);
    
                    if ($request->number == $number->id && $request->color == $color->id) {
                        $response->rcc = 1;
                        $response->rcp = 0;
                        $response->time = date("H:i:s",((strtotime(date("Y/m/d H:i:s")) - strtotime($response->time_start_at)) + strtotime($response->time)));
                        $response->time_start_at = null;
                        $response->save();
                    } elseif ($request->number == $number->id || $request->color == $color->id) {
                        $response->rcc = 0;
                        $response->rcp = 0.5;
                        $response->save();
    
                        if ($response->retry_times < 2) {
                            return response()->json([
                                'errors' => [
                                    'result' => 'Ce n\'est pas la bonne réponse !',
                                ]
                            ], 422);
                        } else {
                            return response()->json([
                                'redirect' => [
                                    'ajax' => true,
                                    'route' => 'refresh'
                                ]
                            ]);
                        }
                    } else {
                        $response->rcc = 0;
                        $response->rcp = 0;
                        $response->save();
    
                        if ($response->retry_times < 2) {
                            return response()->json([
                                'errors' => [
                                    'result' => 'Ce n\'est pas la bonne réponse !',
                                ]
                            ], 422);
                        } else {
                            return response()->json([
                                'redirect' => [
                                    'ajax' => true,
                                    'route' => 'refresh'
                                ]
                            ]);
                        }
                    }

                    if ($next_question) {
                        $next_response = Response::where('question_id', $next_question->id)->where('participation_id', $participation->id)->first();

                        $next_response->time_start_at = date('Y:m:d H:i:s');
                        $next_response->save();

                        return response()->json([
                            'redirect' => [
                                'ajax' => true,
                                'route' => 'refresh'
                            ]
                        ]);
                    } else {
                        $participation->status()->associate(Status::where('name', 'example_result')->first());
                        $participation->save();

                        return response()->json([
                            'redirect' => [
                                'ajax' => false,
                                'route' => route('participation', [$participation->token])
                            ]
                        ]);
                    }
                } else {
                    $response->time = date("H:i:s",((strtotime(date("Y/m/d H:i:s")) - strtotime($response->time_start_at)) + strtotime($response->time)));
                    $response->time_start_at = null;
                    $response->save();

                    if ($next_question) {
                        $next_response = Response::where('question_id', $next_question->id)->where('participation_id', $participation->id)->first();

                        $next_response->time_start_at = date('Y:m:d H:i:s');
                        $next_response->save();

                        return response()->json([
                            'redirect' => [
                                'ajax' => true,
                                'route' => 'refresh'
                            ]
                        ]);
                    } else {
                        $participation->status()->associate(Status::where('name', 'example_result')->first());
                        $participation->save();

                        return response()->json([
                            'redirect' => [
                                'ajax' => false,
                                'route' => route('participation', [$participation->token])
                            ]
                        ]);
                    }
                }
            }
        }
        abort(404);
    }
}
