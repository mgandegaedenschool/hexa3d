<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id_test');

            $table->unsignedBigInteger('id_type');
            $table->foreign('id_type')->references('id_type')->on('types')
                ->onDelete('cascade')->onUpdate('cascade');

            // $table->foreign('id_type')
            //     ->references('id_type')->on('types')
            //     ->onDelete('cascade')->onUpdate('cascade');

            $table->string('libelle_test');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
