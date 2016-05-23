<?php

namespace App\Http\Controllers\Admin;

use App\Site;
use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.portfolio.index')->withSites(Site::all());
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name'        => 'required',
            'description' => 'required',
            'url'         => 'required|active_url',
            'screenshot'  => 'required|image',
        ]);

        $screenshot = $request->file('screenshot');
        $filename    = time() . '.' . $screenshot->guessExtension();
        $destination = storage_path('public/uploads/' . Site::$screenshot_upload_location);

        if ( ! $screenshot->isValid()) {
            flash()->error('Invalid screenshot.');
            return redirect()->back();
        }

        $screenshot->move($destination, $filename);
        Site::create(array_merge($request->except('screenshot'), ['screenshot' => $filename]));
        flash()->success($request->get('name') . ' was added successfully.');


        return redirect()->route('admin::admin.site.index');
    }

    /**
     * Display the specified resource.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.portfolio.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
