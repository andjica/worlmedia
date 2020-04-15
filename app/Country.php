<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;

class Country extends Model
{
    protected $guarded = [];

    public function cities()
    {
        return $this->hasMany(City::class, 'country_id')->order_by('country_name', 'ASC');
    }
}
