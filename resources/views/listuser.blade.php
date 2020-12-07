@extends('layouts.main')

@section('content')
<div class="container-fluid">
  @csrf
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Lsita Uusarios Creados</h1>
    <p class="mb-4">Panel de administracion <strong>Usuarios</strong></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Lista de Tiempo</h6>
      </div>
      <div class="card-body">
      <form action="/Admin/usuarios/buscar "  method="get" >
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <input type="text" class="form-control" name= "email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
            </div>
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-success">Buscar</button>
          </div>
      </form>
          <div class="col-md-2">
            <a href="/Admin/usuarios/list" class="btn btn-danger">Cancelar</a>
          </div>
      </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>id</th>
                <th>Cedula</th>
                <th>Correo</th>
              </tr>
            </thead>
            <tfoot>
            <tr>
                <th>id</th>
                <th>Cedula</th>
                <th>Correo</th>
            </tr>
            </tfoot>
            <tbody>
                @foreach ($users as $item)
                <tr>
                  <td>{{$item['id']}} </td>
                  <td>{{$item['name']}} </td>
                  <td>{{$item['email']}} </td>
                </tr>  
                @endforeach              
            </tbody>
          </table>
        </div>
        {{ $users->links() }}
      </div>
    </div>
  </div>
@endsection

