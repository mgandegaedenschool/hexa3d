<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ParticipationTestType;

class ParticipationTestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ParticipationTestType = new ParticipationTestType();
        $ParticipationTestType->id = uniqid();
        $ParticipationTestType->name = 'standard';
        $ParticipationTestType->save();

        $ParticipationTestType = new ParticipationTestType();
        $ParticipationTestType->id = uniqid();
        $ParticipationTestType->name = 'training';
        $ParticipationTestType->save();
    }
}
