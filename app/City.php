<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;
use App\User;

class City extends Model
{
    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function users()
    {
        return $this->hasMany(User::class, 'city_id');
    }

}
