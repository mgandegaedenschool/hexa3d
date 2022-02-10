<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\Type;
use App\Models\User;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
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
    public static $id;
    public function index(Request $request)
    {
        if (isset($_GET['scales']) and !empty($_GET['scales'])) {
            $benef  = $_GET['scales'];
            if (isset($_GET['options']) and $_GET['options'] == 'delete') {
                foreach ($benef as $val) {
                    $this->destroy($val);
                }
            }
            if (isset($_GET['options']) and $_GET['options'] == 'invitation') {
                $invitation = 'invitation';
                $request->session()->put('id',  $_GET['scales']);

                return redirect('/pro')->with('invitation', 'Le bénéficiaire a bien été ajouté');
            }
        }
        if (isset($_GET['filtre']) and !empty($_GET['filtre'])) {

            if ($_GET['filtre'] == 'last_weeek') {
                $date = Carbon::now();
                $expDate = Carbon::now()->subDays(7);
            } elseif ($_GET['filtre'] == 'last_month') {
                $date = Carbon::now();
                $expDate = Carbon::now()->subDays(30);
            } elseif ($_GET['filtre'] == 'last_six_months') {
                $date = Carbon::now();
                $expDate = Carbon::now()->subDays(183);
            } elseif ($_GET['filtre'] == 'last_ten_months') {
                $date = Carbon::now();
                $expDate = Carbon::now()->subDays(365);
            }
            $users = DB::table('users')
                ->whereBetween('date', [$expDate, $date])
                ->get();

            return view('admin.user.user_index', ['users' => $users]);
        } elseif (isset($_GET['rechNom'], $_GET['rechPrenom'], $_GET['rechEmail'], $_GET['rechSexe'], $_GET['rechDate'])) {

            $req[] = array();
            if ($_GET['rechNom']) {
                $search_text1 = $_GET['rechNom'];
                $req1 = ['lastname', 'like', '%' . $search_text1 . '%'];
                array_push($req, $req1);
            }
            if ($_GET['rechPrenom']) {
                $search_text2 = $_GET['rechPrenom'];
                $req2 = ['firstname', 'like', '%' . $search_text2 . '%'];
                array_push($req, $req2);
            }
            if ($_GET['rechEmail']) {
                $search_text3 = $_GET['rechEmail'];
                $req3 = ['email', 'like', '%' . $search_text3 . '%'];
                array_push($req, $req3);
            }
            if ($_GET['rechSexe']) {
                $search_text4 = $_GET['rechSexe'];
                $req4 = ['sexe', 'like', '%' . $search_text4 . '%'];
                array_push($req, $req4);
            }
            if ($_GET['rechDate']) {
                $search_text5 = $_GET['rechDate'];
                $req5 = ['date', 'like', '%' . $search_text5 . '%'];
                array_push($req, $req5);
            }
            array_shift($req);
        }
        if ((isset($req) and count($req) >= 1)) {

            if ($req[0]) {
                $users = DB::table('users')->where([$req[0]])->get();
            }
            if (isset($req[1])) {
                $users = DB::table('users')->where([$req[0]])->where([$req[1]])->get();
            }
            if (isset($req[2])) {
                $users = DB::table('users')->where([$req[0]])->where([$req[1]])->where([$req[2]])->get();
            }
            if (isset($req[3])) {
                $users = DB::table('users')->where([$req[0]])->where([$req[1]])->where([$req[2]])->where([$req[3]])->get();
            }
            if (isset($req[4])) {
                $users = DB::table('users')->where([$req[0]])->where([$req[1]])->where([$req[2]])->where([$req[3]])->where([$req[4]])->get();
            }
            return view('admin.user.user_index', ['users' => $users]);
        } else {

            $users = User::all();
            // dd($users);
            $users = DB::table('users')->paginate(10);
            $items = ['nbItems' => $users->count(), 'pageCourant' => $users->currentPage(), 'nbPages' => $users->lastPage()];
            return view('admin.user.user_index', compact('users', 'items'));
        }
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
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if (!isset($request->email)) {

            $request->validate([
                'etalonnage' => ['required', Rule::in(['adulte', 'collégien', 'collégienne', 'lycéen', 'lycéenne'])],
                'test' => ['required', 'string', 'max:255']
            ]);

            foreach ($request->session()->get('id') as $id) {
                // DB::table('users')
                //     ->where('id', $id)
                //     ->update([
                //         'etalonnage' => $request->etalonnage,
                //         'test' => $request->test
                //     ]);
                User::findOrFail($id)->update([
                    'etalonnage' => $request->etalonnage,
                    'test' => $request->test
                ]);

                $user = DB::table('users')
                    ->where('id', $id)->first();
                event(new Registered($user));
                // $user->notify(new UserRegisteredNotification($user));
                auth()->user()->notify(new UserRegisteredNotification($user));
                // Auth::login($user);
            }

            return redirect('/pro')->with('status', 'Le bénéficiaire a bien été ajouté');
        } else {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'etalonnage' => ['required', Rule::in(['adulte', 'collégien', 'collégienne', 'lycéen', 'lycéenne'])],
                'test' => ['required', 'string', 'max:255']
            ]);

            // $affected = DB::table('users')
            //     ->where('id', $request->session()->get('id'))
            //     ->update([
            //         'email' => $request->email,
            //         'etalonnage' => $request->etalonnage,
            //         'test' => $request->test
            //     ]);
            $user = User::create([
                'email' => $request->email,
                'etalonnage' => $request->etalonnage,
                'test' => $request->test
            ]);

            event(new Registered($user));
            $user->notify(new UserRegisteredNotification($user));
            Auth::login($user);

            return redirect('/pro')->with('status', 'Le bénéficiaire a bien été ajouté');
        }

        // $util = ['email' => 'jean@jean.fr'];
        // $post = ['title' => 'Mon jolie titre'];
        // return redirect('/pro')->with('status', 'Le bénéficiaire a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $user = $affected = DB::table('users')
            ->where('id', $user)->first();
        return view('admin.user.user_show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $user = DB::table('users')->where('id', $user)->first();
        // if (!Gate::allows('edit-user', $user)) {
        //     abort(403);
        // }
        // $categories = ::all();
        // $user = ['prenom' => 'jean'];
        return view('admin.user.user_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if (!Gate::allows('update-post', $user)) {
        //     abort(403);
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
        return redirect()->route('pro.index')->with('success', 'élément supprimé avec succès');
    }
}
