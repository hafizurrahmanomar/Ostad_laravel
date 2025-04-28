<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function request_practice(Request $request)
    {

        return view(view: 'request_practice');

        /*
        $myQuery= $request->query();
       return $myQuery;
        */
    }
///parameter practice
    function prams(Request $request)
    {
        $name = $request->name;
        $city = $request->city;

        return "My name is {$name} and My city {$city}";
        // return $request->all();
    }
///Json practice
    function myJson(Request $request)
    {
        $data = $request->input();
        return $data;
    }

///header practice
    function header(Request $request)
    {
        $header = $request->header();
        return $header;


    }

    ///form data for file upload
    function form_data(Request $request)
    {
        $myImage=$request->file('myImage');
        $myImage->move(public_path('upload'),$myImage->getClientOriginalName());
        return "Image uploaded successfully";

    }

    function Ip_address(Request $request)
    {
        $ip = $request->ip();
        return $ip;
    }
   









}