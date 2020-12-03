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
use App\Models\LogDocuments;
use Illuminate\Database\QueryException;
use Redirect;
<<<<<<< HEAD
use ArrayObject;
=======
>>>>>>> crud

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

                //Log documentos 
                $idDocumento =  Str::random(32);
                $log = new LogDocuments;
                $log->token = $idDocumento;
                $log->cedula = '1007059556';
                $log->save();

                //Obtener data
<<<<<<< HEAD
=======
                $data = $this->getData();
>>>>>>> crud
                $cargoData = $this->getData($tipoCert);
                if(!$cargoData){
                    return Redirect::back()->withErrors(['No se encontraron datos para los parámetros especificados.']);
                }
                
                
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

                //Log documentos 
                $idDocumento =  Str::random(32);
                $log = new LogDocuments;
                $log->token = $idDocumento;
                $log->cedula = '1007059556';
                $log->save();

                $dateCorte = date_format($date, 'd-m-Y');

                //Obtener data
<<<<<<< HEAD
=======
                $data = $this->getData();
>>>>>>> crud
                $dataTiempos = $this->getData($tipoCert);
                if(!$dataTiempos){
                    return Redirect::back()->withErrors(['No se encontraron datos para los parámetros especificados.']);
                }
               
               
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
                $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                $mes = $date->format('m');
                $fechaLetras = $date->format('d'). ' días del mes de '.$meses[$mes - 1]. ' de '. $date->format('Y');
              
                

                //Obtener data
<<<<<<< HEAD
=======
                $data = $this->getData();
>>>>>>> crud
                $dataCC = $this->getData($tipoCert);
                if(!$dataCC){
                    return Redirect::back()->withErrors(['No se encontraron datos para los parámetros especificados.']);
                }
                

                 //Log documentos 
                $idDocumento =  Str::random(32);
                $log = new LogDocuments;
                $log->token = $idDocumento;
                $log->cedula = '1007059556';
                $log->save();
                
                
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
                    'fotoPie' => $base64Pie,
                    'fechaLetras' => $fechaLetras
                ];

<<<<<<< HEAD
=======
                $view =  \View::make('pdf.cargos', compact('datosGenerales'))->render();            
>>>>>>> crud
                $view =  \View::make('pdf.cargos', compact('datosGenerales','idDocumento','dataCC'))->render();            
                
            break;

            case 'CP';

            $rules = [
                'mes' => 'required',
                'ano' => 'required',
            ];
            $this->validate($request, $rules);
           
                //Fecha actual            
                $date = Carbon::now();
                $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                $mes = $date->format('m');
                $fechaLetras = $date->format('d'). ' días del mes de '.$meses[$mes - 1]. ' de '. $date->format('Y');
              

                $ano = $request->input('ano');
                $mes = $request->input('mes');
                $mesLetra = $meses[$mes - 1];

                //Obtener data
<<<<<<< HEAD
=======
                $data = $this->getData();
>>>>>>> crud
                $dataPagos = $this->getData($tipoCert, $ano,$mes);                               
                if( count($dataPagos['devengado']) == 0){
                    return Redirect::back()->withErrors(['No se encontraron datos para los parámetros especificados.']);
                }
                
                //Log documentos 
                $idDocumento =  Str::random(32);
                $log = new LogDocuments;
                $log->token = $idDocumento;
                $log->cedula = '1007059556';
                $log->save();
                
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

<<<<<<< HEAD
=======
                $view =  \View::make('pdf.pago', compact('datosGenerales'))->render();            
                $view =  \View::make('pdf.pago', compact('datosGenerales','idDocumento','dataPagos'))->render();            
