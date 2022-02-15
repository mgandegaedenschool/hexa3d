<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Notifications\UserRegisteredNotification;

class RegisteredUserController extends Controller
{

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        if (isset($_GET['id'])) {
            $request->session()->put('id', $_GET['id']);
        }
        $value = $request->session()->get('id');
        // $sess = session(['id' => 2]);
        // return view('auth.register');
        return view('auth.create-step-one', compact('value'));
    }

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
            'password' => ['required', 'string', 'min:8'],
            'username' => ['required', 'string', 'max:255'],
            'age' =>  ['required', 'integer'],
            'niv_etude' => ['required', 'string', 'max:255'],
            'classe' => ['required', 'string', 'max:255', 'nullable'],
            'section' => ['required', 'string', 'max:255', 'nullable'],
            'sexe' => ['required', 'string', 'max:255'],
            'scolarise' => ['required', 'integer'],
            'etablissement' => ['required', 'string', 'max:255', 'nullable'],
            'salarie' => ['required', 'integer', 'max:255'],
            'emploi_actuel' => ['required', 'string', 'max:255'],
            'specialite' => ['required', 'string', 'max:255'],
            'etat' => ['required', 'string', 'max:255', 'nullable'],
            'emploi_envisage' =>  ['required', 'string', 'max:255'],
            'etalonnage' => ['required', 'string', 'max:255']
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
            'emploi_envisage' => $request->emploi_envisage,
            'etalonnage' => $request->etalonnage,
            'role' => $request->role
        ]);

        if (Auth::user() &&  Auth::user()->admin == 1) {
            return redirect('admin.user');
        }
        // return redirect(RouteServiceProvider::HOME);
        return redirect('/dashboard');
    }
}
