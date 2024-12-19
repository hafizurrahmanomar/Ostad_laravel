<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;

class fileController extends Controller
{
   function download()
    {
        return response("This Is Download File");
    }

   function downloadId($invoiceId){
        return response("This Is Download File:{$invoiceId}");
    }


    function downloadIdWithFileType($FileType){
        return response("This Is Download png File:{$FileType}");
    }

    function error(){
        return response("Please Your Download Id Provide",404);
    }
   
}