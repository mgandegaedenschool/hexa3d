<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponse', function (Blueprint $table) {
            $table->bigIncrements('id_reponse');

            $table->unsignedBigInteger('id_question');
            $table->foreign('id_question')
                ->references('id_question')->on('question')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_participation');
            $table->foreign('id_participation')
                ->references('id_participation')->on('participation')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->string('libelle');
            $table->integer('score');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reponses');
    }
}
