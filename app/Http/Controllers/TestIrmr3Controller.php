<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Partie;
use App\Models\Domaine;
use App\Models\Test_hi;
use App\Models\Etat_test;
use App\Models\Etalonnage;
use App\Models\Reponse_hi;
use App\Models\Question_hi;
use Illuminate\Http\Request;
use App\Models\Score_riarsec;
use App\Models\Tableau_score;
use App\Models\Participation_hi;
use App\Models\Table_etalonnage_d;
use App\Models\Item_serie_hexa3d_irmr;
use App\Models\Table_etalonnage_d_riarsec;

class TestIrmr3Controller extends Controller
{
    public $time_start;
    public $time_end;
    //
    public function conditions()
    {
        $this->time_start = microtime();

        return view('test.irmr3.test_irmr3_conditions');
    }
    public function consignes()
    {
        return view('test.irmr3.test_irmr3_consignes');
    }
    public function formulaire()
    {
        return view('test.irmr3.test_irmr3_formulaire');
    }
    public function formulaire1(Request $request)
    {
        // static $step = 2;
        // static $part = 1;
        // $data = $request->except('_token');

        // foreach ($data as $key => $value) {
        //     $tab = explode('|', $value);
        //     $combine = array_combine(array('note', 'domaine'), $tab);
        //     print_r($combine) . '<br>';
        // }

        $partie = Partie::create([
            'num_partie' => 1,
            'libelle_partie' => '1ère partie'
        ]);

        $domaine = Domaine::create([
            "libelle_domaine" => "Plein air",
            "id_partie" => $partie->id
        ]);
        $etat_test = Etat_test::create(["libelle_etat_test" => 'en cours']);

        $etalonnage = Etalonnage::create(["libelle_etalonnage" => Auth()->user()->etalonnage]);

        $item_serie = Item_serie_hexa3d_irmr::create(["id_partie" => $partie->id, "lettre/liste" => '', "libelle_item_hexa3d_irmr" => '']);

        $type = Type::create(["libelle_type" => 'IRMR3']);
        $test = Test_hi::create(["libelle_test" => "Test1: IRMR3", "id_type" => $type->id]);

        echo microtime();
        $cpt = connection_aborted();
        $participation = Participation_hi::create(["date_passage" => date("d/m/y"), "id_test" => $test->id, "id_user" => Auth()->user()->id, "id_etalonnage_default" => $etalonnage->id, "id_etat_test" => $etat_test->id, "lien_test" => ' ', "nombre_interruption" => $cpt, "Temps_passage" => Date("y:m:d h:i:s", (microtime(true) - $this->time_start))]);

        $question = Question_hi::create(["id_item_hexa3d" => $item_serie->id, "id_test" => $test->id, "id_partie" => $partie->id, "id_domaine" => $domaine->id, "ordre" => 1, "type_riarsec" => "IRMR3"]);


        Reponse_hi::create(["id_question" => $question->id, "id_participation" => $participation->id, "score" => 2, "libelle_bonus" => "premier bonus"]);

        $tableau_score = Tableau_score::create(["libelle_tableau_score" => 'Notes brutes trois domaines', "id_participation" => $participation->id]);

        //$score_riarsec = Score_riarsec::create(["id_tableau_score" => $tableau_score->id, "id_partie" => $partie->id, "type_riarsec" => ' ', "sous_total" => ' ']);
        $score_riarsec = Score_riarsec::create(["id_partie" => $partie->id, "id_participation" => $participation->id, "type_riarsec" => 'R', "sous_total" => 5]);

        Table_etalonnage_d::create(["libelle_table" => 'ensemble des collégiens filles et garçon (N=353)', "id_etalonnage" => $etalonnage->id, "id_domaine" => $domaine->id, "type_riarsec" => "R"]);

        Table_etalonnage_d_riarsec::create(["id_table_etalonnage_d" => 2, "RIARSEC" => "R", "plage" => "0-2"]);

        // return view('test.irmr3.test_irmr3_formulaire', [$step, $part]);
        return view('test.irmr3.test_irmr3_formulaire_part');
    }
    // public function formulaire2()
    // {
    //     die('step2');
    //     return view('test.irmr3.test_irmr3_formulaire_part2');
    // }
    // public function formulaire3()
    // {
    //     return view('test.irmr3.test_irmr3_formulaire_part3');
    // }
    // public function formulaire4()
    // {
    //     return view('test.irmr3.test_irmr3_formulaire_part4');
    // }
    // public function formulaire5()
    // {
    //     return view('test.irmr3.test_irmr3_formulaire_part5');
    // }
    // public function formulaire6()
    // {
    //     return view('test.irmr3.test_irmr3_formulaire_part6');
    // }
    // public function formulaire7()
    // {
    //     return view('test.irmr3.test_irmr3_formulaire_part7');
    // }
    // public function formulaire8()
    // {
    //     return view('test.irmr3.test_irmr3_formulaire_part8');
    // }
    // public function formulaire9()
    // {
    //     return view('test.irmr3.test_irmr3_formulaire_part9');
    // }
    // public function bonus()
    // {
    //     return view('test.irmr3.test_irmr3_bonus');
    // }
    // public function fin()
    // {
    //     return view('test.irmr3.test_irmr3_fin');
    // }
}
