<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index() {
        $products = Product::select("*")->offset(0)->limit(10)->get();
        return view('pages.home', ['products' => $products]);
    }
}
