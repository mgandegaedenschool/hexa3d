<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestHisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_his', function (Blueprint $table) {
            $table->bigIncrements('id_test');
            $table->unsignedBigInteger('id_type');
            $table->foreign('id_type')->references('id_type')->on('type')
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
        Schema::dropIfExists('test_his');
    }
}