>>>>>>> crud
                $view =  \View::make('pdf.pago', compact('datosGenerales','idDocumento',
                'dataPagos','fechaLetras','mesLetra','ano'))->render();            
                
            break;
            
        }              
        
        $pdf = \App::make('dompdf.wrapper');       
        $pdf->loadHTML($view)->setPaper('letter');
        return $pdf->download('archivo.pdf');
    }
    public function getData($tipoCert, $ano = '', $mes = '') 
    {
<<<<<<< HEAD
=======
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
    public function getData($tipoCert, $ano = '', $mes = '') 
    {
>>>>>>> crud
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

               if ( $activo->activo == "NO") {
<<<<<<< HEAD
                    $dataTiempos = DB::table('facweb_certifica_tiempo_vr')               
                    ->where('cedula', '=', '1007059556')               
                    ->get();
               }else{
                    $dataTiempos = DB::table('facweb_certifica_tiempo_v1')               
                    ->where('cedula', '=', '1007059556')               
                    ->get();
               }

            if ($dataTiempos) {                
                $data = new ArrayObject();
                $tAnoos = 0;
                $tMeses = 0;
                $tDias = 0;
                foreach ($dataTiempos as $value) {

                    $mesNumeroIni = $this->mesNumero(substr($value->fecha_inicio,3,-5)); 
                    $mesNumeroFin = $this->mesNumero(substr($value->fecha_termino,3,-5)); 
                    $fechaIni = Carbon::parse(substr($value->fecha_inicio,-4).'-'.$mesNumeroIni.'-'.substr($value->fecha_inicio,0,2));
                    $fechaFin = Carbon::parse(substr($value->fecha_termino,-4).'-'.$mesNumeroFin.'-'.substr($value->fecha_termino,0,2));
                    
                    $intervalo = date_diff($fechaIni,$fechaFin);                    
                    $subTotal = str_pad($intervalo->y, 2, "0", STR_PAD_LEFT). ' '. str_pad($intervalo->m, 2, "0", STR_PAD_LEFT). ' '. str_pad($intervalo->d, 2, "0", STR_PAD_LEFT);
                    $tAnos =+ $intervalo->y;
                    $tMeses =+ $intervalo->m;
                    $tDias =+ $intervalo->d;

                    if($tDias >= 30){
                        $tDias = $tDias - 30;
                        $tMeses++;                        
                    }

                    if($tMeses >= 12){
                        $tMeses = $tMeses - 12;
                        $tAnos++;                        
                    }

                    $data->append(
                        array('tipo_tiempo' => $value->tipo_tiempo, 
                            'tipo_disposicion' => $value->tipo_disposicion,
                            'numero_disposicion' => $value->numero_disposicion,
                            'fecha_disposicion' => $value->fecha_disposicion,
                            'fecha_inicio' => substr($fechaIni,0,10),
                            'fecha_termino' => substr($fechaFin,0,10),
                            'subtotal' => $subTotal,
                            'nombres_apellidos' => $value->nombres_apellidos,
                            'cedula' => $value->cedula,
                            'codigo_militar' => $value->codigo_militar,
                            'unidad_laboral' => $value->unidad_laboral,
                            'total' => str_pad($tAnos,2, "0", STR_PAD_LEFT).' '. str_pad($tMeses,2, "0", STR_PAD_LEFT).' '.str_pad($tDias,2, "0", STR_PAD_LEFT) 
                        ));
               }

               
            }

=======
                    $data = DB::table('facweb_certifica_tiempo_vr')               
                    ->where('cedula', '=', '1007059556')               
                    ->first();
               }else{
                    $data = DB::table('facweb_certifica_tiempo_v1')               
                    ->where('cedula', '=', '1007059556')               
                    ->first();
               }

>>>>>>> crud
            break;
            case 'CC';
               $data = DB::table('fac_certifica_cargos_v as c')
               ->select('c.*',DB::raw("DATE_FORMAT(c.Fecha_Termino, '%d-%m-%Y') as date_fin"),
               DB::raw("DATE_FORMAT(c.Fecha_Inicio, '%d-%m-%Y') as date_ini"))              
                ->where('identificacion', '=', '1007059556')
                ->orderBy('Fecha_Inicio', 'asc')               
                ->get();
                                
            break;
            case 'CP';
               $descuentos = DB::table('facweb_haberes_descuentos')               
                ->where('identificacion', '=', '1007059556')               
                ->get();
                $devengado = DB::table('facweb_haberes_devengado as dev')                
                ->join('facweb_haberes_descuentos as des', 'dev.cc', '=', 'des.identificacion')
                ->select('dev.abreviatura','dev.porcentaje','dev.valor_dev',
                'des.arb','des.id_tipo_descuento','des.desc_ini','des.desc_ter',
                'des.valor_desc','dev.nombres_apellidos','dev.cc','dev.codigo_militar')             
                ->where('dev.cc', '=', '1007059556')
                ->where('dev.ano_nomina', '=', $ano)
                ->where('dev.mes_nomina', '=', $mes)               
                ->get();
                $embargo = DB::table('facweb_haberes_embargo')               
                ->where('identificacion', '=', '1007059556') 
                ->where('ano_nomina', '=', $ano)
                ->where('mes_nomina', '=', $mes)               
                ->get();
                //dd($devengado);
                
                $totaDevengado = 0;
                $totalDescuentos = 0;
                if (count($devengado) > 0) {
                    foreach ($devengado as $value) {
                        $totaDevengado += $value->valor_dev;
                        $totalDescuentos += $value->valor_desc;
                    }
                }
                
                $data = array(
                    'embargo' => $embargo,
                    'devengado' => $devengado,
                    'totaDevengado' => $totaDevengado,
                    'totalDescuentos' => $totalDescuentos
                );
            break;            
        }       
        
        return $data;
    }

    public function search_document(Request $request){

        try{ 
            
            $token = $request->token;                                            
            $doc = LogDocuments::where('token',$token)->first();            
            if ($doc) { 
                $response = array(
                    'error' => '0',
                    'msn' => 'Este certificado pertenece al documento: '.$doc->cedula
                );        
                echo json_encode($response);
                exit;
            }else{
                $response = array(
                    'error' => '1',
                    'msn' => 'Documento no encontrado.'
                );
                
                echo json_encode($response);                
                exit;  
            }

            echo json_encode($response);
            exit;

        } catch(QueryException $ex){ 
            $response = array(
                'error' => '1',
                'msn' => 'Ocurrió un error en la consulta, comuníquese con el administrador del sistema'
            ); 
            
            echo json_encode($response);
            exit;            
        }      
    }
<<<<<<< HEAD

    public function mesNumero($mes) {
        $numero = 0;
        switch($mes){
            case'ENE';
                $numero = '01';
            break;
            case 'FEB';
                $numero = '02';
            break;
            case'MAR';
                $numero = '03';
            break;
            case 'ABR';
                $numero = '04';
            break;
            case'MAY';
                $numero = '05';
            break;
            case 'JUN';
                $numero = '06';
            break;
            case'JUL';
                $numero = '07';
            break;
            case 'AGO';
                $numero = '08';
            break;
            case'SEP';
                $numero = '09';
            break;
            case 'OCT';
                $numero = '10';
            break;
            case'NOV';
                $numero = '11';
            break;
            case 'DIC';
                $numero = '12';
            break;                  

        }
        return $numero;
    }
=======
>>>>>>> crud
}
 