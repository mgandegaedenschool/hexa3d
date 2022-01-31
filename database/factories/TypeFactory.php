<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "libelle_type"=>$this->faker->randomElement($array = array ('Hexa3d','IRMR3'))
        ];
    }
}