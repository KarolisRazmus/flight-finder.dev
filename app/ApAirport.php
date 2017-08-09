<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApAirport extends CoreModel
{
    protected $table = 'ap_airports';

    protected $fillable = ['id', 'name', 'country_id', 'city'];

    protected $hidden = ['count', 'created_at', 'deleted_at', 'updated_at'];
}
