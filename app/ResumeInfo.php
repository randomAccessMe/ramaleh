<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeInfo extends Model
{

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'summary',
    ];
}
