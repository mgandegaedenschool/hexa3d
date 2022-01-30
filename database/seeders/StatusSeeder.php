<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->id = uniqid();
        $status->name = "new";
        $status->save();


        $status = new Status();
        $status->id = uniqid();
        $status->name = "course";
        $status->save();


        $status = new Status();
        $status->id = uniqid();
        $status->name = "instruction";
        $status->save();


        $status = new Status();
        $status->id = uniqid();
        $status->name = "accept";
        $status->save();
        

        $status = new Status();
        $status->id = uniqid();
        $status->name = "example_start";
        $status->save();


        $status = new Status();
        $status->id = uniqid();
        $status->name = "example_active";
        $status->save();


        $status = new Status();
        $status->id = uniqid();
        $status->name = "example_result";
        $status->save();


        $status = new Status();
        $status->id = uniqid();
        $status->name = "setting";
        $status->save();


        $status = new Status();
        $status->id = uniqid();
        $status->name = "test_active";
        $status->save();


        $status = new Status();
        $status->id = uniqid();
        $status->name = "test_end";
        $status->save();


        $status = new Status();
        $status->id = uniqid();
        $status->name = "end";
        $status->save();
    }
}
