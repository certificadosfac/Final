<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 2</title>

    <style type="text/css">

      .escudo{
        width: 80px; 
        height: 80px;
        
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
        margin-top: 100px;  
      }
      .td1{
        width:10%;
        text-align: left;
      }
      .td2{
        width:90%;
      }

      .imgCode{
        width:60%;
        height:380px;
        margin-left: -40%;
      }

      .lateral{
        writing-mode: vertical-lr;
        transform: rotate(270deg);
        width:800%;
        margin-top: 27%;
        margin-left: -395%;
        font-size: 12px;

      }

      .lateralCode{
        writing-mode: vertical-lr;
        transform: rotate(270deg);
        font-size: 11px;
        margin-top: -29%;
        width:700%;
        margin-left: -310%;
      }

    </style>
    
  </head>
  <body>
    <table>
      <tr>
        <td class="td1">
        <table>
              <tr>
                <td>
                <img class= "imgCode" src="{{$base64Code}}" alt="Logo" />
                <div class="lateralCode">Identificador : 9SzJ yAQV feIY Lqe9 9Gfz P7mm 63Y= (Válido indefinidamente)<div>                
                </td>                
              </tr>
              <tr>
                <td>
                <div class="lateral">Firmado digitalmente por: MINISTERIO DE DEFENSA NACIONAL<div>
                <div class="lateral2">Organización:<div>
                <div class="lateral3">Fecha firma : 01/08/2020 18:27:18<div>
                </td>
                
              </tr>
          </table>  
          
        </td>
        <td class="td2">         
          <div>
              <h5 class="h5titulo">
              REPUBLICA DE COLOMBIA <br>
              MINISTERIO DE DEFENSA NACIONAL
              </h5>
          </div>
          <div class="divescudo">    
            <img class= "escudo" src="{{$base64Logo}}" alt="Logo" />
          </div>
          <h5>FUERZA AEREA COLOMBIANA</h5>
          <br>
          <h5>CERTIFICACION UNIDAD LABORAL ACTUAL</h5>
          <br>
          <p>
          EL (LA) SUSCRITO(A) DIRECTOR DE PERSONAL DIPER de la (el) FUERZA AEREA
          COLOMBIANA, hace constar que una vez verificada la base de datos del Sistema de
          Información para la Administración del Talento Humano (SIATH), certifica que el(la)
          Señor(a)(ita) Civil ASD2 VALIENTE PAIPA OLGA CONSTANZA identificado con cc.
          52097124 expedida en BogotÁ, distrito capital (Cundinamarca), se escalafonó en la (el)
          FUERZA AEREA COLOMBIANA como Civil el 02 Enero 2002, mediante Orden Administrativa
          De Personal Fac No. 025 del 31 Diciembre 2001, registra como la última unidad laborada en
          el lapso 26 Marzo 2018 a la fecha, en el (la) CDO-FAC.JEMFA.CAF.JETIC.DIASI
          SUBDIRECCION DESARROLLO DE SOFTWARE, ubicado en la ciudad de BogotÁ, Distrito
          Capital (Cundinamarca), ostentando el cargo de Asesor Sistemas. 
          </p>
          <br>
          <p>
          Se expide la presente constancia. Dada a los 01 días del mes de Agosto de 2020 en la ciudad
            de Bogotá D.C.
          </p>
          <div class="divFirma">
            <img class= "img_firma" src="{{$base64Firma}}" alt="Logo" />
            <hr>
            <p class="frima">
            CR HERRERA RODRIGUEZ JIMMY ALEXANDER
            </p>
            <p class="frima">
            <strong>DIRECTOR DE PERSONAL DIPER FUERZA AEREA COLOMBIANA</strong>
            </p>
          </div>        
          </td>          
        </tr>           
     </table>
  </body>
</html>