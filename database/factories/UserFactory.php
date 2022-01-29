<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'name' => $this->faker->name(),
        //     'email' => $this->faker->unique()->safeEmail(),
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ];
        return [
            // 'firstname' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),



            'firstname' => $this->faker->firstname(),
            'lastname' => $this->faker->lastname(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make(123456789),
            'username' => $this->faker->username(),
            'sexe' => $this->faker->randomElement($array = array ('masculin','feminin')),
            'age' => $this->faker->numberBetween($min = 15, $max = 60),
            'remember_token' => Str::random(10),


            'niv_etude' => $this->faker->text($maxNbChars = 8),
            'scolarise' => $this->faker->boolean(),
            'classe' => $this->faker->text($maxNbChars = 8),
            'section' =>$this->faker->text($maxNbChars = 8),
            'etablissement' => $this->faker->text($maxNbChars = 8),
            'salarie' => $this->faker->boolean(),


            'emploi_actuel' => $this->faker->jobTitle(), 
            'specialite' => $this->faker->name(),
            'etat' => $this->faker->text($maxNbChars = 8),
            'emploi_envisage' => $this->faker->text($maxNbChars = 8),
            'role' => $this->faker->randomElement($array = array ('membre','pro','admin'))
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
