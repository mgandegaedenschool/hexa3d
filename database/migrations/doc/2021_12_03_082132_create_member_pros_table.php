<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_pros', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->uuid('id')->primary();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->string('nickname');
            $table->string('postalCode');
            $table->enum('genre', ['male', 'femele']);
            $table->string('certificate'); //, ['adeli', 'agrement', 'image']
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_pros');
    }
}
