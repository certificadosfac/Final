@extends('layouts.main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Panel de administracion</h1>
    <p class="mb-4">Panel de administracion <strong>Logos - Firmas - Usuarios Registrados</strong> </p>

    <!-- Content Row -->
    <div class="row">

        <!-- Border Left Utilities -->
        <div class="col-lg-6">

            <div class="card mb-4 py-3 border-left-primary">
            <div class="card-body">
                    <h2>Certificacion unidad laboral actual</h2>
                    <a href="{{ url('/Admin/Laboral/listar') }}" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Listar</span>
                    </a>
                    <a href="{{ url('/Admin/Laboral/crear') }}" class="btn btn-secondary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Crear Firma - Logo</span>
                    </a>
                
                </div>
            </div>

            <div class="card mb-4 py-3 border-left-secondary">
            <div class="card-body">
                    <h2>Certificado de tiempos</h2>
                    <a href="{{ url('/Admin/Tiempo/listar') }}" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Listar</span>
                    </a>
                    <a href="{{ url('/Admin/Tiempo/crear') }}" class="btn btn-secondary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Crear Firma - Logo</span>
                    </a>
                   
                </div>
            </div>

            <div class="card mb-4 py-3 border-left-success">
            <div class="card-body">
                    <h2>Certificado de cargos</h2>
                    <a href="{{ url('/Admin/Cargo/listar') }}" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Listar</span>
                    </a>
                    <a href="{{ url('/Admin/Cargo/crear') }}" class="btn btn-secondary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Crear Firma - Logo</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Border Bottom Utilities -->
        <div class="col-lg-6">

            <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body">
                    <h2>Desprendibles de pago</h2>
                    <a href="{{ url('/Admin/Pago/listar') }}" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Listar</span>
                    </a>
                    <a href="{{ url('/Admin/Pago/crear') }}" class="btn btn-secondary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">Crear Firma - Logo</span>
                    </a>
                </div>
            </div>

            <div class="card mb-4 py-3 border-bottom-secondary">
            <div class="card-body">
                    <h2>Usuarios</h2>
                    <a href="#" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                        </span>
                        <span class="text">Listar</span>
                    </a>
                    
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->
@endsection