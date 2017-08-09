<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApFlight extends CoreModel
{
    protected $table = 'ap_flights';

    protected $fillable = ['id', 'arrival', 'departure', 'airline_id', 'destination_airport_id', 'origin_airport_id'];

    protected $hidden = ['count', 'created_at', 'deleted_at', 'updated_at'];
}
