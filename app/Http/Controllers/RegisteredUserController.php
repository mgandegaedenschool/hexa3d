<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{

    public function createStepOne(Request $request)
    {
        $register = $request->session()->get('register');
        return view('auth.create-step-one', compact('register'));
    }
    public function postCreateStepOne(Request $request)
    {

        $validatedData = $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'username' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'max:255']
        ]);
        $request->session()->put('step1', $validatedData);

        return redirect()->route('register.create.step.two');
    }
    public function createStepTwo(Request $request)
    {
        $register = $request->session()->get('request');
        return view('auth.create-step-two', compact('register'));
    }
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'niv_etude' => ['required', 'string', 'max:255'],
            'scolarise' => ['required', 'integer', 'max:255'],
            'classe' => ['string', 'max:255'],
            'section' => ['string', 'max:255'],
            'etablissement' => ['string', 'max:255'],
            'salarie' => ['required', 'integer', 'max:255']
        ]);

        $step1 = $request->session()->get('step1');
        $step2 = array_merge($step1, $validatedData);

        $request->session()->put('step2', $step2);
        return redirect()->route('register.create.step.three');
    }
    public function createStepThree(Request $request)
    {
        $step3 = $request->session()->get('step2');
        return view('auth.create-step-three', compact('step3'));
    }
    public function postCreateStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'emploi_actuel' => ['required', 'string', 'max:255'],
            'specialite' => ['required', 'string', 'max:255'],
            'etat' => ['required', 'string', 'max:255'],
            'emploi_envisage' => ['required', 'string', 'max:255']
        ]);

        $step2 = $request->session()->get('step2');
        $step3 = array_merge($step2, $validatedData);

        $request->session()->put('step3', $step3);

        $user = User::create([
            'firstname' => $step3['firstname'],
            'lastname' => $step3['lastname'],
            'email' => $step3['email'],
            'password' => Hash::make($step3['password']),
            'username' => $step3['username'],
            'niv_etude' => $step3['niv_etude'],
            'classe' => $step3['classe'],
            'section' => $step3['section'],
            'sexe' => $step3['sexe'],
            'age' => $step3['age'],
            'scolarise' => $step3['scolarise'],
            'etablissement' => $step3['etablissement'],
            'salarie' => $step3['salarie'],
            'emploi_actuel' => $step3['emploi_actuel'],
            'specialite' => $step3['specialite'],
            'etat' => $step3['etat'],
            'emploi_envisage' => $step3['emploi_envisage']

        ]);
        return redirect(RouteServiceProvider::HOME);
    }
}
