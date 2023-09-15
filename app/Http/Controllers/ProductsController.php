<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Display guitar page
    public function guitars()
    {
        return view('guitar', [
            
        ]);
    }

    // Display guitar sccessories page
    public function accessories()
    {
        return view('accessories', [

        ]);
    }
}
