<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //view register
    public function index()
    {
        return view('register.index', [
            "active" => "register",
            "title" => "Register"
        ]);
    }
}
