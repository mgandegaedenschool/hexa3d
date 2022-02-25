<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableauScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tableau_scores', function (Blueprint $table) {
            $table->bigIncrements('id_tableau_score');
            $table->string('libelle_tableau_score');
            $table->unsignedBigInteger('id_participation');
            $table->foreign('id_participation')
                ->references('id_participation')->on('participation_his')
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
        Schema::dropIfExists('tableau_scores');
    }
}
