<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Etalonnage;
use App\Models\Domaine;
class Table_etalonnage_dFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $etalonnage =  Etalonnage::all();
        $domaine=  Domaine::all();
        return [
            "libelle_table" => $this->faker->randomElement($array = array ('Ensemble des collégiens filles et garçon (N=353)','Ensemble des collégiens')),
            'type_riarsec'=>$this->faker->randomElement($array = array ('R','I','A','S','E','C')),
            "id_etalonnage"=>$etalonnage[$this->faker->NumberBetween($min = 0, $max = 9)]->id_etalonnage,
            "id_domaine"=>$domaine[$this->faker->NumberBetween($min = 0, $max = 9)]->id_domaine,
        ];
    }
}
