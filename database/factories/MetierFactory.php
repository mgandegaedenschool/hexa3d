<?php

namespace Database\Factories;

use App\Models\Type;
use App\Models\TypeMetierIrmr;
use App\Models\Participation_hi;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $typeMetierIrmr = TypeMetierIrmr::all();
        $type = Type::all();
        return [
            "libelle_metier" => $this->faker->randomElement($array = array('Exploitant agricole', 'Pépiniériste', "Sculpter", "Concevoir")),
            "id_type_metier_irmr" => $typeMetierIrmr[$this->faker->NumberBetween($min = 0, $max = 3)]->id_type_metier_irmr,
            "id_type" => $type[$this->faker->NumberBetween($min = 0, $max = 2)]->id_type,
        ];
    }
}
