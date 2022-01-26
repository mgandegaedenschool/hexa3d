<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseNumbersColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_numbers_colors', function (Blueprint $table) {
            $table->foreignUuid('response_id');
            $table->foreignUuid('number_id');
            $table->foreignUuid('color_id');

            $table->primary(['response_id', 'number_id', 'color_id']);

            $table->foreign('response_id')
                ->references('id')->on('responses')
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
        Schema::dropIfExists('response_numbers_colors');
    }
}
