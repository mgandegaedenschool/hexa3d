<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeResultatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libelle_partie' => $this->faker->name('indéfini'),
            'libelle_partie' => $this->faker->name('bénéficiaire'),
            'libelle_partie' => $this->faker->name('professionnel')
        ];
    }
}
