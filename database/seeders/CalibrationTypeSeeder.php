<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CalibrationType;

class CalibrationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calibrationType = new CalibrationType();
        $calibrationType->id = uniqid();
        $calibrationType->name = "rcc";
        $calibrationType->save();

        $calibrationType = new CalibrationType();
        $calibrationType->id = uniqid();
        $calibrationType->name = "potential";
        $calibrationType->save();

        $calibrationType = new CalibrationType();
        $calibrationType->id = uniqid();
        $calibrationType->name = "precision";
        $calibrationType->save();

        $calibrationType = new CalibrationType();
        $calibrationType->id = uniqid();
        $calibrationType->name = "speed";
        $calibrationType->save();
    }
}
