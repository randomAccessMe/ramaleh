<?php

namespace App\Http\Controllers\Admin;

use App\ResumeInfo;
use Illuminate\Http\Request;

use App\Http\Requests;
use XMLReader;
use XMLWriter;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     * @param  Site $site
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        return view('admin.resume.info')->withResume(ResumeInfo::first());
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  ResumeInfo               $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        ResumeInfo::first()->update($request->all());

        flash()->success('Resume updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
