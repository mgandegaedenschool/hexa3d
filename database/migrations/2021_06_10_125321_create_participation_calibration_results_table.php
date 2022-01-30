<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationCalibrationResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participation_calibration_results', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('note_rcc');
            $table->integer('note_rcc_potential');
            $table->integer('note_rcc_precision');
            $table->integer('note_rcc_speed');
            $table->boolean('retry')->default(0);

            $table->foreignUuid('participation_id');
            $table->foreignUuid('calibration_group_id');
            $table->foreignUuid('level_id');

            $table->foreign('participation_id')
                ->references('id')->on('participations')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('calibration_group_id')
                ->references('id')->on('calibration_groups')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('level_id')
                ->references('id')->on('levels')
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
        Schema::dropIfExists('participation_calibration_results');
    }
}
