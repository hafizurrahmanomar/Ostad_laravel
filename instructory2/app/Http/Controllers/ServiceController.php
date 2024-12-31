<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(Request $request)
    {

        $servics = [
            'service1' => 'Web Development',
            'service2' => 'Mobile Development',
            'service3' => 'Digital Marketing',
            'service4' => 'Software Development',
            'service5' => 'Data Analysis',
            'service6' => 'SEO & Content Marketing',
            'service7' => 'Branding & Identity',
            'service8' => 'UX/UI Design',
            'service9' => 'Digital Transformation',
            'service10' => 'Cybersecurity',

        ];
        return view('site.service');
    }
}