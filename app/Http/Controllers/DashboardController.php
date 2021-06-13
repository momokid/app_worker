<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //auth middleware
    public function __construct()
    {
        $this->middleware('auth');    
    }

    //Home page
    public function home(){
        return view('posts.index');
    }

    //Dashboard page
    public function dashboard(){
        return view('posts.dashboard');
    }
}
