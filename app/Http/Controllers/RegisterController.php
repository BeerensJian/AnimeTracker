<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register()
    {

        $attributes = request()->validate([
            "name" => ['string', 'required'],
            "email" => ['email', 'required', 'unique:users,email'],
            "password" => ['confirmed', 'min:8', 'required']
        ]);

        // if validated create the user & log the user in and redirect to dashboard
        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/list')->with('message', "Your account has been created");
    }
}
