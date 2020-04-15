<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Account;
use App\Purchase;

class AccountType extends Model
{
    protected $guarded = [];

    public function accounts()
    {
        return $this->hasMany(Account::class, 'acc_type_id');
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'acc_type_id');
    }

}
