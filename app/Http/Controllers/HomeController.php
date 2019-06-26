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

        $type = $_GET['type'] ?  $_GET['type'] : 0;

        $ret_data =    Category::with('children', 'sites')->orderBy('order')->get();

        $ret_datas =   json_decode(json_encode($ret_data),true);
        foreach ($ret_datas as $k => $v){
            foreach ($v['sites'] as $key => $value){
                $ret_datas[$k]['sites'][$key]['thumb']  = 'https://my.bsatoshi.com/uploads/'.$value['thumb'];
            }
        }
        return $ret_datas[$type]['sites'];

    }
}
