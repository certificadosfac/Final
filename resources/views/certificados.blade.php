<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<style type="text/css">
		img {			
			width: 100%px; height: 250px;
		}

		.card-title{
			color:#08DBC2;
			font-size:25px;
		}

		.card{
			box-shadow: 4px 4px 10px #999;
		}

		.card-body{
			height: 200px
		}
		
		.btn{
			margin-bottom: 5%;
		}
				
	</style>
</head>

<body>
<div class="row" style="margin-left: 80px; margin-right: 80px; margin-top: 30px;">
	<div class="col-md-4 text-center">
		<div class="card" style="width: auto;">
		  <img src=" {{ URL::to('/img/Unidad_laboral.png') }}" class="card-img-top">
		  <div class="card-body">
		  	<form method="post" action="{{ route('download') }}">
			  @csrf
			  <input name="tipoCert" id="tipoCert" type="hidden" value="UL">
				<h5 class="card-title">Certificacion unidad laboral actual</h5>
				<p class="card-text">Obtenga aquí su certificado de unidad laboral actual</p>
				<button type="submit" class="btn btn-dark">Solicitar</button>
			</form>
		  </div>
		</div>
	</div>
	<div class="col-md-4 text-center">
		<div class="card" style="width: auto;">
		  <img src="{{ URL::to('/img/CertificadoTiempos.png') }}" class="card-img-top" alt="...">
		  <div class="card-body">
		  <form method="post" action="{{ route('download') }}">
			  @csrf
			  <input name="tipoCert" id="tipoCert" type="hidden" value="CT">
		    <h5 class="card-title">Certificado de tiempos</h5>
		    <p class="card-text">Obtenga un certificado contiene el historial laboral.</p>
		    <button type="submit" class="btn btn-dark">Solicitar</button>
			</form>
		  </div>
		</div>
	</div>
	<div class="col-md-4 text-center">
		<div class="card" style="width: auto;">
		  <img src="{{ URL::to('/img/Cargos.png') }}" class="card-img-top" alt="...">
		  <div class="card-body">
		  <form method="post" action="{{ route('download') }}">
			  @csrf
			  <input name="tipoCert" id="tipoCert" type="hidden" value="CC">
		    <h5 class="card-title">Certificado de cargos</h5>
		    <p class="card-text">Obtenga la certificación de los cargos desempeñados para esta entidad.</p>
		    <button type="submit" class="btn btn-dark">Solicitar</button>
			</form>
		  </div>
		</div>
	</div>
</div>

<div class="row" style="margin-left: 80px; margin-right: 80px; margin-top: 30px;">
<div class="col-md-4 text-center">
		<div class="card" style="width: auto;">
		  <img src="{{ URL::to('/img/Desprendiblepago.png') }}" class="card-img-top" alt="...">
		  <div class="card-body">
		  <form method="post" action="{{ route('download') }}">
			  @csrf
			  <input name="tipoCert" id="tipoCert" type="hidden" value="CP">
		    <h5 class="card-title">Desprendibles de pago</h5>
		    <p class="card-text">Obtenga aqui su desprendible de pago del ultimo mes.</p>
		    <button type="submit" class="btn btn-dark">Solicitar</button>
			</form>
		  </div>
		</div>
	</div>
</div>
<br><br>
</body>
</html>

