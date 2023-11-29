<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        $credentials = request()->validate([
            "email" => ['email', 'required'],
            "password" => ['string', 'required']
        ]);

        if (auth()->attempt($credentials)) {
            return redirect()->to('/list')->with('status', 'Welcome back!');
        }

        return redirect()->back()->withErrors(["password" => "Email and password combination doesnt match."]);
    }
}
