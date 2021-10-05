<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotocycleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motocycle_users', function (Blueprint $table) {
            $table->increment(id);
            $table->unsignedIntegereinteger(user_id)->nullable;
            $table->unsignedInteger(motocycle_id)->nullable;
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('motocycle_id')->references('id')->on('motocycles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motocycle_users');
    }
}
