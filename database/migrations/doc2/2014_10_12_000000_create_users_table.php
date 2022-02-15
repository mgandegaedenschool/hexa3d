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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('username')->unique();
            $table->string('niv_etude');
            $table->string('classe');
            $table->string('section');
            $table->string('sexe');
            $table->integer('age');
            $table->tinyInteger('scolarise');
            $table->string('etablissement');
            $table->tinyInteger('salarie');
            $table->string('emploi_actuel');
            $table->string('specialite');
            $table->string('etat');
            $table->string('emploi_envisage');
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