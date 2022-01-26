<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions_tests', function (Blueprint $table) {
            $table->foreignUuid('question_id');
            $table->foreignUuid('test_id');
            $table->integer('order');

            $table->primary(['question_id', 'test_id']);

            $table->foreign('question_id')
                ->references('id')->on('questions')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('test_id')
                ->references('id')->on('tests')
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
        Schema::dropIfExists('questions_tests');
    }
}
