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
            return redirect()->to('/list')->with('message', "Welcome back " . auth()->user()->name . "!");
        }

        return redirect()->back()->withErrors(["password" => "Email and password combination doesn't match."]);
    }
}
