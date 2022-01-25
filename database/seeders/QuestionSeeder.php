<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\QuestionType;
use App\Models\Test;
use App\Models\Color;
use App\Models\Number;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionType_S = QuestionType::where('name', 'S')->first();
        $questionType_N = QuestionType::where('name', 'N')->first();
        $questionType_Co = QuestionType::where('name', 'Co')->first();

        $test_AB = Test::where('name', 'A/B')->first();
        $test_C = Test::where('name', 'C')->first();

        $color_P = Color::where('value', 'spade')->first();
        $color_C = Color::where('value', 'heart')->first();
        $color_CA = Color::where('value', 'diamond')->first();
        $color_T = Color::where('value', 'club')->first();

        $number_1 = Number::where('value', '1')->first();
        $number_2 = Number::where('value', '2')->first();
        $number_3 = Number::where('value', '3')->first();
        $number_4 = Number::where('value', '4')->first();
        $number_5 = Number::where('value', '5')->first();
        $number_6 = Number::where('value', '6')->first();
        $number_7 = Number::where('value', '7')->first();
        $number_8 = Number::where('value', '8')->first();
        $number_9 = Number::where('value', '9')->first();
        //$number_10 = Number::where('value', '10')->first();

        $order = 1;

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-1|C-1 3P EX";
        $question->example = 1;
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_3, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => $order]);
        $question->tests()->attach($test_C, ['order' => $order]);

        $order++;

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-2|C-2 8C EX";
        $question->example = 1;
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_8, ['color_id' => $color_C->id]);
        $question->tests()->attach($test_AB, ['order' => $order]);
        $question->tests()->attach($test_C, ['order' => $order]);

        $order++;

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-3|C-3 6CA EX";
        $question->example = 1;
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_6, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => $order]);
        $question->tests()->attach($test_C, ['order' => $order]);

        $order++;

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-4|C-4 9T EX";
        $question->example = 1;
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_9, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => $order]);
        $question->tests()->attach($test_C, ['order' => $order]);



        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-1 9T";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_9, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 1]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-2 7CA";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_7, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => 2]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-3 9C";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_9, ['color_id' => $color_C->id]);
        $question->tests()->attach($test_AB, ['order' => 3]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-4 4P";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_4, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => 4]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-5 5CA";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => 5]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-6 7P";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_7, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => 6]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-7 7CA";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_7, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => 7]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-8 8T";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_8, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 8]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-9 6P";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_6, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => 9]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-10 4C";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_4, ['color_id' => $color_C->id]);
        $question->tests()->attach($test_AB, ['order' => 10]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-11 4CA";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_4, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => 11]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-12 5T";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 12]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-13 9C";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_9, ['color_id' => $color_C->id]);
        $question->tests()->attach($test_AB, ['order' => 13]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-14 7T";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_7, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 14]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-15 1T";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_1, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 15]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-16 8P";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_8, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => 16]);


        //Question test A/B-C


        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-17|C-1 9P";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_9, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => 17]);
        $question->tests()->attach($test_C, ['order' => 1]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-18|C-2 1T";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_1, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 18]);
        $question->tests()->attach($test_C, ['order' => 2]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-19|C-3 4CA";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_4, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => 19]);
        $question->tests()->attach($test_C, ['order' => 3]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-20|C-4 5T";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 20]);
        $question->tests()->attach($test_C, ['order' => 4]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-21|C-5 8T";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_8, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 21]);
        $question->tests()->attach($test_C, ['order' => 5]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-22|C-6 5P";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => 22]);
        $question->tests()->attach($test_C, ['order' => 6]);


        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-23|C-7 9P";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_9, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => 23]);
        $question->tests()->attach($test_C, ['order' => 7]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-24|C-8 1C";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_1, ['color_id' => $color_C->id]);
        $question->tests()->attach($test_AB, ['order' => 24]);
        $question->tests()->attach($test_C, ['order' => 8]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-25|C-9 3T";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_3, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 25]);
        $question->tests()->attach($test_C, ['order' => 9]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-26|C-10 5T";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 26]);
        $question->tests()->attach($test_C, ['order' => 10]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-27|C-11 8C";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_8, ['color_id' => $color_C->id]);
        $question->tests()->attach($test_AB, ['order' => 27]);
        $question->tests()->attach($test_C, ['order' => 11]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-28|C-12 7T";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_7, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 28]);
        $question->tests()->attach($test_C, ['order' => 12]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-29|C-13 7CA";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_7, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => 29]);
        $question->tests()->attach($test_C, ['order' => 13]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-30|C-14 6CA";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_6, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => 30]);
        $question->tests()->attach($test_C, ['order' => 14]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-31|C-15 7P";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_7, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => 31]);
        $question->tests()->attach($test_C, ['order' => 15]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-32|C-16 4T";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_4, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_AB, ['order' => 32]);
        $question->tests()->attach($test_C, ['order' => 16]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-33|C-17 2P";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_2, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => 33]);
        $question->tests()->attach($test_C, ['order' => 17]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-34|C-18 5CA";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => 34]);
        $question->tests()->attach($test_C, ['order' => 18]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-35|C-19 6CA";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_6, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => 35]);
        $question->tests()->attach($test_C, ['order' => 19]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-36|C-20 1P";
        $question->questionType()->associate($questionType_S);
        $question->save();
        $question->numberColors()->attach($number_1, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => 36]);
        $question->tests()->attach($test_C, ['order' => 20]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-37|C-21 5C";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_C->id]);
        $question->tests()->attach($test_AB, ['order' => 37]);
        $question->tests()->attach($test_C, ['order' => 21]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-38|C-22 5CA";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => 38]);
        $question->tests()->attach($test_C, ['order' => 22]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-39|C-23 3P";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_3, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_AB, ['order' => 39]);
        $question->tests()->attach($test_C, ['order' => 23]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question A/B-40|C-24 9CA";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_9, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_AB, ['order' => 40]);
        $question->tests()->attach($test_C, ['order' => 24]);


        //Question test C


        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-25 8T";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_8, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_C, ['order' => 25]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-26 4P";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_4, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_C, ['order' => 26]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-27 8T";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_8, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_C, ['order' => 27]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-28 2P";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_2, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_C, ['order' => 28]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-29 5T";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_C, ['order' => 29]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-30 3P";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_3, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_C, ['order' => 30]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-31 1P";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_1, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_C, ['order' => 31]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-32 2P";
        $question->questionType()->associate($questionType_N);
        $question->save();
        $question->numberColors()->attach($number_2, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_C, ['order' => 32]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-33 2C";
        $question->questionType()->associate($questionType_Co);
        $question->save();
        $question->numberColors()->attach($number_2, ['color_id' => $color_C->id]);
        $question->tests()->attach($test_C, ['order' => 33]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-34 2T";
        $question->questionType()->associate($questionType_Co);
        $question->save();
        $question->numberColors()->attach($number_2, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_C, ['order' => 34]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-35 5T";
        $question->questionType()->associate($questionType_Co);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_C, ['order' => 35]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-36 5T";
        $question->questionType()->associate($questionType_Co);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_T->id]);
        $question->tests()->attach($test_C, ['order' => 36]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-37 2C";
        $question->questionType()->associate($questionType_Co);
        $question->save();
        $question->numberColors()->attach($number_2, ['color_id' => $color_C->id]);
        $question->tests()->attach($test_C, ['order' => 37]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-38 5P";
        $question->questionType()->associate($questionType_Co);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_C, ['order' => 38]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-39 8CA";
        $question->questionType()->associate($questionType_Co);
        $question->save();
        $question->numberColors()->attach($number_8, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_C, ['order' => 39]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-40 6CA";
        $question->questionType()->associate($questionType_Co);
        $question->save();
        $question->numberColors()->attach($number_6, ['color_id' => $color_CA->id]);
        $question->tests()->attach($test_C, ['order' => 40]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-41 4C";
        $question->questionType()->associate($questionType_Co);
        $question->save();
        $question->numberColors()->attach($number_4, ['color_id' => $color_C->id]);
        $question->tests()->attach($test_C, ['order' => 41]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-42 7P-8P";
        $question->questionType()->associate($questionType_Co);
        $question->save();
        $question->numberColors()->attach($number_7, ['color_id' => $color_P->id]);
        $question->numberColors()->attach($number_8, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_C, ['order' => 42]);

        $question = new Question();
        $question->id = uniqid();
        $question->name = "Question C-43 5P-8P";
        $question->questionType()->associate($questionType_Co);
        $question->save();
        $question->numberColors()->attach($number_5, ['color_id' => $color_P->id]);
        $question->numberColors()->attach($number_8, ['color_id' => $color_P->id]);
        $question->tests()->attach($test_C, ['order' => 43]);

    }
}
