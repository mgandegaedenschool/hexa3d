<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Question_hi;
use App\Models\Participation_hi;
class Reponse_hiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $question = Question_hi::all();
        $participation = Participation_hi::all();
        return [
            "id_question"=>$question[$this->faker->NumberBetween($min = 0, $max = 9)]->id_question,
            "id_participation"=>$participation[$this->faker->NumberBetween($min = 0, $max = 9)]->id_participation,
            "score" =>$this->faker->NumberBetween($min = 0, $max = 2),       
            "libelle_bonus"=>$this->faker->randomElement($array = array ('developpeur','intégrateur','web'))
        ];
    }
}
