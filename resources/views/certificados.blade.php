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
				<h5 class="card-title">Certificacion unidad laboral</h5>
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
		    <h5 class="card-title">Desprendibles de pago</h5>
		    <p class="card-text">Obtenga aqui su desprendible de pago del ultimo mes.</p>
		    <button type="button" class="btn btn-dark"  data-toggle="modal" data-target="#dateModal">Solicitar</button>
		</div>
		</div>
	</div>
</div>
<br><br>

<div class="modal fade" id="dateModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="dateModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dateModalLabel">Ingrese un mes y año</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">	    
		<form method="post" action="{{ route('download') }}">
			@csrf
				<input name="tipoCert" id="tipoCert" type="hidden" value="CP">
			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Mes:</label>				
				<select class="form-control" name="mes" id="mes">
					<option value="01">Enero</option>
					<option value="02">Febrero</option>
					<option value="03">Marzo</option>
					<option value="04">Abril</option>
					<option value="05">Mayo</option>
					<option value="07">Junio</option>
					<option value="08">Agosto</option>
					<option value="09">Septiembre</option>
					<option value="10">Octubre</option>
					<option value="11">Noviembre</option>
					<option value="12">Diciembre</option>
				</select>				
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Año:</label>
				<select class="form-control" name="ano" id="ano">
				<?php
                    $anoActual = date("Y");
					for ($i = 0; $i <= 10; $i++) {
						$ano = $anoActual - $i;													
						echo "<option value='" . $ano . "'>" . $ano .  "</option>";
					}
                    
                    ?>					
				</select>
			</div>		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-dark">Solicitar</button>
      </div>
	  </form>
    </div>
  </div>
</div>

</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	if({{$errors->any()}}){
		swal("Error!", '{{$errors->first()}}', "info");
	}	
</script>
</html>

