<?php

namespace Database\Factories;

use App\Models\Metier;
use App\Models\Partie;
use App\Models\Domaine;
use App\Models\Test_hi;
use App\Models\Item_serie_hexa3d_irmr;
use Illuminate\Database\Eloquent\Factories\Factory;

class Question_hiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $test_hi = Test_hi::all();
        $hi = Item_serie_hexa3d_irmr::all();
        $partie1 = Partie::all();
        $domaine = Domaine::all();
        $metier = Metier::all();
        // echo "<pre>";
        // print_r($domaine[1]);
        // echo "</pre>";
        return [
            "id_item_hexa3d" => $hi[$this->faker->biasedNumberBetween($min = 0, $max = 9)]->id_item_hexa3d_irmr,
            "id_test" => $test_hi[$this->faker->biasedNumberBetween($min = 0, $max = 9)]->id_test,
            "id_domaine" => $domaine[$this->faker->biasedNumberBetween($min = 0, $max = 2)]->id_domaine,
            "id_partie" => $partie1[$this->faker->biasedNumberBetween($min = 0, $max = 2)]->id_partie,
            "id_metier" => $metier[$this->faker->biasedNumberBetween($min = 0, $max = 2)]->id_metier,
            'lettre/liste' => $this->faker->randomElement($array = array('A1', 'A2', 'B1', 'B2', '1', '2')),
            'ordre' => $this->faker->numberBetween(1, 5),
            'type_riarsec' => $this->faker->randomElement($array = array('R', 'I', 'A', 'S', 'E', 'C'))
        ];
    }
}
