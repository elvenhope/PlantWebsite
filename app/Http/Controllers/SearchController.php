<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class SearchController extends Controller
{
    public function index() {
        $query = request('query');
        if(!$query) {
            $query = "";
        }
        return view('pages.search')->with('query', $query);
    }
}
