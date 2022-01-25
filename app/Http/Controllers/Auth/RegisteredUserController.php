<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'username' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //         'password' => ['required', Rules\Password::defaults()],
    //     ]);

    //     $user = User::create([
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect(RouteServiceProvider::HOME);
    // }

    /** 
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([

            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'max:255'],
            'age' =>  ['required', 'integer'],
            'niv_etude' => ['required', 'string', 'max:255'],
            'classe' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'scolarise' => ['required', 'integer'],
            'etablissement' => ['required', 'string', 'max:255'],
            'salarie' => ['required', 'integer', 'max:255'],
            'emploi_actuel' => ['required', 'string', 'max:255'],
            'specialite' => ['required', 'string', 'max:255'],
            'etat' => ['required', 'string', 'max:255'],
            'emploi_envisage' =>  ['required', 'string', 'max:255']
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'niv_etude' => $request->niv_etude,
            'classe' => $request->classe,
            'section' => $request->section,
            'sexe' => $request->sexe,
            'age' => $request->age,
            'scolarise' => $request->scolarise,
            'etablissement' => $request->etablissement,
            'salarie' => $request->salarie,
            'emploi_actuel' => $request->emploi_actuel,
            'specialite' => $request->specialite,
            'etat' => $request->etat,
            'emploi_envisage' => $request->emploi_envisage

        ]);
    }
}
