<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\UserController;


class GetMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($_GET['query'])) {
            $search_text = $_GET['query'];
            $users = DB::table('users')->where('username', 'LIKE', '%' . $search_text . '%')->paginate(10);
            $items = ['nbItems' => $users->count(), 'pageCourant' => $users->currentPage(), 'nbPages' => $users->lastPage()];
            // return view('admin.user_index', ['users' => $users, 'items' => $items]);
            return redirect()->action(
                [UserController::class, 'index'],
                ['users' => $users, 'items' => $items]
            );
        } else {

            $users = DB::table('users')->limit($request->query('q'))->get();
            return view('admin.user.user_index', ['users' => $users, 'val'=>$request->query('q')]);
        }
    }
}
