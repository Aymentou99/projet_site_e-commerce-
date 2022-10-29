<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::user()->role_as == '1') //1 = Admin Login
        {
            return redirect('/dashboard')->with('status', 'Logged in successfully');
        } elseif (Auth::user()->role_as == '0') // Normal or Default User Login
        {
            return redirect('/')->with('status', 'Logged in successfully');
        }
    }
}
