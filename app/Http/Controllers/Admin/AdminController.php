<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{

    public function blank()
    {
    	return view('admin.blank');
    }
}
