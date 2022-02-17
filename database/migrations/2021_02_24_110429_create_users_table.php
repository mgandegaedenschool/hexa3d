<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->string('username')->unique()->nullable();
            $table->string('niv_etude')->nullable();
            $table->string('classe')->nullable();
            $table->string('section')->nullable();
            $table->string('sexe')->nullable();
            $table->integer('age')->nullable();
            $table->tinyInteger('scolarise')->nullable();
            // $table->string('etalonnage')->nullable();
            $table->string('etablissement')->nullable();
            $table->tinyInteger('salarie')->nullable();
            $table->string('emploi_actuel')->nullable();
            $table->string('specialite')->nullable();
            $table->string('test')->nullable();
            $table->string('etat')->nullable();
            $table->string('emploi_envisage')->nullable();
            $table->timestamp('date');
            $table->string('role')->default('membre')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
