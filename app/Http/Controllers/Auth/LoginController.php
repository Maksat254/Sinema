<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Неверные учетные данные.',
            ]);
        }
    }
    public function showLoginForm()
    {
        return view('layouts.login');
    }

}

