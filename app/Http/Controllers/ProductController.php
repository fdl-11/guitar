<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show()
    {
        $cat = request()->input('category');

        if($cat == "guitars"){
            $active = "guitars";
            $products = Product::whereHas('category', function ($query) {
                $query->where('name', 'guitar'); 
            })->get();
        }

        if($cat == "accessories"){
            $active = "accessories";
            $products = Product::whereDoesntHave('category', function ($query) {
                $query->where('name', 'guitar');
            })->get();
        }

        return view('products', [
            "cat" => $cat,
            "active" => $active,
            "products" => $products
        ]);
    }

    // Display guitar page (( gak dipake ))
    public function guitars()
    {
        return view('guitars', [
            "active" => "guitars",
            "products" => Product::whereHas('category', function ($query) {
                            $query->where('name', 'guitar'); 
                        })->get()
            
        ]);
    }

    // Display guitar accessories page (( gak dipake ))
    public function accessories()
    {
        return view('accessories', [
            "active" => "accessories",
            "products" => Product::whereDoesntHave('category', function ($query) {
                $query->where('name', 'guitar');
            })->get()
        ]);
    }
}
