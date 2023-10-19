<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected function register(Request $request)
    {
        return view('layouts2.register', compact('request'));

    }
}
