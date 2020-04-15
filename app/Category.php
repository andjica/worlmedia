<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Category extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class, 'category_id');
    }

}
