<?php

namespace App\Http\Controllers\Admin;

use App\Resume;
use Illuminate\Http\Request;

use App\Http\Requests;

class ResumeController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        return view('admin.resume.info')->withResume(Resume::first());
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        Resume::first()->update($request->all());

        flash()->success('Resume updated successfully');

        return redirect()->back();
    }
    
}
