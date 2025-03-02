<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function preferences()
    {
        return view('user.createPreferences');
    }
    public function home()
    {
        return view('user.home');
    }
}
