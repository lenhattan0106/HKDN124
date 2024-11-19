<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roomparticipants', function (Blueprint $table) {
            $table->foreign(['user_id'], 'roomparticipants_ibfk_2')->references(['user_id'])->on('users')->onDelete('CASCADE');
            $table->foreign(['room_id'], 'roomparticipants_ibfk_1')->references(['room_id'])->on('chatroom')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roomparticipants', function (Blueprint $table) {
            $table->dropForeign('roomparticipants_ibfk_2');
            $table->dropForeign('roomparticipants_ibfk_1');
        });
    }
};
