<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Partie;
use App\Models\Tableau_score;
use App\Models\Participation_hi;
class Score_riarsecFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $partie1 = Partie::all();
        $tableau_score = Tableau_score::all();
        $participation = Participation_hi::all();
        return [
            "id_participation"=>$participation[$this->faker->NumberBetween($min = 0, $max = 9)]->id_participation,
            "id_partie"=>$partie1[$this->faker->NumberBetween($min = 0, $max = 9)]->id_partie,
            'type_riarsec'=>$this->faker->randomElement($array = array ('R','I','A','S','E','C')),
            "sous_total"=>$this->faker->NumberBetween($min = 5, $max = 9)
        ];
    }
}
