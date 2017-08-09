<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToApAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ap_airports', function(Blueprint $table)
        {
            $table->foreign('country_id', 'fk_ap_airports_ap_countries')->references('id')->on('ap_countries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ap_airports', function(Blueprint $table)
        {
            $table->dropForeign('fk_ap_airports_ap_countries');
        });
    }
}
