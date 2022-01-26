<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->bigIncrements('id_participation');
            $table->dateTime('date');

            $table->unsignedBigInteger('id_test');
            $table->foreign('id_test')
                ->references('id_test')->on('tests')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_etalonnage_default');
            $table->foreign('id_etalonnage_default')
                ->references('id_etalonnage')->on('etalonnages')
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
        Schema::dropIfExists('participations');
    }
}
