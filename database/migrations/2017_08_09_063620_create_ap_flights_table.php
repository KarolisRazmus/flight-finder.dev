<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ap_flights', function (Blueprint $table) {
            $table->string('id', 36)->unique('id');
            $table->integer('count', true);
            $table->timestamps();
            $table->softDeletes();
            $table->dateTime('arrival');
            $table->dateTime('departure');
            $table->string('airline_id', 36)->index('fk_ap_flights_ap_airlines1_idx');
            $table->string('destination_airport_id', 36)->index('fk_ap_flights_ap_airports1_idx');
            $table->string('origin_airport_id', 36)->index('fk_ap_flights_ap_airports2_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ap_flights');
    }
}
