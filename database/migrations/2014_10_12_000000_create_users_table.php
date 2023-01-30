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
            $table->id();
            $table->string('name');
            $table->boolean('is_vendor')->default(true);
            $table->string('email')->unique();
            $table->string('mobile_number')->nullable();
            $table->integer('wallet_balance')->default(0);
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('jazz_cash_number')->nullable();
            $table->string('secret')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
