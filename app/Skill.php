<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SkillUser;

class Skill extends Model
{
    protected $guarded = [];

    public function skillusers()
    {
        return $this->hasMany(SkillUser::class, 'skill_id');
    }
}
