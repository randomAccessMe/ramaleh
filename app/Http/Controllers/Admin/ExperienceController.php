<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use Illuminate\Http\Request;

use App\Http\Requests;

class ExperienceController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        return view('admin.resume.experience')
            ->withJobs(Job::all());
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

//       TODO: $this->validate($request, [
//            'name'       => 'required',
//            'start_date' => 'required|date',
//            'end_date'   => 'required|date',
//        ]);

        foreach ($request->get('new') as $new_skill) {
            Job::create($new_skill);
        }
        foreach ($request->get('old', []) as $old_job_id => $old_job) {
            Job::find($old_job_id)->update($old_job);
        }

        flash()->success('Experience was updated successfully.');

        return redirect()->back();
    }
}
