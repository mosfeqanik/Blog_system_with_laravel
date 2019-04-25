<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');

    }
    public function register(){
        return view('admin.register');
    }
    public function login(){
        $this->validate(\request(),[
            'username'=>'required',
            'password'=>'required'
        ]);
        if (Auth::guard('admin')->attempt([
            'username'=>\request('username'),
            'password'=>\request('password')
        ])
        ){
            return view('admin.dashboard');
        }

    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');


    }
}
