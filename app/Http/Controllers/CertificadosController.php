<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html;
use Illuminate\Support\Facades\Storage;

class CertificadosController extends Controller
{
    
    public function download() 
    {        
        $path = storage_path('app\img\Escudo_Fac.jpg');
        $data = file_get_contents($path);
        $base64Logo = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

        $path = storage_path('app\img\img_firma.jpg');
        $data = file_get_contents($path);
        $base64Firma = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

        $path = storage_path('app\img\CodeBar.png');
        $data = file_get_contents($path);
        $base64Code = 'data:image/' . 'png' . ';base64,' . base64_encode($data);

        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.unidad_laboral', compact('data', 'base64Firma', 'base64Logo','base64Code'))->render();
        $pdf = \App::make('dompdf.wrapper');       
        $pdf->loadHTML($view)->setPaper('letter');
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
 