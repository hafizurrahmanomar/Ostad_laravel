<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class aboutController extends Controller
{
    function about(){
        return response('This is about Page');
    }


function aboutMe(){
    return response('Hi, I am Hafizur Rahman Omar');
}

}