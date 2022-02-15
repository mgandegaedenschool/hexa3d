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
            $table->uuid('id')->primary();

            $table->string('token');

            $table->string('theme')->default("light");

            $table->boolean('understand')->default(0);
            $table->boolean('voluntary')->default(0);

            $table->foreignUuid('test_id');
            $table->foreignUuid('patient_id');
            $table->foreignUuid('status_id');
            $table->foreignUuid('participation_test_type_id');

            $table->foreign('test_id')
                ->references('id')->on('tests')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('patient_id')
                ->references('id')->on('patients')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('status_id')
                ->references('id')->on('statutes')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('participation_test_type_id')
                ->references('id')->on('participation_test_types')
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
