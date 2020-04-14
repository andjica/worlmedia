<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded = [];

    public function accounttype()
    {
        return $this->belongsTo(AccountType::class, 'acc_type_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
