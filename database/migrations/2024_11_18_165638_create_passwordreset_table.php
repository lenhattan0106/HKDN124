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
        Schema::create('passwordreset', function (Blueprint $table) {
            $table->integer('reset_id', true);
            $table->integer('user_id')->index('user_id');
            $table->string('reset_token')->nullable();
            $table->dateTime('expiration')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passwordreset');
    }
};
