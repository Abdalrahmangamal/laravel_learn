<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JubController extends Controller
{
    function index(){
        return view("jobs/index");
    }
}
