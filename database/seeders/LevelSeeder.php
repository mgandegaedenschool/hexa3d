<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;
use App\Models\Test;

class LevelSeeder extends Seeder
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

        $level = new Level();
        $level->id = uniqid();
        $level->name = "CAP";
        $level->test()->associate($test_A);
        $level->save();

        $level = new Level();
        $level->id = uniqid();
        $level->name = "3eme";
        $level->test()->associate($test_A);
        $level->save();


        $level = new Level();
        $level->id = uniqid();
        $level->name = "CAP";
        $level->test()->associate($test_C);
        $level->save();

        $level = new Level();
        $level->id = uniqid();
        $level->name = "3eme";
        $level->test()->associate($test_C);
        $level->save();
    }
}
