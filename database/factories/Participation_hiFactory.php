<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Test_hi;
use App\Models\Etat_test;
use App\Models\Etalonnage;
use App\Models\TypeResultat;
use App\Models\Participation_hi;
use Illuminate\Database\Eloquent\Factories\Factory;

class Participation_hiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $test_hi = Test_hi::all();
        $user = User::all();
        $participation = Participation_hi::all();
        $etat_test = Etat_test::all();
        $etalonnage = Etalonnage::all();
        $typeResultat = TypeResultat::all();

        return [
            "date_passage" => $this->faker->dateTime(),
            "id_test" => $test_hi[$this->faker->biasedNumberBetween($min = 0, $max = 9)]->id_test,
            "id_user" => $user[$this->faker->biasedNumberBetween($min = 0, $max = 9)]->id,
            "id_etalonnage_default" => $etalonnage[$this->faker->NumberBetween($min = 0, $max = 8)]->id_etalonnage,
            "id_etat_test" => $etat_test[$this->faker->NumberBetween($min = 0, $max = 2)]->id_etat_test,
            "id_type_resultat" => $typeResultat[$this->faker->NumberBetween($min = 0, $max = 2)]->id_type_resultat,
            "lien_test" => $this->faker->url,
            "nombre_interruption" => $this->faker->numberBetween(1, 5),
            "temps_passage" => $this->faker->time($format = 'i:s', $max = 'now')
        ];
    }
}
