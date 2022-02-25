<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoreRiarsecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score_riarsecs', function (Blueprint $table) {
            $table->bigIncrements('id_score');

            $table->unsignedBigInteger('id_tableau_score');
            $table->foreign('id_tableau_score')
                ->references('id_tableau_score')->on('tableau_scores')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_partie');
            $table->foreign('id_partie')
                ->references('id_partie')->on('parties')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->string('type_riarsec');
            $table->integer('sous_total/NE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score_riarsecs');
    }
}
