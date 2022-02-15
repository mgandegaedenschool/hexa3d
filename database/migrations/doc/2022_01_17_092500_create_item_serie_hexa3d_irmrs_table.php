<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSerieHexa3dIrmrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_serie_hexa3d_irmrs', function (Blueprint $table) {
            $table->bigIncrements('id_item_hexa3d_irmr');
            $table->unsignedBigInteger('id_partie');
            $table->foreign('id_partie')
                ->references('id_partie')->on('parties')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('lettre/liste');
            $table->string('libelle_item_hexa3d_irmr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_serie_hexa3d_irmrs');
    }
}
