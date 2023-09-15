<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display guitar page
    public function guitars()
    {
        return view('guitars', [
            "active" => "guitars"
        ]);
    }

    // Display guitar accessories page
    public function accessories()
    {
        return view('accessories', [
            "active" => "accessories"
        ]);
    }
}
