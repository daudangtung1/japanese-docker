<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App;

class PDFController extends Controller

{

    public function generatePDF()
    {

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('myPDF');
//        dd($pdf);
        return $pdf->stream('myPDF');
    }

}
