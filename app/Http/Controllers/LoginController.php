<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view("login");
    }

    public function login(request $request){
        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(auth()->attempt(request()->only(['email', 'password']))){
            return redirect('/dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'E-mail ou senha incorretos']);
    }

    public function logout(){
        auth()->logout();
        return redirect(route('login'));
    }
}
