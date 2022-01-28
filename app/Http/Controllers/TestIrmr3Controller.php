<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestIrmr3Controller extends Controller
{
    //
    public function conditions(){
        return view('test.test_irmr3_conditions');
    }
    public function formulaire(){
        return view('test.test_irmr3_formulaire');
    }
}
