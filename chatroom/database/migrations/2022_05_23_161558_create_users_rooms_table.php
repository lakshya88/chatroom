<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('room_id');
	    $table->integer('user_id');
            $table->foreign('room_id')
                ->references('id')
                ->on('rooms');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->unique(['room_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_rooms');
    }
}
