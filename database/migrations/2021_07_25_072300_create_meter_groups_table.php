<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeterGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meter_groups', function (Blueprint $table) {
            $table->id();
            $table->string('MyProperty')->unique();
            $table->string('title');
            $table->string('address');
            $table->string('city');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('rate_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('rate_id')->references('id')->on('rates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meter_groups');
    }
}
