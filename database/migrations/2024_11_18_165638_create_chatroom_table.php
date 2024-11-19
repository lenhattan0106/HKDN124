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
        Schema::create('chatroom', function (Blueprint $table) {
            $table->integer('room_id', true);
            $table->string('room_name', 100)->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->enum('room_type', ['public', 'private'])->nullable();
            $table->integer('participant_count')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chatroom');
    }
};
