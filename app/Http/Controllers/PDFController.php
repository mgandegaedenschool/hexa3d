<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function showPDF(){
        $data = [

            "date" => "18/09/2021",
            "firstname" => "Jeff",
            "lastname" => "Rollex",
            "sexe" => "M",
            "age" => "45",
            "context" => "Un test",
            "last_classroom" => "BTS Option mécanique",
            "job" => "Mécanicien",
            "test_version" => "RCC A/B",
            "calibration" => "Bonne question",
            "exemple_resp" => "3",
            "response" => "35",
            "rp" => "17,5",
            "response_verif" => "35"

        ];
        return view('pdf.index', $data);
    }

    public function createPDF() {
        // retreive all records from db
        $data = [

                "date" => "18/09/2021",
                "firstname" => "Jeff",
                "lastname" => "Rollex",
                "sexe" => "M",
                "age" => "45",
                "context" => "Un test",
                "last_classroom" => "BTS Option mécanique",
                "job" => "Mécanicien",
                "test_version" => "RCC A/B",
                "calibration" => "Bonne question",
                "exemple_resp" => "3",
                "response" => "35",
                "rp" => "17,5",
                "response_verif" => "35"

        ];

        // share data to view

        $pdf = PDF::loadView('pdf.index',$data);

        // download PDF file with download method
        return $pdf->download('pdf.pdf');
    }
}
