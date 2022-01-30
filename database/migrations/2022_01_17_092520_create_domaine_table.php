<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomaineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domaine', function (Blueprint $table) {
            $table->bigIncrements('id_domaine');
            $table->unsignedBigInteger('id_partie');
            $table->foreign('id_partie')->references('id_partie')->on('parties')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('libelle_domaine');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domaines');
    }
}
