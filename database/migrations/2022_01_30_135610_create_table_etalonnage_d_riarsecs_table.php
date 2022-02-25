<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEtalonnageDRiarsecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_etalonnage_d_riarsecs', function (Blueprint $table) {
            $table->bigIncrements('id_table_etalonnage_d_riarsec');

            $table->unsignedBigInteger('id_table_etalonnage_d');
            $table->foreign('id_table_etalonnage_d')
                ->references('id_table_etalonnage')->on('table_etalonnage_ds')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->string('RIARSEC');
            $table->string('plage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_etalonnage_d_riarsecs');
    }
}
