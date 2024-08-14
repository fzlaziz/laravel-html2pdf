<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index(){
        $data = [
            "Sub Total" => 'Rp 12.830.000,00',
            "Discount" => 'Rp 31.500,00',
            "PB1" => 'Rp 1.317.184,00',
            "SERVICE CHARGE" => 'Rp 379.545,00',
            "ROUNDING" => 'Rp -20,00',
            "TOTAL" => 'Rp 14.495.829,50',
        ];
        $payments = [
            "Name" => "Total",
            "Cash" => "Rp 3.000.000,00",
            "BCA" => "Rp 2.500.000,00",
            "Mandiri" => "Rp 4.000.000,00",
            "BRI" => "Rp 2.000.000,00",
            "BNI" => "Rp 1.495.829,50",
            "OVO" => "Rp 1.500.000,00",
            "Total" => "Rp 14.495.829,50"
        ];
        
        $pdf = Pdf::setPaper('a4')->loadView('pdf.template', compact('data','payments'));
        return $pdf->stream();
        // return $pdf->download('template.pdf');
    }
}
