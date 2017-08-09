<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ap_countries', function (Blueprint $table) {
            $table->string('id', 36)->unique('id');
            $table->integer('count', true);
            $table->timestamps();
            $table->softDeletes();
            $table->string('original_name')->nullable();
            $table->string('country_code_alpha2', 2)->nullable();
            $table->string('translation_key', 20)->nullable();
            $table->string('country_code_alpha3', 3)->nullable();
            $table->integer('country_code_m49_numeric')->nullable();
            $table->string('alias', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ap_countries');
    }
}
