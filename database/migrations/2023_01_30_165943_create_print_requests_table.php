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
        Schema::create('print_requests', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('noOfCopies')->default(0);
            $table->string('size');
            $table->string('color');
            $table->string('file');
            $table->string('status');
            $table->integer('vendor_id')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('print_requests');
    }
};
