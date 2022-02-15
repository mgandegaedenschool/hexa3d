<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Etat_testFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libelle_etat_test'=>$this->faker->randomElement($array = array ('Terminé','En cours','Nouveau'))
        ];
    }
}
