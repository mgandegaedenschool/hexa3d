<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function create(Request $request)
    {
        $psy = $this->check_acess();

        if ($psy['count_test'] == 0) {
            return abort('404');
        }

        return view('dashboard.patient.create', compact('psy'));
    }

    public function store(Request $request)
    {
        $psy = $this->check_acess();

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'formation' => 'required',
            'job' => 'required',
            'context' => 'required',
        ]);

        $patient = new Patient();
        $patient->id = uniqid();
        $patient->firstname = $request->get('firstname');
        $patient->lastname = $request->get('lastname');
        $patient->gender = $request->get('gender');
        $patient->age = $request->get('age');
        $patient->formation = $request->get('formation');
        $patient->job = $request->get('job');
        $patient->context = $request->get('context');
        $patient->wp_user_id = $psy['id'];
        $patient->save();

        return redirect()->route('dashboard.index', $patient->id);
    }

    public function update(Request $request, $id_patient)
    {
        $this->check_acess();

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'formation' => 'required',
            'job' => 'required',
            'context' => 'required',
        ]);

        $patient = Patient::find($id_patient);
        $patient->firstname = $request->get('firstname');
        $patient->lastname = $request->get('lastname');
        $patient->gender = $request->get('gender');
        $patient->age = $request->get('age');
        $patient->formation = $request->get('formation');
        $patient->job = $request->get('job');
        $patient->context = $request->get('context');
        $patient->save();

        return back();
    }
}
