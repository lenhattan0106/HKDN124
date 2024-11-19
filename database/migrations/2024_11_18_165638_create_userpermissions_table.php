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
        Schema::create('userpermissions', function (Blueprint $table) {
            $table->integer('permission_id', true);
            $table->integer('user_id')->index('user_id');
            $table->boolean('can_chat')->nullable()->default(false);
            $table->boolean('can_delete_message')->nullable()->default(false);
            $table->boolean('can_create_room')->nullable()->default(false);
            $table->boolean('can_add_user_to_room')->nullable()->default(false);
            $table->boolean('can_delete_user_to_room')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userpermissions');
    }
};
