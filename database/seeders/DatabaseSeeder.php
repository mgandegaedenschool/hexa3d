<?php

namespace Database\Seeders;

use App\Models\TypeResultat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::Factory(30)->create();
        \App\Models\Partie::Factory(4)->create();
        \App\Models\Domaine::Factory(10)->create();
        \App\Models\Etat_test::Factory(3)->create();
        \App\Models\Etalonnage::Factory(10)->create();
        \App\Models\Item_serie_hexa3d_irmr::Factory(10)->create();
        \App\Models\Type::Factory(10)->create();
        \App\Models\Test_hi::Factory(10)->create();
        \App\Models\TypeResultat::Factory(3)->create();
        \App\Models\Participation_hi::Factory(10)->create();
        \App\Models\TypeMetierIrmr::Factory(4)->create();
        \App\Models\Metier::Factory(4)->create();
        \App\Models\Question_hi::Factory(10)->create();
        \App\Models\Reponse_hi::Factory(10)->create();
        \App\Models\Tableau_score::Factory(10)->create();
        \App\Models\Score_riarsec::Factory(10)->create();
        \App\Models\Table_etalonnage_d::Factory(10)->create();
        \App\Models\Table_etalonnage_d_riarsec::Factory(10)->create();
    }
}
