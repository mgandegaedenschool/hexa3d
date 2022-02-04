<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIrmr3FormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irmr3_forms', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->json('value');
            $table->string('metier');
            $table->string('definition');
            $table->string('domaine');
            $table->integer('partie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('irmr3_forms');
    }
}
