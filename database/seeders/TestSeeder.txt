<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test = new Test();
        $test->id = uniqid();
        $test->name = 'A/B';
        $test->save();

        $test = new Test();
        $test->id = uniqid();
        $test->name = 'C';
        $test->save();
    }
}
