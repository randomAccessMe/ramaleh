<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        'title',
        'employer',
        'city',
        'state',
        'country',
        'experience',
        'start_date',
        'until_date',
    ];

    protected $dates = [
        'start_date',
        'until_date',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
