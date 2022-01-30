<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('nb_clue')->default(0);
            $table->integer('retry_times')->default(0);
            $table->datetime('time_start_at')->nullable();
            $table->time('time', $precision = 0)->nullable();
            $table->time('retry_time', $precision = 0)->nullable();
            $table->integer('rcc')->nullable();
            $table->decimal('rcp', $precision = 1, $scale = 1)->nullable();

            // $table->integer('order');
            // $table->boolean('retry')->default(0);

            $table->foreignUuid('question_id');
            $table->foreignUuid('participation_id');

            $table->foreign('question_id')
                ->references('id')->on('questions')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('participation_id')
                ->references('id')->on('participations')
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
        Schema::dropIfExists('responses');
    }
}
