<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
      return view('index');
    }
        function about(){
      return view("about",["pagetitle"=>"About page"]);
    }
      function contact(){
      return view("contact",["pagetitle"=>"Contact page"]);
    }
}
