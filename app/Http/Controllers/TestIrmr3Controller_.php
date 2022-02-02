<?php

namespace App\Http\Controllers;

use App\Models\Quality;
use App\Models\Activity;
use App\Models\ResponseA;
use App\Models\Profession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TestIrmr3Controller extends Controller
{
    public function index()
    {   
        // $activities = Activity::all();
        // $qualities = Quality::all();
        // $profession = Profession::all();
        // return view('test.index', compact('activities', 'qualities', 'profession'));
        return view('test.create-step-one');
    }

    public function createStepOne(Request $request)
    {
        
        // $activity = $request->session()->get('activity');
        // // return view('test.create-step-one', compact('activity'));
        // $activities = Activity::all();
        // return view('test.create-step-one', compact('activities'));
        return view('test.create-step-one');
    }

    public function postCreateStepOne(Request $request)
    {
        dd($request);
        // // dd($request->input());
        // $validatedData = $request->validate([
        //     // 'name' => 'required|unique:products',
        //     // 'amount' => 'required|numeric',
        //     // 'description' => 'required',
        //     'Photographier' => 'required|string',
        //     'Trouver' => 'required|string',
        //     'Batir' => 'required|string',
        //     'Aider' => 'required|string',
        //     'Planifier' => 'required|string',
        //     'Persuader' => 'required|string'
        // ]);
        // dd(auth()->user()->etalonnage);
        // ResponseA::create([
        //     'response' => json_encode('aa'),
        //     'activity' => json_encode($request->input()),
        //     'profession' => json_encode(['cc']),
        //     'quality' => json_encode(['dd']),
        //     'type' => json_encode(['ee']),
        //     'testName' => 'tttttt',
        //     'followedBy' => 'fffff',
        //     'score' => 12.2
        // ]);

        // if (empty($request->session()->get('activity'))) {
        //     $activity = new ResponseA();
        //     $activity->fill($validatedData);
        //     $request->session()->put('activity', $activity);
        // } else {
        //     $activity = $request->session()->get('activity');
        //     $activity->fill($validatedData);
        //     $request->session()->put('activity', $activity);
        // }

        // return redirect()->route('test.create.step.two');
    }

    // public function createStepTwo(Request $request)
    // {
    //     $product = $request->session()->get('product');
    //     return view('products.create-step-two', compact('product'));
    // }

    // public function postCreateStepTwo(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'stock' => 'required',
    //         'status' => 'required',
    //     ]);

    //     $product = $request->session()->get('product');
    //     $product->fill($validatedData);
    //     $request->session()->put('product', $product);

    //     return redirect()->route('products.create.step.three');
    // }

    // public function createStepThree(Request $request)
    // {
    //     $product = $request->session()->get('product');
    //     return view('products.create-step-three', compact('product'));
    // }

    // public function postCreateStepThree(Request $request)
    // {
    //     $product = $request->session()->get('product');
    //     $product->save();

    //     $request->session()->forget('product');
    //     return redirect()->route('products.index');
    // }

}
