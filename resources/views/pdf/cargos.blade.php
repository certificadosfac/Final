<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 2</title>

    <style type="text/css">

      .escudo{
        width: 80px; 
        height: 80px;
        margin-top: -1%;        
      }
      .img_firma{
        width: 350px; 
        height: 90px;
      }
      h5, h4{
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
        margin-top: 5%;  
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
        font-size: 15px;      
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
        width:65%;
        height:80px;
      }

      .containerImgPie{
        margin-left: 18%;
        margin-top: 2%;
      }
      
      th{
        border-bottom-style: solid;
        border-collapse: collapse;
        text-align: left;
      }

      .table1{
        border-bottom-style: solid;
        border-collapse: collapse;       
        width:105%;
      }

      .thSinBorde{
        border-left-style: none;
      }

      .thSinBorde1{
        border-right-style: none;
      }

      .nota{
        font-size: 10px;
        text-align: justify;
        margin-left:11%;
      }

      .expide{
        margin-left:11%;
      }

      .generado{
        font-size: 9px;
        color:#CACBCB;
        margin-left:11%;
        margin-top:6%;
      }

      td{
        font-size: 10px;
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
          <img class="imgCode" src="data:image/png;base64,{{DNS2D::getBarcodePNG('SzJ yAQV feIY Lqe9 9Gfz P7mm 63Y=', 'PDF417')}}" alt="Bacode" />
          <p class="lateralCode">Identificador : 9SzJ yAQV feIY Lqe9 9Gfz P7mm 63Y= (Válido indefinidamente)<p>
          <h5 style="margin-top: -20%;"></h5>
          <br>
          <h5 style="margin-top: -9%;"> FUERZA AEREA COLOMBIANA</h5>
          <h5 style="margin-top: -20%;"></h5>
          <br>
          <h5 style="margin-top: -8%;">EL (LA) SUSCRITO(A) DIRECTOR DE PERSONBAL DIPER</h5>
          <br>
          <h4 style="margin-top: -4.5%;">HACE CONSTAR</h4>
          <p class="texto">
            Que el(la) Señor(a)(ita) (grado) (funcion) identificado con CC No. 000000000000. ingresó a FUERZA AEREA COLOMBIANA
            desde el 06-06-2012 y a la fecha desempeñó los siguientes cargos, así:
          </p>                    
          </div>

          <div style="margin-left: 7%;"> 
            <table class="table1 center">
              <tr>
              <th>GR</th>
              <th>CARGO</th>
              <th>UNIDAD DEPENDENCIA</th>
              <th>INICIO</th>
              <th>TERMINO</th>
              </tr>     
              <tr>
              <td>TA21</td> 
              <td>TECNICO EN SISTEMAS</td>
              <td>DIRECCION DE TECNOLOGIAS DE LA INFORMACION ANALISTA DE REQUERIMIENTOS</td>
              <td>01-02-2013</td>
              <td>06-06-2016 </td>
              </tr>
              <tr>
              <td>TA21</td> 
              <td>TECNICO EN SISTEMAS</td>
              <td>DIRECCION DE TECNOLOGIAS DE LA INFORMACION ANALISTA DE REQUERIMIENTOS</td>
              <td>01-02-2013</td>
              <td>06-06-2016 </td>
              </tr>
              <tr>
              <td>TA21</td> 
              <td>TECNICO EN SISTEMAS</td>
              <td>DIRECCION DE TECNOLOGIAS DE LA INFORMACION ANALISTA DE REQUERIMIENTOS</td>
              <td>01-02-2013</td>
              <td>06-06-2016 </td>
              </tr>
              <tr>
              <td>TA21</td> 
              <td>TECNICO EN SISTEMAS</td>
              <td>DIRECCION DE TECNOLOGIAS DE LA INFORMACION ANALISTA DE REQUERIMIENTOS</td>
              <td>01-02-2013</td>
              <td>06-06-2016 </td>
              </tr>
              <tr>
              <td>TA21</td> 
              <td>TECNICO EN SISTEMAS</td>
              <td>DIRECCION DE TECNOLOGIAS DE LA INFORMACION ANALISTA DE REQUERIMIENTOS</td>
              <td>01-02-2013</td>
              <td>06-06-2016 </td>
              </tr>
              <tr>
              <td>TA21</td> 
              <td>TECNICO EN SISTEMAS</td>
              <td>DIRECCION DE TECNOLOGIAS DE LA INFORMACION ANALISTA DE REQUERIMIENTOS</td>
              <td>01-02-2013</td>
              <td>06-06-2016 </td>
              </tr>
              <tr>
              <td>TA21</td> 
              <td>TECNICO EN SISTEMAS</td>
              <td>DIRECCION DE TECNOLOGIAS DE LA INFORMACION ANALISTA DE REQUERIMIENTOS</td>
              <td>01-02-2013</td>
              <td>06-06-2016 </td>
              </tr>
              <tr>
              <td>TA21</td> 
              <td>TECNICO EN SISTEMAS</td>
              <td>DIRECCION DE TECNOLOGIAS DE LA INFORMACION ANALISTA DE REQUERIMIENTOS</td>
              <td>01-02-2013</td>
              <td>06-06-2016 </td>
              </tr>
              <tr>
              <td>TA21</td> 
              <td>TECNICO EN SISTEMAS</td>
              <td>DIRECCION DE TECNOLOGIAS DE LA INFORMACION ANALISTA DE REQUERIMIENTOS</td>
              <td>01-02-2013</td>
              <td>06-06-2016 </td>
              </tr>
              <tr>
              <td>TA21</td> 
              <td>TECNICO EN SISTEMAS</td>
              <td>DIRECCION DE TECNOLOGIAS DE LA INFORMACION ANALISTA DE REQUERIMIENTOS</td>
              <td>01-02-2013</td>
              <td>06-06-2016 </td>
              </tr>
              
              
            </table> 
            <br>                      
          </div>
          <p class="nota">Los datos aquí contenidos son los registros en su historial laboral. Se expide la presente constancia.
            Dada a los 21 días del mes de agosto de 2020 en la ciudad de Bogotá D.C. Caducidad 30 días a partir de la fecha.</p>
          <div>
          <p class="lateralFirma">Firmado digitalmente por: MINISTERIO DE DEFENSA NACIONAL <br>
          Organización: <br>
          Fecha firma : {{$datosGenerales['fechaActual']}}
           <p>           
          </div>
            <br><br><br> <br><br><br>       
          <div class="divFirma">            
            <hr>
            <p class="frima">
            CR _________________________________________
            </p>
            <p class="frima">
            <strong>DIRECTOR DE PERSONAL DIPER FUERZA AEREA COLOMBIANA</strong>
            </p>
          </div>
          <p class="generado">Generado por: https://webapp.mindefensa.gov.co/,sUvLvQVkb9</p>
          <div class="containerImgPie">          
          <img class= "img_P3" src="{{$datosGenerales['fotoPie']}}" alt="Logo" />
          </div>        
          </td>          
        </tr>           
     </table>
  </body>
</html>