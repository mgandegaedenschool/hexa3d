<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color = new Color();
        $color->id = uniqid();
        $color->value = 'heart';
        $color->icon = '♥︁';
        $color->save();
        
        $color = new Color();
        $color->id = uniqid();
        $color->value = 'spade';
        $color->icon = '♠︁';
        $color->save();

        $color = new Color();
        $color->id = uniqid();
        $color->value = 'diamond';
        $color->icon = '♦︁';
        $color->save();

        $color = new Color();
        $color->id = uniqid();
        $color->value = 'club';
        $color->icon = '♣︁';
        $color->save();
    }
}
