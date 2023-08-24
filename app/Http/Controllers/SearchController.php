<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Redirect;

class SearchController extends Controller
{
    public function index() {
        $query = request('query');

        if ($query) {
            $result = Product::where('name', 'LIKE', '%' . $query . '%')
                ->orWhere('description', 'LIKE', '%' . $query . '%')
                ->get();
        } else {
           $result = Product::all()->sortBy('name');
           $query = "";
        }

        return redirect('/plants')->with('query', $query)->with('products', $result);
    }
}
