@extends('layouts.main')



@section('content')

<div class="container-fluid">



    <!-- Page Heading -->

    @if ($id == null)

    <h1 class="h3 mb-4 text-gray-800">Crear Tiempo</h1>

    @else

    <h1 class="h3 mb-4 text-gray-800">Actualizar Tiempo</h1>

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

            <form method="POST" action="{{url('/admin/Tiempo/create')}}"  accept-charset="UTF-8" enctype="multipart/form-data">

            @else

            <form method="POST" action="{{url('/admin/Tiempo/update/'.$id)}}"  accept-charset="UTF-8" enctype="multipart/form-data">

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

                  @if ($Tiempo == null)

                  @else

                  <option value="{{$Tiempo['tipo']}}">{{$Tiempo['tipo']}}</option>

                  @endif

                  <option value="logo">logo</option>

                  <option value="firma">firma</option>

                </select>

              </div>

            

            </div>

            @if ($id == null)

            <button type="submit" class="btn btn-primary">Crear Tiempo</button>

            @else

            <button type="submit" class="btn btn-success">Actualizar Tiempo</button>

            @endif

            

          </form>

        </div>

      </div>





    </div>



  </div>

@endsection

