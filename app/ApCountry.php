<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApCountry extends CoreModel
{
    protected $table = 'ap_countries';

    protected $fillable = ['id', 'original_name', 'country_code_alpha2', 'translation_key', 'country_code_alpha3', 'country_code_m49_numeric', 'alias'];

    protected $hidden = ['count', 'created_at', 'deleted_at', 'updated_at'];
}
