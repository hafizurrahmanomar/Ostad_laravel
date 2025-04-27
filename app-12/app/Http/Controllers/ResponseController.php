<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function response()

    {

        //return ("'Hello, World!';");
        //return ['name' => 'John', 'age' => 30];

        // return response('Welcome to Home Page', 200)
        //    ->header('Content-Type', 'text/plain')
        //    ->header('X-Custom-Header', 'Laravel');


        //     return response()->json([
        //     'name' => 'Rahim',
        //     'email' => 'rahim@example.com'
        // ]);

        //     return response()->json([
        //     'message' => 'Not Found'
        // ], 404);

        //return  view('welcome', ['name' => 'Karim']);

       // return redirect('/home');

        //return response()->file("img.jpg");
        //return response()->download("img.jpg");
        return view('response');






    }


}
