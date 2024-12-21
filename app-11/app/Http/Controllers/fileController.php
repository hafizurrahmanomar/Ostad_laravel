<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class fileController extends Controller
{
   function download(Request $request)
    {
        return response("This Is Download File");
    }

   function downloadId(Request $request,$invoiceId){
        return response("This Is Download File:{$invoiceId}");
    }


    function downloadIdWithFileType(Request $request,$FileType){
        return response("This Is Download png File:{$FileType}");
    }

    function error(){
        return response("Please Your Download Id Provide",404);
    }

}
