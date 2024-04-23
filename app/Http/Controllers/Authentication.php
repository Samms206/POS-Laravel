<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authentication extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function auth(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->with('failed', 'Wrong email or password');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('warning', 'Your have been logout');
    }
}
