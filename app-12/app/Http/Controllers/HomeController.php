<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;


class HomeController extends Controller
{


    public function index(Request $request)
    { {
            //return view('home.index');

            $name="Hafizur Rahman";
             $myData = [
                'name' => 'Hafizur Rahman',
                'email' => 'hafiz@gmail.com',
                'phone' => '01700000000',
                'address' => 'Dhaka, Bangladesh',
                'age' => 25,
                'gender' => 'Male',
                'country' => 'Bangladesh',
                'hobbies' => ['Reading', 'Coding', 'Traveling'],
            ];

            return view("home",["name"=>$name,"myData"=>$myData]);
            //return view("home",compact("name","myData"));
        }


    }
}
