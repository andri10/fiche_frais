<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFraisKmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frais_kms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('depart');
            $table->string('arrivee');
            $table->float('trajets');
            $table->string('title');
            $table->longText('description');
            $table->date('start_at');
            $table->date('arrival_at');
            $table->text('image');
            $table->unsignedBigInteger('mission_id');
            $table->foreign('mission_id')
                ->references('id')
                ->on('missions')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frais_kms');
    }
}
