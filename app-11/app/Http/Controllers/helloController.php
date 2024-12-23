<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    function hello(Request $request)
    {
        return view('hello');
    }
}