<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailContacto;
use Illuminate\Support\Facades\Validator;
use Redirect;
class MailController extends Controller
{
    //
    
    
    
    
    public function register(Request $request)

    {
        

        $Iemail = DB::table('fac_certifica_cargos_v')->where('identificacion', $request->cedula)->value('Email');
        if (!isset($Iemail)) {
            return Redirect::back()->withErrors(['El usuario no se encuentra registrado']);
        }
        $Pemail = DB::table('fac_certifica_cargos_v')->where('identificacion', $request->cedula)->value('Email_Institucional');
        // campo validacion
        $nombre = DB::table('fac_certifica_cargos_v')->where('identificacion', $request->cedula)->value('Apellidos_Nombres');
        $str= Str::random(8);
        $Pass = Hash::make($str);
        $validar = User::where('email',$Iemail)->first();

        if (isset($validar)) {
            return Redirect::back()->withErrors(['El usuario ya se encuentra registrado']);
        }
        $usuario = new User;
        $usuario->name = $nombre;
        $usuario->email = $Pemail;
        $usuario->password = $Pass;
        $usuario->save();
        
       
        //Mail::to($Iemail)->send(new EmailContacto($str));

    
        return Redirect::back()->withErrors(['Usuario Creado Exitosamente Validar Correo']);

    }
}
