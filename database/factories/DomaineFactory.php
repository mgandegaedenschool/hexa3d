<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Partie;
use App\Models\Domaine;

class DomaineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $partie1 = Partie::all();
        $domaine = new Domaine;
        return [
            "libelle_domaine" => $this->faker->randomElement($array = array('activite', 'qualite', 'profession')),
            "id_partie" => $partie1[$this->faker->biasedNumberBetween($min = 0, $max = 2)]->id_partie
        ];
    }
}