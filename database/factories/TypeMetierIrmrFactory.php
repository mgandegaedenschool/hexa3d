<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeMetierIrmrFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "libelle_type_metier_irmr" => $this->faker->randomElement($array = array('Plein air', 'Techniques', "Calcul", "Scientifiques"))
        ];
    }
}
