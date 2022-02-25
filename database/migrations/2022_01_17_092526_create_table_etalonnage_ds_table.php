<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEtalonnageDsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_etalonnage_ds', function (Blueprint $table) {
            $table->bigIncrements('id_table_etalonnage');

            $table->string('libelle_table');

            $table->integer('N');

            $table->unsignedBigInteger('id_etalonnage');
            $table->foreign('id_etalonnage')
                ->references('id_etalonnage')->on('etalonnages')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_domaine');
            $table->foreign('id_domaine')
                ->references('id_domaine')->on('domaines')
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
        Schema::dropIfExists('table_etalonnage_ds');
    }
}
