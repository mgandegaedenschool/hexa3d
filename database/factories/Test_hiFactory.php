<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Type;

class Test_hiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = Type::all();
        return [
            "libelle_test" => $this->faker->randomElement($array = array('Test 1: Hexa3D', 'Test 1: RMR3', 'Test 2: Hexa3D', 'Test 2: RMR3', 'Test 3: Hexa3D', 'Test 3: RMR3')),
            "id_type" => $type[$this->faker->numberBetween($min = 0, $max = 0)]->id_type,

        ];
    }
}
