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

				
	</style>
</head>

<body>
<div class="row" style="margin-left: 80px; margin-right: 80px; margin-top: 30px;">
	<div class="col-md-4 text-center">
		<div class="card" style="width: auto;">
		  <img src=" {{ URL::to('/img/rut.jpg') }}" class="card-img-top">
		  <div class="card-body">
		  	<form method="get" action="{{ route('download') }}">
			  @csrf
				<h5 class="card-title">Certificado de tiempos</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<button type="submit" class="btn btn-dark">Go somewhere</button>
			</form>
		  </div>
		</div>
	</div>
	<div class="col-md-4 text-center">
		<div class="card" style="width: auto;">
		  <img src="{{ URL::to('/img/ejemplo.jpg') }}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Certificado de tiempos</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-dark">Go somewhere</a>
		  </div>
		</div>
	</div>
	<div class="col-md-4 text-center">
		<div class="card" style="width: auto;">
		  <img src="{{ URL::to('/img/rut.jpg') }}" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-dark">Go somewhere</a>
		  </div>
		</div>
	</div>	
</div>
</body>
</html>

