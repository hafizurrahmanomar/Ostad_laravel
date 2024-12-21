<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class demoController extends Controller
{
    function demo1(){
        // return 'Hello world! ';
        // return  100;
        // return true;
        // return ["a,b,c,d,e,f,g,h,i"];
        // return  array(["name"=>"Hafiz","age"=>36,"gender"=>"Male"]);
        // return  response() ->json(["name"=>"Hafiz","age"=>36,"gender"=>"Male"]);
        // return  response() ->json(["name"=>"Hafiz","age"=>36,"gender"=>"Male"],301);
        // return redirect("/");
        // return response()->file("hafiz.png");
        // return response()->download("hafiz.png");
        return view('demo');

    }

    function demo2(){
    return view('demo2');
            }



}