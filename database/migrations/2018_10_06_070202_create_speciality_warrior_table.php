<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialityWarriorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speciality_warrior', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('speciality_id');
            $table->unsignedInteger('warrior_id');
            $table->timestamps();

            $table->unique(['speciality_id', 'warrior_id']);

            $table->foreign('speciality_id')
                ->references('id')->on('specialities')
                ->onDelete('cascade');

            $table->foreign('warrior_id')
                ->references('id')->on('warriors')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speciality_warrior');
    }
}
