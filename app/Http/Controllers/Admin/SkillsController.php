<?php

namespace App\Http\Controllers\Admin;

use App\Skill;
use Illuminate\Http\Request;

use App\Http\Requests;

class SkillsController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        return view('admin.resume.skills')
            ->withSkills(Skill::all());
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

        foreach ($request->get('new', []) as $new_skill) {
                Skill::create($new_skill);
        }
        foreach ($request->get('old', []) as $old_skill_id => $old_skill) {
            Skill::find($old_skill_id)->update($old_skill);
        }

        flash()->success('Skills were updated successfully.');

        return redirect()->back();
    }
}
