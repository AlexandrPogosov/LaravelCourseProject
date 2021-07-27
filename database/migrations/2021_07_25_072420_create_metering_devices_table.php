<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeteringDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metering_devices', function (Blueprint $table) {
            $table->id();
            $table->string('installation_date');
            $table->string('last_verification_date');
            $table->string('serial_number')->unique();
            $table->unsignedBigInteger('meter_id');
            $table->unsignedBigInteger('meter_group_id');

            $table->foreign('meter_id')->references('id')->on('meters');
            $table->foreign('meter_group_id')->references('id')->on('meter_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metering_devices');
    }
}
