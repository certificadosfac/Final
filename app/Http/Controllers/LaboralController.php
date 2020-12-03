<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\laboral;

class LaboralController extends Controller

{

    

    public function __construct()

    {

        $this->middleware('role');

    }

    

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
            $path = public_path() . '/storage/laboral';
            $url = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $url);
            //dd($moved);

            //$file = $request->file('file');
            //$url = $file->getClientOriginalName();
            //\Storage::disk('laboral')->put($url,  \File::get($file));

        }


        laboral::create([

            'tipo' =>$request->input('tipo'),
            'url' => $url

            

            ]);



         return redirect('/Admin/Laboral/listar');

    }



    public function create()

    {

        $id =null;

        $laboral =null;

        return view('laboral.create',["id"=>$id,"Laboral"=>$laboral]);;

    }



    public function list()

    {

        $laboral=laboral::all();

        return view('laboral.list',['Laboral'=>$laboral]);

    }

    

    public function edit($id)

    {

        $laboral = laboral::find($id);

        return view('laboral.create',["id"=>$id,"Laboral"=>$laboral]);

    }



    public function delete($id)

    {

        $laboral = new laboral;
        $laboral->find($id)->delete();
        /*return response()->json([

            'message' => 'Articulo Eliminado'

          ]);*/ 
        return back();

    }



    public function update(Request $request, $id)

    {

        $laboral = laboral::find($id);

        if ($file = $request->file('file') == null) {

            if ($laboral['url'] == null){

                $url = null ;

             }else{

                $url = $laboral['url'];

             }

        }else{

            $file = $request->file('file');
            $path = public_path() . '/storage/laboral';
            $url = uniqid() . $file->getClientOriginalName();
            $moved = $file->move($path, $url);

            //$file = $request->file('file');
            //$url = $file->getClientOriginalName();
            //\Storage::disk('laboral')->put($url,  \File::get($file));

        }

        



        $laboral->update([

            'url' =>$url,

            'tipo' =>$request->input('tipo')

            ]);



         return redirect('/Admin/Laboral/listar');

    }

}
