<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionNumbersColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_numbers_colors', function (Blueprint $table) {
            $table->foreignUuid('question_id');
            $table->foreignUuid('number_id');
            $table->foreignUuid('color_id');

            $table->primary(['question_id', 'number_id', 'color_id']);

            $table->foreign('question_id')
                ->references('id')->on('questions')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('number_id')
                ->references('id')->on('numbers')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('color_id')
                ->references('id')->on('colors')
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
        Schema::dropIfExists('question_numbers_colors');
    }
}
