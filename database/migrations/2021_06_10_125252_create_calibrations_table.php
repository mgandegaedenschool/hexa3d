<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalibrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calibrations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->decimal('value', $precision = 3, $scale = 1);
            $table->integer('point');

            $table->foreignUuid('calibration_group_id');
            $table->foreignUuid('calibration_type_id');
            $table->foreignUuid('level_id');

            $table->foreign('calibration_group_id')
                ->references('id')->on('calibration_groups')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('calibration_type_id')
                ->references('id')->on('calibration_types')
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
        Schema::dropIfExists('calibrations');
    }
}
