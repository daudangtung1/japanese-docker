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

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>あぉ</h1>');
        return $pdf->stream();
    }

}
