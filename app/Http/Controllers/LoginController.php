<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //view login
    public function index()
    {
        return view('login.index', [
            "active" => "login",
            "title" => "Login"
        ]);
    }
}
