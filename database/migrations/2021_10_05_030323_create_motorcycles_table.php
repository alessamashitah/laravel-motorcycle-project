<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorcyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('motor_type_id')->nullable;
            $table->unsignedInteger('motor_colour_id')->nullable;
            $table->timestamps();

            $table->foreign('motor_type_id')->references('id')->on('motor_types')->onDelete('cascade');
            $table->foreign('motor_colour_id')->references('id')->on('motor_colours')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motorcycles');
    }
}
