<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = new Patient();
        $patient->id = uniqid();
        $patient->firstname = "John";
        $patient->lastname = "Doe";
        $patient->gender = "male";
        $patient->age = 25;
        $patient->formation = "Formation";
        $patient->job = "Job";
        $patient->context = "Context";
        $patient->wp_user_id = 1;
        $patient->save();
    }
}
