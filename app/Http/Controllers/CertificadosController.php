<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html;
use Illuminate\Support\Facades\Storage;
use DNS1D;
use Carbon\Carbon;

class CertificadosController extends Controller
{
    
    public function download(Request $request) 
    {          
        $tipoCert = $request->input('tipoCert');
        
        switch($tipoCert){
            case 'UL';
                //Fecha actual            
                $date = Carbon::now();

                //Obtener data
                $data = $this->getData();
                
                //Cargar firma
                $path = storage_path('app\img\img_firma.jpg');
                $data = file_get_contents($path);
                $base64Firma = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar logo
                $path = storage_path('app\img\Escudo_Fac.jpg');
                $data = file_get_contents($path);
                $base64Logo = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar codigo QR
                $path = storage_path('app\img\test.png');
                $data = file_get_contents($path);
                $base64Code = 'data:image/' . 'png' . ';base64,' . base64_encode($data);

                \Storage::disk('public')->put('test.png',base64_decode(\DNS2D::getBarcodePNG("4", "PDF417")));

                $datosGenerales = [
                    'firma'      => $base64Firma,
                    'logo'   => $base64Logo,
                    'codeqr'   => $base64Code,
                    'fechaActual' => $date
                ];

                $view =  \View::make('pdf.unidad_laboral', compact('datosGenerales'))->render();

                break;
            
            case 'CT';
                //Fecha actual            
                $date = Carbon::now();

                $dateCorte = date_format($date, 'd-m-Y');

                //Obtener data
                $data = $this->getData();
               
               
                //Cargar logo
                $path = storage_path('app\img\Escudo_Fac.jpg');
                $data = file_get_contents($path);
                $base64Logo = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar foto de pie de pagina
                $path = storage_path('app\img\fac.png');
                $data = file_get_contents($path);
                $base64Pie = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar codigo QR
                $path = storage_path('app\img\test.png');
                $data = file_get_contents($path);
                $base64Code = 'data:image/' . 'png' . ';base64,' . base64_encode($data);

                \Storage::disk('public')->put('test.png',base64_decode(\DNS2D::getBarcodePNG("4", "PDF417")));

                $datosGenerales = [
                    'logo'   => $base64Logo,
                    'codeqr'   => $base64Code,
                    'fechaActual' => $date,
                    'fechaCorte' => $dateCorte,
                    'fotoPie' => $base64Pie
                ];

                $view =  \View::make('pdf.tiempos', compact('datosGenerales'))->render();            
                
            break;

            case 'CC';
                //Fecha actual            
                $date = Carbon::now();

                //Obtener data
                $data = $this->getData();
                
                
                //Cargar logo
                $path = storage_path('app\img\Escudo_Fac.jpg');
                $data = file_get_contents($path);
                $base64Logo = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar foto de pie de pagina
                $path = storage_path('app\img\fac.png');
                $data = file_get_contents($path);
                $base64Pie = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar codigo QR
                $path = storage_path('app\img\test.png');
                $data = file_get_contents($path);
                $base64Code = 'data:image/' . 'png' . ';base64,' . base64_encode($data);

                \Storage::disk('public')->put('test.png',base64_decode(\DNS2D::getBarcodePNG("4", "PDF417")));

                $datosGenerales = [                   
                    'logo'   => $base64Logo,
                    'codeqr'   => $base64Code,
                    'fechaActual' => $date,
                    'fotoPie' => $base64Pie
                ];

                $view =  \View::make('pdf.cargos', compact('datosGenerales'))->render();            
                
            break;

            case 'CP';
                //Fecha actual            
                $date = Carbon::now();

                //Obtener data
                $data = $this->getData();
                
                
                //Cargar logo
                $path = storage_path('app\img\Escudo_Fac.jpg');
                $data = file_get_contents($path);
                $base64Logo = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar foto de pie de pagina
                $path = storage_path('app\img\fac.png');
                $data = file_get_contents($path);
                $base64Pie = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar codigo QR
                $path = storage_path('app\img\test.png');
                $data = file_get_contents($path);
                $base64Code = 'data:image/' . 'png' . ';base64,' . base64_encode($data);

                \Storage::disk('public')->put('test.png',base64_decode(\DNS2D::getBarcodePNG("4", "PDF417")));

                $datosGenerales = [                   
                    'logo'   => $base64Logo,
                    'codeqr'   => $base64Code,
                    'fechaActual' => $date,
                    'fotoPie' => $base64Pie
                ];

                $view =  \View::make('pdf.pago', compact('datosGenerales'))->render();            
                
            break;
            
        }              
        
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
 