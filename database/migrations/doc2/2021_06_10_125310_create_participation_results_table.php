<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participation_results', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // $table->integer('count_question_type_s');
            // $table->integer('count_question_type_n');
            $table->integer('count_rcc');
            $table->integer('count_rcp');
            $table->integer('rp');
            $table->integer('count_question_filled');
            $table->integer('count_question_unfilled');
            $table->integer('potential');
            $table->float('precision', 20, 20);
            $table->float('speed', 20, 20);
            $table->boolean('retry')->default(0);

            $table->foreignUuid('participation_id');

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
        Schema::dropIfExists('participation_results');
    }
}
