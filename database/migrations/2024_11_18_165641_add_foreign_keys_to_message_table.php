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
        Schema::table('message', function (Blueprint $table) {
            $table->foreign(['room_id'], 'message_ibfk_2')->references(['room_id'])->on('chatroom')->onDelete('CASCADE');
            $table->foreign(['user_id'], 'message_ibfk_1')->references(['user_id'])->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('message', function (Blueprint $table) {
            $table->dropForeign('message_ibfk_2');
            $table->dropForeign('message_ibfk_1');
        });
    }
};
