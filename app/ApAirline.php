<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApAirline extends CoreModel
{
    protected $table = 'ap_airlines';

    protected $fillable = ['id', 'name'];

    protected $hidden = ['count', 'created_at', 'deleted_at', 'updated_at'];
}
