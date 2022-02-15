<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Partie;
use App\Models\Score_riarsec;
use App\Models\Participation_hi;
class Tableau_scoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
 
$participation = Participation_hi::all();
        return [
            "libelle_tableau_score"=>$this->faker->randomElement($array = array ('Notes brutes trois domaines','Notes étalonnées trois domaines','Profils de vos intérêts')),
           "id_participation"=>$participation[$this->faker->NumberBetween($min = 0, $max = 9)]->id_participation
        ];
    }
}
