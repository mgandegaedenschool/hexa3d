<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CalibrationGroup;
use App\Models\Test;

class CalibrationGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test_A = Test::where('name', 'A/B')->first();
        $test_C = Test::where('name', 'C')->first();

        $calibrationGroup = new CalibrationGroup();
        $calibrationGroup->id = uniqid();
        $calibrationGroup->name = "10";
        $calibrationGroup->test()->associate($test_A);
        $calibrationGroup->save();

        $calibrationGroup = new CalibrationGroup();
        $calibrationGroup->id = uniqid();
        $calibrationGroup->name = "9";
        $calibrationGroup->test()->associate($test_A);
        $calibrationGroup->save();


        $calibrationGroup = new CalibrationGroup();
        $calibrationGroup->id = uniqid();
        $calibrationGroup->name = "10";
        $calibrationGroup->test()->associate($test_C);
        $calibrationGroup->save();

        $calibrationGroup = new CalibrationGroup();
        $calibrationGroup->id = uniqid();
        $calibrationGroup->name = "9";
        $calibrationGroup->test()->associate($test_C);
        $calibrationGroup->save();
    }
}
