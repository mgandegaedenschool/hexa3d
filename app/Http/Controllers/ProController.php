<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $users = DB::table('users')->paginate(10);
        $items = ['nbItems' => $users->count(), 'pageCourant' => $users->currentPage(), 'nbPages' => $users->lastPage()];
        return view('admin.user.user_index', compact('users', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //         //     'name' => ['required', 'string', 'max:255'],
        //         //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //         //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        //         // ]);
        //         // dd($request);

        //         $request->validate([

        //             'firstname' => ['required', 'string', 'max:255'],
        //             'lastname' => ['required', 'string', 'max:255'],
        //             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //             'password' => ['required', 'string', 'min:8', 'confirmed'],
        //             'username' => ['required', 'string', 'max:255'],
        //             'postalcode' => ['required', 'integer'],
        //             'genre' => ['required', Rule::in(['male', 'femele'])],
        //             'age' => ['required', 'integer', 'max:255'],
        //             'situation' => ['required', Rule::in(['alternance', 'salarie', 'stagiaire', 'formation', 'ecolier', 'chomeur', 'autre'])],
        //             'etalonnage' => ['required', Rule::in(['femme', 'homme', 'collegien', 'collegienne', 'lyceen', 'lyceenne'])],
        //             'schoolname' => ['required', 'string', 'max:255', 'nullable'],
        //             'currentjob' => ['required', 'string', 'max:255'],
        //             'speciality' => ['required', 'string', 'max:255'],
        //             'envisagedjob' => ['required', 'string', 'max:255'],
        //             'state' => ['required', Rule::in(['attente', 'termine'])],
        //             'status' => ['required', 'string', 'max:255']
        //         ]);

        //         $user = User::create([
        //             'firstname' => $request->firstname,
        //             'lastname' => $request->lastname,
        //             'email' => $request->email,
        //             'password' => Hash::make($request->password),
        //             'username' => $request->username,
        //             'postalcode' => $request->postalcode,
        //             'genre' => $request->genre,
        //             'age' => $request->age,
        //             'situation' => $request->situation,
        //             'etalonnage' => $request->etalonnage,
        //             'schoolname' => $request->schoolname,
        //             'currentjob' => $request->currentjob,
        //             'speciality' => $request->speciality,
        //             'envisagedjob' => $request->envisagedjob,
        //             'state' => $request->state,
        //             'status' => $request->status,
        //         ]);

        //         event(new Registered($user));
        //         $util = ['email' => 'jean@jean.fr'];
        //         $post = ['title' => 'Mon jolie titre'];
        //         $user->notify(new UserRegisteredNotification($util, $post));
        //         Auth::login($user);

        //         return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $affected = DB::table('users')
            ->where('id', 1)->first();
        dd('okay');
        return view('admin.pro.pro_show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        // if (!Gate::allows('edit-user', $user)) {
        //     abort(403);
        // }

        // $user = ['prenom' => 'jean'];
        return view('admin.user.user_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if (!Gate::allows('update-post', $user)) {
        //     //     abort(403);
        // }
        $arrayUpdate = [
            'firstname' => $request->firstname,
            'lastname' =>  $request->lastname,
            'email' =>  $request->email,
            'username' =>  $request->username,
            'niv_etude' =>  $request->niv_etude,
            'classe' =>  $request->classe,
            'section' =>  $request->section,
            'sexe' =>  $request->sexe,
            'age' =>  $request->age,
            'scolarise' =>  $request->scolarise,
            'etablissement' =>  $request->etablissement,
            'salarie' =>  $request->salarie,
            'emploi_actuel' =>  $request->emploi_actuel,
            'specialite' =>  $request->specialite,
            'etat' =>  $request->etat,
            'emploi_envisage' =>  $request->emploi_envisage,
            'role' =>  $request->role,
        ];
        // $user = DB::table('users')->where('id', $user)->first();
        $user = DB::table('users')->where('id', $id);

        $user->update($arrayUpdate);
        if (auth()->user()->admin == 0) {
            return redirect()->route('dashboard')->with('success', 'élément modifié');
        }
        if (auth()->user()->admin == 1) {
            return redirect()->route('user.index')->with('success', 'élément modifié');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (!Gate::allows('delete-user', $user)) {
        //     abort(403);
        // }
        $user = DB::table('users')->where('id', $id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'élément supprimé avec succès');
    }
}
