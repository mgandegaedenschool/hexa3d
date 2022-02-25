<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Table_etalonnage_d;

class Table_etalonnage_d_riarsecFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $table_etalonnage_ds = Table_etalonnage_d::all();
        return [
            "id_table_etalonnage_d" => $table_etalonnage_ds[$this->faker->NumberBetween($min = 0, $max = 8)]->id_table_etalonnage,
            "RIARSEC" => $this->faker->randomElement($array = array('R', 'I', 'A', 'S', 'E', 'C')),
            "plage" => $this->faker->NumberBetween($min = 0, $max = 4) . '-' . $this->faker->NumberBetween($min = 5, $max = 9)
        ];
    }
}
