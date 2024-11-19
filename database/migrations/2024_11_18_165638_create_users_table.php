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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('user_id', true);
            $table->string('username', 50)->unique('username');
            $table->string('password_hash');
            $table->string('email', 100)->unique('email');
            $table->enum('role', ['admin', 'normal', 'moderate'])->nullable()->default('normal');
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->enum('status', ['active', 'inactive'])->nullable()->default('active');
            $table->dateTime('last_login')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
