<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(Request $request){
        return view("site.index");
    }
    public function menu(Request $request){
        return view("site.menu");
    }

    public function about(Request $request){
        return view("site.about");
    }

    public function reservations(Request $request){
        return view("site.reservations");
    }

    public function style(Request $request){
        return view("site.style");
    }

    public function generic(Request $request){
        return view("site.style");
    }
}
