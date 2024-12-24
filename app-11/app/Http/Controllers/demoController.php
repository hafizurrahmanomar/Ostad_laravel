<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{

    //Laravel Response
    function demo1()
    {
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


    //Laravel methods
    function demo2(Request $request)
    {
        return "Hello world!";


    }
    //Laravel query
    function demo7(Request $request)
    {

        $qry = $request->query();
        return $qry;

    }




    function demo8(Request $request)
    {

        $name = $request->name;
        $age = $request->age;
        return $name . " " . $age;
    }

    //Jason Body with input()
    function demo9(Request $request)
    {
        $jasonData = $request->input();
        return $jasonData;
    }

    //Jason Header
    function demo10(Request $request)
    {
        $Header = $request->header();
        return $Header;
    }

    //Form Data
    function demo11(Request $request)
    {
        $key1 = $request->input('key1');
        $key2 = $request->input('key2');
        $key3 = $request->input('key3');
        return $key1 . " " . $key2;
    }


    function demo12(Request $request)
    {
        $myFile = $request->input('myFile');
        $myFile->move(public_path('uploads'), $myFile->getClientOriginalName());

        return "File uploaded successfully";
    }


    //Request IP Address Data
    function demo13(Request $request)
    {
        return $request->ip();
    }


}