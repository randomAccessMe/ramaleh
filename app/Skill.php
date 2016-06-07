<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    protected $dates = [
        'start_date',
        'end_date',
    ];

    public function presentEndDate()
    {
        $today = Carbon::today();

        if($this->end_date > $today) {
            return $today;
        }

        return $this->end_date;
    }
    
    public function practicedFor() {
        return $this->start_date->diffInMonths($this->presentEndDate());
    }
}
