<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use Illuminate\Support\Facades\Response;

class FileController extends Controller
{
    public function loan($date){
         $file= Files::where('date',rawurldecode($date))->where('type','loan')->firstOrFail();
         $headers= array(
             'Content-Type: application/pdf',
         );
         return Response::download($file->location,"Loan.pdf",$headers);
    }
    public function plan($date){
        // $smth = preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode($date)); 
        // $smth = html_entity_decode($smth,null,'UTF-8');
        $file= Files::where('date',rawurldecode($date))->where('type','saving')->firstOrFail();
        $headers= array(
            'Content-Type: application/pdf',
        );
        return Response::download($file->location,"Saving.pdf",$headers);
   }
}
