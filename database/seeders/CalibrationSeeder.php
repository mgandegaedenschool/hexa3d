<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Calibration;
use App\Models\CalibrationGroup;
use App\Models\Level;
use App\Models\CalibrationType;

class CalibrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level_1 = Level::where('name', 'CAP')->first();
        $level_2 = Level::where('name', '3eme')->first();

        $calibrationGroup_10 = CalibrationGroup::where('name', '10')->first();
        $calibrationGroup_9 = CalibrationGroup::where('name', '9')->first();

        $array_calibration = [
            "rcc" => [
                "37" => 10,
                "35" => 9,
                "32" => 8,
                "28" => 7,
                "25" => 6,
                "21" => 5,
                "16" => 4,
                "12" => 3,
                "6" => 2,
                "3" => 1,
                "0" => 0,
            ],
            "potential" => [
                "74" => 10,
                "70" => 9,
                "64" => 8,
                "56" => 7,
                "50" => 6,
                "42" => 5,
                "32" => 4,
                "24" => 3,
                "12" => 2,
                "6" => 1,
                "0" => 0,
            ],
            "precision" => [
                "0.9" => 10,
                "0.8" => 9,
                "0.7" => 8,
                "0.6" => 7,
                "0.55" => 6,
                "0.5" => 5,
                "0.4" => 4,
                "0.3" => 3,
                "0.2" => 2,
                "0.1" => 1,
                "0" => 0
            ],
            "speed" => [
                "0.9" => 10,
                "0.8" => 9,
                "0.7" => 8,
                "0.6" => 7,
                "0.55" => 6,
                "0.5" => 5,
                "0.4" => 4,
                "0.3" => 3,
                "0.2" => 2,
                "0.1" => 1,
                "0" => 0
            ],
        ];

        foreach ($array_calibration as $key_type => $value_type) {
            $calibrationType = CalibrationType::where('name', $key_type)->first();

            foreach ($value_type as $key => $value) {
                $calibration = new Calibration();
                $calibration->id = uniqid();
                $calibration->value = $key;
                $calibration->point = $value;
                $calibration->level()->associate($level_1);
                $calibration->calibrationGroup()->associate($calibrationGroup_10);
                $calibration->calibrationType()->associate($calibrationType);
                $calibration->save();

                $calibration = new Calibration();
                $calibration->id = uniqid();
                $calibration->value = $key;
                $calibration->point = $value;
                $calibration->level()->associate($level_1);
                $calibration->calibrationGroup()->associate($calibrationGroup_9);
                $calibration->calibrationType()->associate($calibrationType);
                $calibration->save();


                $calibration = new Calibration();
                $calibration->id = uniqid();
                $calibration->value = $key;
                $calibration->point = $value;
                $calibration->level()->associate($level_2);
                $calibration->calibrationGroup()->associate($calibrationGroup_10);
                $calibration->calibrationType()->associate($calibrationType);
                $calibration->save();

                $calibration = new Calibration();
                $calibration->id = uniqid();
                $calibration->value = $key;
                $calibration->point = $value;
                $calibration->level()->associate($level_2);
                $calibration->calibrationGroup()->associate($calibrationGroup_9);
                $calibration->calibrationType()->associate($calibrationType);
                $calibration->save();
            }
        }
    }
}
