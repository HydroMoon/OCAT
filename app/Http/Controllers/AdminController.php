<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('dashboard');
    }



    public function addEvent(Request $request)
    {
        # code...
    }
}
