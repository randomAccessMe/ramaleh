<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Job;
use App\ResumeInfo;
use App\Site;
use App\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('#app')
            ->withResume(ResumeInfo::first())
            ->withSkills(Skill::all())
            ->withJobs(Job::all())
            ->withSites(Site::all());
    }
}
