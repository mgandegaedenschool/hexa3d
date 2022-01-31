<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionHisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_his', function (Blueprint $table) {
            $table->bigIncrements('id_question');
            $table->unsignedBigInteger('id_item_hexa3d');
            $table->foreign('id_item_hexa3d')
                ->references('id_item_hexa3d_irmr')->on('item_serie_hexa3d_irmrs')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_test');
            $table->foreign('id_test')
                ->references('id_test')->on('test_his')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_partie');
            $table->foreign('id_partie')
                ->references('id_partie')->on('parties')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_domaine');
            $table->foreign('id_domaine')
                ->references('id_domaine')->on('domaines')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ordre');
            $table->string('type_riarsec');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_his');
    }
}
