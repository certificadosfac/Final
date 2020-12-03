@extends('layouts.main')

@section('content')
<div class="container-fluid">
  @csrf
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Certificado Laboral</h1>
    <p class="mb-4">Panel de administracion <strong>Firmas - Logos</strong> Certidicado Laboral de la empresa</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Lista de Laboral</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>id</th>
                <th>url</th>
                <th>tipo</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tfoot>
            <tr>
              <th>id</th>
              <th>url</th>
              <th>tipo</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
            </tfoot>
            <tbody>
                @foreach ($Laboral as $item)
                <tr>
                  <td>{{$item['id']}} </td>
                  <td>{{$item['url']}} </td>
                  <td>{{$item['tipo']}} </td>
                  <td>
                    @php
                        $url= $item['id'];
                    @endphp
                  <a href="{{ url('Admin/Laboral/editar/'.$url) }}" class="btn btn-warning btn-icon-split">
                      <span class="icon text-white-50">
                          <i class="fas fa-exclamation-triangle"></i>
                      </span>
                      <span class="text">Editar</span>
                  </a>
                  </td>
                  <td>
                  <a  href="{{url('/admin/Laboral/delete/'.$item['id'])}}" class="btn btn-danger btn-icon-split">
                  <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Eliminar</span>
                  </a>
                  </td>
                </tr>  
                @endforeach
                
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
@endsection

@section('scriptsFotter')
  <script>

  function  eliminar(id) {

      var ruta = $('#eliminarArticulo').attr('ruta');
      var url = ruta+"/"+id;
    //   alert(url)

      $.ajax({
          type: "POST",
          url: url,
          data: {
            _token: "{{ csrf_token() }}",
            id:id},
          dataType: 'json',
          success : function (result) {
            alert(result.message);
            location.reload();
          }
      });

  }
</script>

@endsection