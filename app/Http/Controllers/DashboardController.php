<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Response;
use Illuminate\Http\Request;
use App\Models\Participation;
use Illuminate\Support\Facades\DB;
use App\Models\ParticipationTestType;
use App\Models\Patient;

class DashboardController extends Controller
{
    public function index(Request $request, $id_patient = null)
    {
        $psy = $this->check_acess();

        if (!$id_patient) {
            $patients = Patient::where('wp_user_id', $psy['id'])->paginate(5);

            return view('dashboard.psy.index', compact('psy', 'patients'));
        } else {
            $patient = Patient::where('id', $id_patient)->first();

            if (!$patient) {
                return abort('404');
            }

            $tests = Test::all();
            $participations = $patient->participations;
            $participationTestTypes = ParticipationTestType::all();

            foreach ($participations as $key => $participation) {
                $total = Response::whereHas('question', static function ($query) {
                    return $query->where('example', 0);
                })->whereHas('participation', static function ($query) use ($participation) {
                    return $query->where('id', $participation->id)->whereHas('test', static function ($query) use ($participation) {
                        return $query->where('id', $participation->test->id);
                    });
                })->count();

                $faults = Response::where(function ($q) {
                    $q->where('rcc', '!=', 1)->orWhere('rcc', null);
                })->whereHas('participation', static function ($query) use ($participation) {
                    return $query->where('id', $participation->id)->whereHas('test', static function ($query) use ($participation) {
                        return $query->where('id', $participation->test->id);
                    });
                })->count();

                $participation["total"] = $total;
                $participation["faults"] = $faults;
            }

            return view('dashboard.patient.psy', compact('psy', 'tests', 'participations', 'participationTestTypes', 'patient'));
        }
    }
}
