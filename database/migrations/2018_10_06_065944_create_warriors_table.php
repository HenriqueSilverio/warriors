<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarriorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warriors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('type_id');
            $table->string('name', 45)->unique();
            $table->unsignedMediumInteger('health');
            $table->unsignedMediumInteger('defense');
            $table->unsignedMediumInteger('damage');
            $table->decimal('attack_speed', 2, 1);
            $table->unsignedMediumInteger('move_speed');
            $table->string('thumbnail', 255)->nullable();
            $table->timestamps();

            $table->foreign('type_id')
                ->references('id')->on('types')
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
        Schema::dropIfExists('warriors');
    }
}
