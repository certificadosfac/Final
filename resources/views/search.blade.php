<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<style type="text/css">
		body {
        background-color:#fff;
        -webkit-font-smoothing: antialiased;
        font: normal 14px Roboto,arial,sans-serif;
        }

        .container {            
            position: fixed;           
        }

        .form-login {
            background-color: #EDEDED;
            padding-top: 10px;
            padding-bottom: 20px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 15px;
            border-color:#d2d2d2;
            border-width: 5px;
            box-shadow:0 1px 0 #cfcfcf;
        }

        h4 { 
        border:0 solid #fff; 
        border-bottom-width:1px;
        padding-bottom:10px;
        text-align: center;
        }

        .form-control {
            border-radius: 10px;
        }

        .wrapper {
            text-align: center;
        }

        .contenido{
            margin-left: 35%;
            margin-top: 22%;
        }
     
				
	</style>
    <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg);height: 969px; background-size:cover;">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-6 contenido">
            <div class="form-login">
            <h4>Consultar documento</h4>
            <input onkeyup="onKeyUp(event)" type="text" id="search" name="search" class="form-control input-sm chat-input" placeholder="Buscar" focus/>
            </br> 
            </div>        
        </div>
    </div>
</div>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
document.getElementById("search").focus();
  function onKeyUp(event) {
    var keycode = event.keyCode;
    var action = window.location.origin + '/search_document/' + $('input:text[name=search]').val()
    
    if(keycode == '13'){     
      $.ajax({
            url: action,
            dataType: 'json',
            type: 'GET',
            success: function (response) {

                var result = response;

                if (result.error == "1") {
                    swal("Error!", result.msn, "error");
                }else{
                    swal("Correcto!", result.msn, "success");                   
                }
            },
           
        }); 
    }
  }
</script>
</html>

