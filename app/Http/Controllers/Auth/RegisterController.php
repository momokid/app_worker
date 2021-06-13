<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

        //Validate user
       $this->validate($request, [
            'name'=>'required|max:255',
            'username'=>['required','unique:users'],
            'email'=>['required','regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix','max:255'],
            'password'=>'required|confirmed|min:8',
            'acctype'=>'required'
        ]);
        
       //store user
       User::create([
           'name'=>$request->name,
           'username'=>$request->username,
           'email'=>$request->email,
           'password'=>Hash::make($request->password),
           'acctype'=>$request->acctype,
       ]);

       //sign in
       // auth()->attempt($request->only('username','password'));

       //redirect user
       //return redirect()->route('home');
       return back();
    }
}
