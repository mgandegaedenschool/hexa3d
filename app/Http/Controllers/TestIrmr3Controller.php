<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestIrmr3Controller extends Controller
{
    //
    public function conditions(){
        return view('test.test_irmr3_conditions');
    }
    public function consignes(){
        return view('test.test_irmr3_consignes');
    }
    public function formulaire(){
        return view('test.test_irmr3_formulaire');
    }
    public function formulaire1(){
        return view('test.test_irmr3_formulaire_part1');
    }
    public function formulaire2(){
        return view('test.test_irmr3_formulaire_part2');
    }
    public function formulaire3(){
        return view('test.test_irmr3_formulaire_part3');
    }
    public function formulaire4(){
        return view('test.test_irmr3_formulaire_part4');
    }
    public function formulaire5(){
        return view('test.test_irmr3_formulaire_part5');
    }
    public function formulaire6(){
        return view('test.test_irmr3_formulaire_part6');
    }
    public function formulaire7(){
        return view('test.test_irmr3_formulaire_part7');
    }
    public function formulaire8(){
        return view('test.test_irmr3_formulaire_part8');
    }
    public function formulaire9(){
        return view('test.test_irmr3_formulaire_part9');
    }
    public function bonus(){
        return view('test.test_irmr3_bonus');
    }
}
