<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pago;

class PagoController extends Controller

{

    //

    // public function __construct()

    // {

    //     $this->middleware('auth');

    // }

    

    public function index()

    {

        return view('new');

    }

    

    public function save(Request $request)

    {

        if ($file = $request->file('file') == null) {

            $url = null ;

        }else{

            $file = $request->file('file');
            $path = public_path() . '/storage/pago';
            $url = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $url);
            //dd($moved);

            //$file = $request->file('file');
            //$url = $file->getClientOriginalName();
            //\Storage::disk('pago')->put($url,  \File::get($file));

        }


        pago::create([

            'tipo' =>$request->input('tipo'),
            'url' => $url

            

            ]);



         return redirect('/Admin/Pago/listar');

    }



    public function create()

    {

        $id =null;

        $pago =null;

        return view('pago.create',["id"=>$id,"Pagos"=>$pago]);;

    }



    public function list()

    {

        $pagos=pago::all();

        return view('pago.list',['Pagos'=>$pagos]);

    }

    

    public function edit($id)

    {

        $pago = pago::find($id);

        return view('pago.create',["id"=>$id,"Pagos"=>$pago]);

    }



    public function delete($id)

    {

        $pago = new pago;
        $pago->find($id)->delete();
        /*return response()->json([

            'message' => 'Articulo Eliminado'

          ]);*/ 
        return back();

    }



    public function update(Request $request, $id)

    {

        $pago = pago::find($id);

        if ($file = $request->file('file') == null) {

            if ($pago['url'] == null){

                $url = null ;

             }else{

                $url = $pago['url'];

             }

        }else{

            $file = $request->file('file');
            $path = public_path() . '/storage/pago';
            $url = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $url);

            //$file = $request->file('file');
            //$url = $file->getClientOriginalName();
            //\Storage::disk('pago')->put($url,  \File::get($file));

        }

        



        $pago->update([

            'url' =>$url,

            'tipo' =>$request->input('tipo')

            ]);



         return redirect('/Admin/Pago/listar');

    }

}
