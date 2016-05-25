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

    static $screenshot_upload_location = 'screenshots/';
}
