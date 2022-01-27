<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DomaineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
// 'libelle_domaine'=>$this->faker->text($maxNbChars = 8),
// "id_partie"=>$this->faker->numberBetween($min = 1, $max = 20)
// 'libelle_domaine'=>$this->faker->text($maxNbChars = 8),
'libelle_domaine'=>$this->faker->randomElement($array = array ('activite','quantite','profession')),
"id_partie"=>$this->faker->numberBetween($min = 1, $max = 20)
        ];

    }
}