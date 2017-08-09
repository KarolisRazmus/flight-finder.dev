<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToApFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ap_flights', function(Blueprint $table)
        {
            $table->foreign('airline_id', 'fk_ap_flights_ap_airlines1')->references('id')->on('ap_airlines')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('destination_airport_id', 'fk_ap_flights_ap_airports1')->references('id')->on('ap_airports')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('origin_airport_id', 'fk_ap_flights_ap_airports2')->references('id')->on('ap_airports')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ap_flights', function(Blueprint $table)
        {
            $table->dropForeign('fk_ap_flights_ap_airlines1');
            $table->dropForeign('fk_ap_flights_ap_airports1');
            $table->dropForeign('fk_ap_flights_ap_airports2');
        });
    }
}
