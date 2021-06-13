<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        
         //Validate user
       $this->validate($request, [
            'username'=>'required',
            'password'=>'required',
        ]);

        //Log user in
        if(!auth()->attempt($request->only('username','password'))){
            return back()->with('status','Invalid login credentials');
        };

        //redirect to the home page
        return redirect()->route('home');
    }

    
}
