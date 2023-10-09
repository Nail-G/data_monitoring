<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ],[
            "email.required" => "*Email is required",
            "email.email" => "*Email is not valid",
            "email.exists" => "*Email doesn't exists",
            "password.required" => "*Password is required",
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('admin');
            } elseif(Auth::user()->role == 'user'){
                return redirect('user');
            }
        } else {
            return redirect('')
                ->withErrors(['password' => 'Password is incorrect'])
                ->withInput();
        }
    }
    function logout(){
        Auth::logout();
        return redirect('');
    }
}
