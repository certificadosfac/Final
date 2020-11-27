@extends('layouts.main')



@section('content')

<div class="container-fluid">



    <!-- Page Heading -->

    @if ($id == null)

    <h1 class="h3 mb-4 text-gray-800">Crear Cargo</h1>

    @else

    <h1 class="h3 mb-4 text-gray-800">Actualizar Cargo</h1>

    @endif

    



    <div class="row">



      <div class="col-lg-12">



        <!-- Circle Buttons -->

        <div class="card shadow mb-4">

          <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">Insertar</h6>

          </div>

          <div class="card-body">

            @if ($id == null)

            <form method="POST" action="{{url('/admin/Cargo/create')}}"  accept-charset="UTF-8" enctype="multipart/form-data">

            @else

            <form method="POST" action="{{url('/admin/Cargo/update/'.$id)}}"  accept-charset="UTF-8" enctype="multipart/form-data">

            @endif

            

              @csrf

            <div class="form-group"> 
              <label>imagen</label>
              <br>
                  <input name="file" type="file">
            </div> 

            <div class="form-group">

                <label for="exampleFormControlSelect1">tipo</label>

                <select name="tipo" class="form-control" id="exampleFormControlSelect1" >

                  @if ($Cargos == null)

                  @else

                  <option value="{{$Cargos['tipo']}}">{{$Cargos['tipo']}}</option>

                  @endif

                  <option value="logo">logo</option>

                  <option value="firma">firma</option>

                </select>

              </div>

            

            </div>

            @if ($id == null)

            <button type="submit" class="btn btn-primary">Crear Cargo</button>

            @else

            <button type="submit" class="btn btn-success">Actualizar Cargo</button>

            @endif

            

          </form>

        </div>

      </div>





    </div>



  </div>

@endsection

