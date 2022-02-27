<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metiers', function (Blueprint $table) {
            $table->bigIncrements('id_metier');
            $table->string('libelle_metier');
            $table->unsignedBigInteger('id_type_metier_irmr');
            $table->foreign('id_type_metier_irmr')->references('id_type_metier_irmr')->on('type_metier_irmrs')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_type');
            $table->foreign('id_type')->references('id_type')->on('types')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metiers');
    }
}
