<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests;
use App\Job;
use App\Resume;
use App\Site;
use App\Skill;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('#app')
            ->withResume(Resume::first())
            ->withSites(Site::all());
    }

    /**
     * Send me an email.
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {

        Mail::send('emails.contact', ['data' => $request], function ($mail) use ($request) {
            $mail->from($request->get('email'), env('APP_NAME'));

            $mail->to(config('mail.to'), 'Rami AlMaleh')->subject('Someone contacted you from ' . env('APP_NAME'));
        });

        return redirect()->back();
    }

    /**
     * Download resume.
     * @return \Illuminate\Http\Response
     */
    public function resume()
    {

        $pdf = \PDF::loadView('pdf.resume', [
            'resume' => Resume::first(),
            'sites'  => Site::all()
        ]);

        return $pdf->download('Rami AlMaleh.pdf');
    }


}
