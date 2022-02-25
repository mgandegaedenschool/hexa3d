<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationHisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participation_his', function (Blueprint $table) {
            $table->bigIncrements('id_participation');
            $table->dateTime('date_passage');

            $table->unsignedBigInteger('id_test');
            $table->foreign('id_test')
                ->references('id_test')->on('test_his')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_etalonnage_default');
            $table->foreign('id_etalonnage_default')
                ->references('id_etalonnage')->on('etalonnages')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_etat_test');
            $table->foreign('id_etat_test')
                ->references('id_etat_test')->on('etat_tests')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->string('lien_test');
            $table->integer('nombre_interruption');

            $table->time('temps_passage');

            $table->unsignedBigInteger('id_type_resultat');
            $table->foreign('id_type_resultat')
                ->references('id_type_resultat')->on('type_resultats')
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
        Schema::dropIfExists('participation_his');
    }
}
