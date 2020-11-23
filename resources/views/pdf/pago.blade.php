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
     
      .frima{        
        font-size: 12px;
        text-align: center;
      }
      .divFirma{
        text-align: center;
        margin-top: -2%;  
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
        margin-top: -72%;
        margin-left: -125%;
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
        margin-left: 14%;
        margin-top: 1%;
      }
      
      th{        
        border-collapse: collapse;
        text-align: left;
        border-top-style: solid;
        border-bottom-style: solid;
       
      }

      .table1{       
        border-collapse: collapse;       
        width:100%;
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
        margin-left:0%;
        margin-top:17%;
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

      .hr1{
        width: 120px;
        margin-left: 80%;
        margin-bottom: -2%;
      }

      .hr2{
        width: 120px;
        margin-right: 55%;
      }

      .table2{
        width:40%;
        border: 1px solid black;
      }

      .divtableembargo{   
        margin-top:-36.6%;
        margin-left:40%;        
      }

      .tableembargo{
        border-collapse: collapse;       
        width:100%;
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
          <h5 style="margin-top: -9%;"> FUERZA AEREA COLOMBIANA</h5>
          <h5 style="margin-top: -20%;"></h5>
          <br>
          <h5 style="margin-top: -8%;">EL (LA) señor(A) DIRECTOR DE PERSONBAL DIPER</h5>
          <br>
          <h4 style="margin-top: -4.5%;">HACE CONSTAR</h4>
          <p class="texto">
          Que el(la) Señor(a) T- _______________________________________, identificado con CC No. _____________________
          y código militar ________________ está en la nómina mensual activos del mes de Agosto del 2020 y le figura 
          la siguiente información: 
          </p>                    
          </div>

          <div style="margin-left: 11%;"> 
            <table class="table1 center">
              <tr>
              <th style="border-left-style: solid">DEVENGADO</th>
              <th>PORCE</th>
              <th>VALOR</th>
              <th>DESCUENTO</th>
              <th>COD.</th>
              <th>INICIO</th>
              <th>TERMINO</th>
              <th style="border-right-style: solid">VALOR</th>
              </tr>     
              <tr>
              <td>AUXCONECTDIGITAL</td> 
              <td>49.5</td>
              <td>$000.000.00</td>
              <td>PREVISORASUB</td>
              <td>1283</td>
              <td>202012</td>
              <td>202110</td>
              <td>$000.000.0</td>
              </tr>
              <tr>
              <td>AUXCONECTDIGITAL</td> 
              <td>49.5</td>
              <td>$000.000.00</td>
              <td>PREVISORASUB</td>
              <td>1283</td>
              <td>202012</td>
              <td>202110</td>
              <td>$000.000.0</td>
              </tr>
              <tr>
              <td>AUXCONECTDIGITAL</td> 
              <td>49.5</td>
              <td>$000.000.00</td>
              <td>PREVISORASUB</td>
              <td>1283</td>
              <td>202012</td>
              <td>202110</td>
              <td>$000.000.0</td>
              </tr>
              <tr>
              <td>AUXCONECTDIGITAL</td> 
              <td>49.5</td>
              <td>$000.000.00</td>
              <td>PREVISORASUB</td>
              <td>1283</td>
              <td>202012</td>
              <td>202110</td>
              <td>$000.000.0</td>
              </tr>
              <tr>
              <td>AUXCONECTDIGITAL</td> 
              <td>49.5</td>
              <td>$000.000.00</td>
              <td>PREVISORASUB</td>
              <td>1283</td>
              <td>202012</td>
              <td>202110</td>
              <td>$000.000.0</td>
              </tr>
              <tr>
              <td>AUXCONECTDIGITAL</td> 
              <td>49.5</td>
              <td>$000.000.00</td>
              <td>PREVISORASUB</td>
              <td>1283</td>
              <td>202012</td>
              <td>202110</td>
              <td>$000.000.0</td>
              </tr>
              <tr>
              <td>AUXCONECTDIGITAL</td> 
              <td>49.5</td>
              <td>$000.000.00</td>
              <td>PREVISORASUB</td>
              <td>1283</td>
              <td>202012</td>
              <td>202110</td>
              <td>$000.000.0</td>
              </tr>
              <tr>
              <td>AUXCONECTDIGITAL</td> 
              <td>49.5</td>
              <td>$000.000.00</td>
              <td>PREVISORASUB</td>
              <td>1283</td>
              <td>202012</td>
              <td>202110</td>
              <td>$000.000.0</td>
              </tr>
            </table>             
            <br>
            <br>
            <hr class="hr1">
            <hr class="hr2">
            <table class="table1 center">
              <tr>
                <td style=" font-size: 10;">
                <strong>TOTAL DEVENGADOS: 0.000.000.00</strong>
                </td>
                <td style=" font-size: 10;">
                <strong>TOTAL DESCUENTOS: </strong>
                </td>
                <td style="text-align: left;">
                  000.00
                </td>
              </tr>
            </table> 
            <br>
            <div>
            <div>
            <table class="table2">
              <tr>
                <td style=" font-size: 11; border-bottom-style: solid"><strong>RESUMEN</strong></td>
                <td></td>                
              </tr>              
              <tr>
                <td style=" font-size: 11;">TOTAL DEVENGADO</td>
                <td>$0,000,000.00</td>                
              </tr>
              <tr>
                <td style=" font-size: 11;">TOTAL DESCUENTOS</td>
                <td>$000,000.00</td>                
              </tr>
              <tr>
                <td style=" font-size: 11;">&nbsp;</td>
                <td>&nbsp;</td>                
              </tr>
              <tr>
                <td style=" font-size: 11;">&nbsp;</td>
                <td style="border-bottom-style: solid">&nbsp;</td>                
              </tr>
              <tr>
                <td style=" font-size: 11;"><strong>NETO A PAGAR</strong></td>
                <td><strong>$0,000,000.00</strong></td>                
              </tr>
            </table>
            </div>
            <div  class="divtableembargo">
            <table class="tableembargo">
              <tr>
                <th style=" font-size: 11; border: 1px solid black; border-left-style: solid;"><strong>EMBARGO</strong></th>
                <th style=" font-size: 11; border: 1px solid black;"><strong>INICIO</strong></th>
                <th style=" font-size: 11; border: 1px solid black;"><strong>TERMINO</strong></th>
                <th style=" font-size: 11; border: 1px solid black; border-right-style: solid;"><strong>VALOR</strong></th>
              </tr> 
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </table>
            </div>                    
          </div>
          <p class="nota">Nota: Con de determinar la capacidad de endeudamiento para el descuento por libranza,
          el sector Cooperativo y bancario debe tener en cuenta la normatividad establecida en la ley 15 27 de 
          012 y el código sustantivo del Trabajo, por lo cual no serán autorizados descuentos que afecten el mínimo 
          vital del funcionario, una vez efectuados los descuentos de Ley y Órdenes Judiciales.</p>

          <p style="font-size: 13px;">Se expide en Bogotá D.C. al (los) 21 días del mes de Agosto del 2020</p>

          <div>
          <p class="lateralFirma">Firmado digitalmente por: MINISTERIO DE DEFENSA NACIONAL <br>
          Organización: <br>
          Fecha firma : {{$datosGenerales['fechaActual']}}
           <p>           
          </div>
            <br><br><br> <br><br><br>       
          <div class="divFirma">            
            <hr style="width: 50%;">
            <p class="frima">
            TC _________________________________________
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