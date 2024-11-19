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
        Schema::create('message', function (Blueprint $table) {
            $table->integer('message_id', true);
            $table->integer('room_id')->index('room_id');
            $table->integer('user_id')->index('user_id');
            $table->text('content')->nullable();
            $table->enum('message_type', ['text', 'image', 'video', 'file'])->nullable()->default('text');
            $table->dateTime('timestamp')->nullable()->useCurrent();
            $table->boolean('is_pinned')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
};
