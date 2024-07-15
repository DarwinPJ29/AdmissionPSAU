<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    // public function generatePDF(){
    //     $data =
    //     $pdf = Pdf::loadView('pdf.invoice', $data);
    // return $pdf->download('sampledata.pdf');
    // }

    public function pdf() {
        return view('admin.pdfs.report_dataPDF');
    }
}
