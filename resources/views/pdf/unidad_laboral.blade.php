<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 2</title>

    <style type="text/css">

      .escudo{
        width: 80px; 
        height: 80px;
        margin-top: -2%;        
      }
      .img_firma{
        width: 350px; 
        height: 90px;
      }
      h5{
        text-align: center;        
      }

      .h5titulo{
        margin-top: 20px;
      }

      .divescudo{
        text-align: center;
      }

      hr{        
        width: 50%;

      }
      .frima{        
        font-size: 12px;
        text-align: center;
      }
      .divFirma{
        text-align: center;
        margin-top: 40%;  
      }
      .td1{
        width:40px;
        text-align: left;
        box-sizing: border-box;
       
      }
      .td2{       
        width:60px;
        box-sizing: border-box;
      }

      .imgCode{        
        width: 350px;
        height:35px; 
        writing-mode: vertical-lr;
        transform: rotate(270deg);
        margin-left: -24.5%;
        margin-top: 4%;      
      }

      .lateral{       
        width:800%;
        margin-top: 12%;
        margin-left: -395%;
        font-size: 12px;

      }

      .lateralCode{       
        font-size: 11px;
        writing-mode: vertical-lr;
        transform: rotate(270deg);
        margin-left: -94.5%;
        margin-top:-62%;
      }

      .texto{
        margin-left:11%; 
        text-align: justify;      
      }

      .obs{
        margin-left:11%;
        text-align: justify;
      }

      .lateralFirma{
        font-size: 11px;
        writing-mode: vertical-lr;
        transform: rotate(270deg);       
        margin-top: -38%;
        margin-left: -99%;
      }

      .img_P1{
        width:150px;
        height:120px;
        margin-right: 12%;
      }

      .img_P2{
        width:150px;
        height:120px;
        margin-right: 12%;
      }

      .img_P3{
        width:150px;
        height:120px;
      }

      .containerImgPie{
        margin-left: 10%;
        margin-top: 4%;
      }      

    </style>
    
  </head>
  <body>
    <table>
      <tr>
        <td>                 
          <div>
              <h5 class="h5titulo" style="margin-top: 0%;">
              REPUBLICA DE COLOMBIA <br>
              MINISTERIO DE DEFENSA NACIONAL
              </h5>
          </div>
          <div class="divescudo">    
            <img class= "escudo" src="{{$datosGenerales['logo']}}" alt="Logo" />
          </div>
          <div>
          <img class="imgCode" src="data:image/png;base64,{{DNS2D::getBarcodePNG($idDocumento, 'PDF417')}}" alt="Bacode" />
          <p class="lateralCode">Identificador : {{$idDocumento}} (Válido indefinidamente)<p>
          <h5 style="margin-top: -20%;"></h5>
          <br>
          <h5 style="margin-top: -10%;"> FUERZA AEREA COLOMBIANA</h5>
          <h5 style="margin-top: -20%;"></h5>
          <br>
          <h5 style="margin-top: -6%;">CERTIFICACION UNIDAD LABORAL ACTUAL</h5>
          <br>
          <p class="texto">
          EL (LA) SUSCRITO(A) DIRECTOR DE PERSONAL DIPER de la (el) FUERZA AEREA
          COLOMBIANA, hace constar que una vez verificada la base de datos del Sistema de
          Información para la Administración del Talento Humano (SIATH), certifica que el(la)
          Señor(a)(ita) Civil ASD2 {{$cargoData->apellidos_nombres}} identificado con cc.
          {{$cargoData->cedula}} expedida en {{$cargoData->lugar_cedula}}, se escalafonó en la (el)
          FUERZA AEREA COLOMBIANA como {{$cargoData->cargo}} el {{$cargoData->fecha_disp}}, mediante Orden Administrativa
          De Personal Fac No. 025 del 31 Diciembre 2001, registra como la última unidad laborada en
          el lapso {{$cargoData->fecha_disp}} a la fecha, en el (la) {{$cargoData->unidad_laboral}}, ubicado en la ciudad de BogotÁ, Distrito
          Capital (Cundinamarca), ostentando el cargo de {{$cargoData->cargo}}. 
          </p>
          <br>          
          </div>
          <div>          
            <p class="obs">Se expide la presente constancia. Dada a los {{$datosGenerales['fechaLetras']}} en la ciudad
              de Bogotá D.C.
            </p>
          </div>
          <div>
          <p class="lateralFirma">Firmado digitalmente por: MINISTERIO DE DEFENSA NACIONAL <br>
          Organización: <br>
          Fecha firma : {{$datosGenerales['fechaActual']}}
           <p>
          </div>
          <div class="divFirma">
            <img class= "img_firma" src="{{$datosGenerales['firma']}}" alt="Logo" />
            <hr>
            <p class="frima">
            CR HERRERA RODRIGUEZ JIMMY ALEXANDER
            </p>
            <p class="frima">
            <strong>DIRECTOR DE PERSONAL DIPER FUERZA AEREA COLOMBIANA</strong>
            </p>
          </div>
          <div class="containerImgPie">
          <img class= "img_P1" src="{{$datosGenerales['firma']}}" alt="Logo" />
          <img class= "img_P2" src="{{$datosGenerales['firma']}}" alt="Logo" />
          <img class= "img_P3" src="{{$datosGenerales['firma']}}" alt="Logo" />
          </div>        
          </td>          
        </tr>           
     </table>
  </body>
</html>