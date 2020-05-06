<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Skill;
use App\User;

class SkillUser extends Model
{
    protected $guarded = [];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
