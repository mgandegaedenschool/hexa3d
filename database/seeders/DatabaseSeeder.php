<?php
namespace Database\Seeders;

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
        \App\Models\Partie::Factory(10)->create();
        \App\Models\Domaine::Factory(10)->create();
        \App\Models\Etat_test::Factory(10)->create();
        \App\Models\Etalonnage::Factory(10)->create();
        \App\Models\Item_serie_hexa3d_irmr::Factory(10)->create();
        \App\Models\Type::Factory(10)->create();
        \App\Models\Test_hi::Factory(10)->create();
        \App\Models\Participation_hi::Factory(10)->create();
        \App\Models\Question_hi::Factory(10)->create();
        \App\Models\Reponse_hi::Factory(10)->create();
        \App\Models\Tableau_score::Factory(10)->create();
        \App\Models\Score_riarsec::Factory(10)->create();
        
        $this->call(ColorSeeder::class);
        $this->call(NumberSeeder::class);

        $this->call(TestSeeder::class);

        $this->call(CalibrationTypeSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(CalibrationGroupSeeder::class);
        $this->call(CalibrationSeeder::class);

        $this->call(QuestionTypeSeeder::class);
        $this->call(QuestionSeeder::class);

        $this->call(ClueSeeder::class);

        $this->call(StatusSeeder::class);

        $this->call(ParticipationTestTypeSeeder::class);

        $this->call(PatientSeeder::class);
    }
}
