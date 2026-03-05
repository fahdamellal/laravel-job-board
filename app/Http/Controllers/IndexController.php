<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public static function index(){
        return view("index",['pagetitle' => "Home"]);
    }

    function about (){
        return view("about",['pagetitle' => "About"]);
    }

    function contact (){
        return view("contact",['pagetitle' => "Contact"]);
    }
}
