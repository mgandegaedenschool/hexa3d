<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Partie;

class Item_serie_hexa3d_irmrFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $partie1 = Partie::all();

        return [
            "id_partie" => $partie1[$this->faker->biasedNumberBetween($min = 0, $max = 2)]->id_partie,
            'lettre/liste' => $this->faker->randomElement($array = array('A1', 'A2', 'B1', 'B2', '1', '2')),
            'libelle_item_hexa3d_irmr' => $this->faker->randomElement($array = array('Photographier', 'Trouver', 'Illustrer', 'Chercher', 'Métier 1', 'Métier 2')),
        ];
    }
}
