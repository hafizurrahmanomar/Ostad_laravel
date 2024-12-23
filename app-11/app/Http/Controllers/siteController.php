<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(Request $request)
    {
        return view('site.index');
    }

    public function menu(Request $request)
    {
        return view('site.menu');
    }

     public function about(Request $request)
    {
        return view('site.about');
    }

    public function reservations(Request $request)
    {
        return view('site.reservations');
    }

    public function styles(Request $request){
        return view('site.styles');
    }

}