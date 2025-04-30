<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public  function index()
    {
        return view('site.index');

    }


    public  function menu()
    {
        return view('site.menu');

    }

    function about()
    {
        return view('site.about');
    }


function reservations()
{
    return view('site.reservations');
}


}
