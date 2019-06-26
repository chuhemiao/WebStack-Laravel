<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'categories' => Category::with('children', 'sites')->orderBy('order')->get(),
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function apiData()
    {

        header('Access-Control-Allow-Origin:*');

        $ret_data =    Category::with('children', 'sites')->orderBy('order')->get();
        return $ret_data;

    }
}
