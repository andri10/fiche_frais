<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission_note', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('mission_id');
            $table->foreign('mission_id')
                ->references('id')
                ->on('missions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('notes_id');
            $table->foreign('notes_id')
                ->references('id')
                ->on('notes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mission_note');
    }
}
