<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ap_airports', function (Blueprint $table) {
            $table->string('id', 36)->unique('id');
            $table->integer('count', true);
            $table->timestamps();
            $table->softDeletes();
            $table->string('name')->nullable();
            $table->string('country_id', 36)->index('fk_ap_airports_ap_countries_idx');
            $table->string('city');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ap_airports');
    }
}
