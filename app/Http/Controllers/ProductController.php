<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display guitar page
    public function guitars()
    {
        return view('guitars', [
            "active" => "guitars",
            "products" => Product::whereHas('category', function ($query) {
                            $query->where('name', 'guitar'); 
                        })->get()
            
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
