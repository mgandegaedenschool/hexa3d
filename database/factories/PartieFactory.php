<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
'num_partie' => $this->faker->numberBetween($min = 1, $max = 1),
'libelle_partie' => $this->faker->name('1ème partie'),

'num_partie' => $this->faker->numberBetween($min = 2, $max = 2),
'num_partie' => $this->faker->numberBetween($min = 2, $max = 2),
'libelle_partie' => $this->faker->name('2ème partie'),

'num_partie' => $this->faker->numberBetween($min = 3, $max = 3),
'libelle_partie' => $this->faker->name('3ème partie'),

'num_partie' => $this->faker->numberBetween($min = 4, $max = 4),
'libelle_partie' => $this->faker->name('bonus')
        ];
    }
}
