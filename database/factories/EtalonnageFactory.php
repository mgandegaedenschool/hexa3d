<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtalonnageFactory extends Factory
{
        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition()
        {
                return [
                        'libelle_etalonnage' => $this->faker->randomElement($array = array('Adultes h/f', 'Femmes', 'Hommes', 'Collégiens h/f', 'Collégiens', 'Collégiennes', 'Lycéens h/f', 'Lycéens', 'Lycéennes'))
                ];
        }
}
