<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html;

class CertificadosController extends Controller
{
    public function download()
    {
        $data = [
            'titulo' => 'Styde.net'
        ];
    
        $pdf = \PDF::loadView('pdf/invoice', $data);
    
        return $pdf->download('archivo.pdf');
    }

    public function getData() 
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
