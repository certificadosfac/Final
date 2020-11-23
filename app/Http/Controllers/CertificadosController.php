<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html;
use Illuminate\Support\Facades\Storage;
use DNS1D;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CertificadosController extends Controller
{
    
    public function download(Request $request) 
    {          
        $tipoCert = $request->input('tipoCert');
        
        switch($tipoCert){
            case 'UL';
                //Fecha actual            
                $date = Carbon::now();
                $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                $mes = $date->format('m');
                $fechaLetras = $date->format('d'). ' días del mes de '.$meses[$mes - 1]. ' de '. $date->format('Y');

                //Id de documento
                $idDocumento =  Str::random(32);

                //Obtener data
                $cargoData = $this->getData($tipoCert);
                
                //Cargar firma
                $path = storage_path('app\img\img_firma.jpg');
                $data = file_get_contents($path);
                $base64Firma = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar logo
                $path = storage_path('app\img\Escudo_Fac.jpg');
                $data = file_get_contents($path);
                $base64Logo = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                \Storage::disk('public')->put('test.png',base64_decode(\DNS2D::getBarcodePNG("4", "PDF417")));

                $datosGenerales = [
                    'firma'      => $base64Firma,
                    'logo'   => $base64Logo,                    
                    'fechaActual' => $date,
                    'fechaLetras' => $fechaLetras,                    
                ];
               
                $view =  \View::make('pdf.unidad_laboral', compact('datosGenerales','cargoData','idDocumento'))->render();

                break;
            
            case 'CT';
                //Fecha actual            
                $date = Carbon::now();
                $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                $mes = $date->format('m');
                $fechaLetras = $date->format('d'). ' días del mes de '.$meses[$mes - 1]. ' de '. $date->format('Y');

                //Id de documento
                $idDocumento =  Str::random(32);

                $dateCorte = date_format($date, 'd-m-Y');

                //Obtener data
                $dataTiempos = $this->getData($tipoCert);
               
               
                //Cargar logo
                $path = storage_path('app\img\Escudo_Fac.jpg');
                $data = file_get_contents($path);
                $base64Logo = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar foto de pie de pagina
                $path = storage_path('app\img\fac.png');
                $data = file_get_contents($path);
                $base64Pie = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                
                \Storage::disk('public')->put('test.png',base64_decode(\DNS2D::getBarcodePNG("4", "PDF417")));

                $datosGenerales = [
                    'logo'   => $base64Logo,                    
                    'fechaActual' => $date,
                    'fechaCorte' => $dateCorte,
                    'fotoPie' => $base64Pie,
                    'fechaLetras' => $fechaLetras
                ];

                $view =  \View::make('pdf.tiempos', compact('datosGenerales', 'dataTiempos','idDocumento'))->render();            
                
            break;

            case 'CC';
                //Fecha actual            
                $date = Carbon::now();

                //Obtener data
                $data = $this->getData($tipoCert);

                 //Id de documento
                 $idDocumento =  Str::random(32);
                
                
                //Cargar logo
                $path = storage_path('app\img\Escudo_Fac.jpg');
                $data = file_get_contents($path);
                $base64Logo = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar foto de pie de pagina
                $path = storage_path('app\img\fac.png');
                $data = file_get_contents($path);
                $base64Pie = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                
                \Storage::disk('public')->put('test.png',base64_decode(\DNS2D::getBarcodePNG("4", "PDF417")));

                $datosGenerales = [                   
                    'logo'   => $base64Logo,                    
                    'fechaActual' => $date,
                    'fotoPie' => $base64Pie
                ];

                $view =  \View::make('pdf.cargos', compact('datosGenerales','idDocumento'))->render();            
                
            break;

            case 'CP';

            $rules = [
                'mes' => 'required',
                'ano' => 'required',
            ];
            $this->validate($request, $rules);
           
                //Fecha actual            
                $date = Carbon::now();

                //Obtener data
                $data = $this->getData($tipoCert);
                
                //Id de documento
                $idDocumento =  Str::random(32);
                
                //Cargar logo
                $path = storage_path('app\img\Escudo_Fac.jpg');
                $data = file_get_contents($path);
                $base64Logo = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                //Cargar foto de pie de pagina
                $path = storage_path('app\img\fac.png');
                $data = file_get_contents($path);
                $base64Pie = 'data:image/' . 'jpg' . ';base64,' . base64_encode($data);

                \Storage::disk('public')->put('test.png',base64_decode(\DNS2D::getBarcodePNG("4", "PDF417")));

                $datosGenerales = [                   
                    'logo'   => $base64Logo,
                    'fechaActual' => $date,
                    'fotoPie' => $base64Pie
                ];

                $view =  \View::make('pdf.pago', compact('datosGenerales','idDocumento'))->render();            
                
            break;
            
        }              
        
        $pdf = \App::make('dompdf.wrapper');       
        $pdf->loadHTML($view)->setPaper('letter');
        return $pdf->download('archivo.pdf');
    }
    public function getData($tipoCert) 
    {
        switch($tipoCert){
            case 'UL';
               $data = DB::table('facweb_certifica_laboral_v1')               
                ->where('cedula', '=', '1007059556')               
                ->first();
            break;
            case 'CT';
               $activo = DB::table('facweb_personal_v')
               ->select('activo')               
               ->where('cedula', '=', '1007059556')               
               ->first();

               $data = DB::table('facweb_certifica_tiempo_vr')               
                ->where('cedula', '=', '1007059556')               
                ->first();
            break;
            case 'CC';
               $data = DB::table('facweb_certifica_laboral_v1')               
                ->where('cedula', '=', '1007059556')               
                ->first();
            break;
            case 'CP';
               $descuentos = DB::table('facweb_haberes_descuentos')               
                ->where('identificacion', '=', '1007059556')               
                ->first();
                $devengado = DB::table('facweb_haberes_devengado')               
                ->where('cc', '=', '1007059556')               
                ->first();
                $data = DB::table('facweb_haberes_embargo')               
                ->where('identificacion', '=', '1007059556')               
                ->first();
            break;            
        }       
        
        return $data;
    }
}
 