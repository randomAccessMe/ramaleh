<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;

class LogController extends Controller
{

    public function index(Request $request)
    {

        if ($request->has('l')) {
            LaravelLogViewer::setFile(base64_decode($request->get('l')));
        }

        if ($request->has('dl')) {
            return Response::download(LaravelLogViewer::pathToLogFile(base64_decode($request->get('dl'))));
        } elseif ($request->has('del')) {
            File::delete(LaravelLogViewer::pathToLogFile(base64_decode($request->get('del'))));

            return redirect($request->url());
        }

        $logs = LaravelLogViewer::all();

        return view('admin.logs', [
            'logs'         => $logs,
            'files'        => LaravelLogViewer::getFiles(true),
            'current_file' => LaravelLogViewer::getFileName(),
        ]);
    }
}
