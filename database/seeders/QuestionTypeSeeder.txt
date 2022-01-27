<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuestionType;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionType = new QuestionType();
        $questionType->id = uniqid();
        $questionType->name = "S";
        $questionType->save();

        $questionType = new QuestionType();
        $questionType->id = uniqid();
        $questionType->name = "N";
        $questionType->save();

        $questionType = new QuestionType();
        $questionType->id = uniqid();
        $questionType->name = "Co";
        $questionType->save();
    }
}
