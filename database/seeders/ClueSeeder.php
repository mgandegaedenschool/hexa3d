<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clue;
use App\Models\Question;

class ClueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $question_1_T = Question::where('name', 'Question A P 1 T')->first();
        // dd($question_1_T);
        // $question_2_T = Question::where('name', 'Question A P 2 T')->first();
        // $question_3_T = Question::where('name', 'Question A P 3 T')->first();
        // $question_4_T = Question::where('name', 'Question A P 4 T')->first();

        // $question_T_1 = Question::where('name', 'Question A T 1')->first();
        // $question_T_2 = Question::where('name', 'Question A T 2')->first();
        // $question_T_3 = Question::where('name', 'Question A T 3')->first();
        // $question_T_4 = Question::where('name', 'Question A T 4')->first();

        // $question_CA_1 = Question::where('name', 'Question A CA 1')->first();
        // $question_CA_2 = Question::where('name', 'Question A CA 2')->first();
        // $question_CA_3 = Question::where('name', 'Question A CA 3')->first();
        // $question_CA_4 = Question::where('name', 'Question A CA 4')->first();

        $question_1_T = Question::where('name', 'Question A/B-1|C-1 3P EX')->first();
        $question_2_T = Question::where('name', 'Question A/B-2|C-2 8C EX')->first();
        $question_3_T = Question::where('name', 'Question A/B-3|C-3 6CA EX')->first();
        $question_4_T = Question::where('name', 'Question A/B-4|C-4 9T EX')->first();

        $question_T_1 = Question::where('name', 'Question A/B-1 9T')->first();
        $question_T_2 = Question::where('name', 'Question A/B-2 7CA')->first();
        $question_T_3 = Question::where('name', 'Question A/B-3 9C')->first();
        $question_T_4 = Question::where('name', 'Question A/B-4 4P')->first();

        $question_CA_1 = Question::where('name', 'Question A/B-5 5CA')->first();
        $question_CA_2 = Question::where('name', 'Question A/B-6 7P')->first();
        $question_CA_3 = Question::where('name', 'Question A/B-7 7CA')->first();
        $question_CA_4 = Question::where('name', 'Question A/B-8 8T')->first();

        $questions = [
            $question_1_T,
            $question_2_T,
            $question_3_T,
            $question_4_T,
            $question_T_1,
            $question_T_2,
            $question_T_3,
            $question_T_4,
            $question_CA_1,
            $question_CA_2,
            $question_CA_3,
            $question_CA_4,
        ];

        foreach($questions as $question){
            $clue = new Clue();
            $clue->id = uniqid();
            $clue->text = "Indice 1";
            $clue->order = "1";
            $clue->question()->associate($question);
            $clue->save();

            $clue = new Clue();
            $clue->id = uniqid();
            $clue->text = "Indice 2";
            $clue->order = "2";
            $clue->question()->associate($question);
            $clue->save();

            $clue = new Clue();
            $clue->id = uniqid();
            $clue->text = "Indice 3";
            $clue->order = "3";
            $clue->question()->associate($question);
            $clue->save();
        }
    }
}
