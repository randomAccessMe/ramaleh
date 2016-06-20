<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'summary',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
