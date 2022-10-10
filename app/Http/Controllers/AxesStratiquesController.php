<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AxesStratiquesController extends Controller
{
    public function getDownload(){
        //PDF file is stored under project/public/download/info.pdf
        $file="./pdf/AxesStratiques.pdf";
        return Response::download($file);
}
}
