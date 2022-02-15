<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Number;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        foreach($numbers as $number){
            $setNewNumber = new Number();
            $setNewNumber->id = uniqid();
            $setNewNumber->value = $number;
            $setNewNumber->save();
        }
    }
}
