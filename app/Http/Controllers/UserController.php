<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Notifications\UserRegisteredNotification;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user_index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_create');
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
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        // dd($request);

        $request->validate([

            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'max:255'],
            'postalcode' => ['required', 'integer'],
            'genre' => ['required', Rule::in(['male', 'femele'])],
            'age' => ['required', 'integer', 'max:255'],
            'situation' => ['required', Rule::in(['alternance', 'salarie', 'stagiaire', 'formation', 'ecolier', 'chomeur', 'autre'])],
            'etalonnage' => ['required', Rule::in(['femme', 'homme', 'collegien', 'collegienne', 'lyceen', 'lyceenne'])],
            'schoolname' => ['required', 'string', 'max:255', 'nullable'],
            'currentjob' => ['required', 'string', 'max:255'],
            'speciality' => ['required', 'string', 'max:255'],
            'envisagedjob' => ['required', 'string', 'max:255'],
            'state' => ['required', Rule::in(['attente', 'termine'])],
            'status' => ['required', 'string', 'max:255']
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'postalcode' => $request->postalcode,
            'genre' => $request->genre,
            'age' => $request->age,
            'situation' => $request->situation,
            'etalonnage' => $request->etalonnage,
            'schoolname' => $request->schoolname,
            'currentjob' => $request->currentjob,
            'speciality' => $request->speciality,
            'envisagedjob' => $request->envisagedjob,
            'state' => $request->state,
            'status' => $request->status,
        ]);

        event(new Registered($user));
        $util = ['email' => 'jean@jean.fr'];
        $post = ['title' => 'Mon jolie titre'];
        $user->notify(new UserRegisteredNotification($util, $post));
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user_show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // if (!Gate::allows('edit-user', $user)) {
        //     abort(403);
        // }
        // $categories = ::all();
        return view('admin.user_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // if (!Gate::allows('update-post', $user)) {
        //     abort(403);
        // }
        $arrayUpdate = [
            'status' => $request->status,
            'state' => $request->state
        ];

        $user->update($arrayUpdate);
        return redirect()->route('dashboard')->with('success', 'votre post a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // if (!Gate::allows('delete-user', $user)) {
        //     abort(403);
        // }
        $user->delete();
        return redirect()->route('dashboard')->with('success', 'votre post a été supprimé avec succès');
    }
}
