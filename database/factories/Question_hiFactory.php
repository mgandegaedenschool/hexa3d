<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Test_hi;
use App\Models\Item_serie_hexa3d_irmr;
use App\Models\Partie;
use App\Models\Domaine;

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

        return [
            "id_item_hexa3d"=>$hi[$this->faker->biasedNumberBetween($min = 0, $max = 9)]->id_item_hexa3d_irmr,
            "id_test"=>$test_hi[$this->faker->biasedNumberBetween($min = 0, $max = 9)]->id_test,
            "id_domaine"=>$domaine[$this->faker->biasedNumberBetween($min = 1, $max = 4)]->id_domaine,
            "id_partie"=>$partie1[$this->faker->biasedNumberBetween($min = 1, $max = 9)]->id_partie,
            'ordre'=>$this->faker->numberBetween(1,5),
            'type_riarsec'=>$this->faker->randomElement($array = array ('R','I','A','S','E','C'))
        ];
    }
}
