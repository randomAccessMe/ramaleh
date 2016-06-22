<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{

    protected $fillable = [
        "name",
        "description",
        "url",
        "github_url",
        "screenshot",
    ];
    
    public static $validation_rules = [
        'name'        => 'required',
        'description' => 'required',
        'url'         => 'required|active_url',
        'screenshot'  => 'required|image',
    ];

    static $screenshot_upload_location = 'screenshots/';
}
