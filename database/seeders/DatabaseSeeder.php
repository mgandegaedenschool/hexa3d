<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ColorSeeder::class);
        $this->call(NumberSeeder::class);

        $this->call(TestSeeder::class);

        $this->call(CalibrationTypeSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(CalibrationGroupSeeder::class);
        $this->call(CalibrationSeeder::class);

        $this->call(QuestionTypeSeeder::class);
        $this->call(QuestionSeeder::class);

        // $this->call(ClueSeeder::class);

        $this->call(StatusSeeder::class);

        $this->call(ParticipationTestTypeSeeder::class);

        $this->call(PatientSeeder::class);
    }
}
