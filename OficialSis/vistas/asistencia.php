    
    <!DOCTYPE html>
    <html lang="ES">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Asistencia</title>
        <link href="library/imgs/icon.png" rel="icon">

        <link rel="stylesheet" href="library/css/style.css">
        <link href="library/css/sb-admin-2.min.css" rel="stylesheet">
  
    </head>
    <body>
      
    <div class="card">
      <div class="card-body">
        <div class="row">
        <div class="col-12 bg-white border-bottom-danger" >                         
                  <h1>Bienvenidos A CIRO ALEGRIA</h1>
                
              </div>  
        </div>
        <div >
        <div class="row" style="text-transform: uppercase; ">
                    
                    <div class="col-lg-4 col-md-6 divDatosPersonales">
                        <table class="table tableDatosPersonales" id="idDatosPersonales" >
                        </table> 
                    </div>
                    <div class="col-lg-4 col-md-6 divImgAlumno" id="imagenPrincipal">
                      
                    </div>
                    <div class="col-lg-4 col-md-12" style="text-align: center;">
                      <div class="divinputCarnet">
                        <a href="login.php">Login</a>
                        <input type="text" class="form-control inputcarnet" id="idIngresoCodigo" placeholder="INGRESAR CODIGO">    
                        <h2 id="fecha" style="font-size: 23px;"></h2> 
                      </div>
                    </div>
                    <div class="col-lg-12 divimagenesotros"  >                         
                    <div class="row" id="idDatosPersonalesAlumnos">                           
                    </div>
                    </div>             
                </div>
                </div>
              </div>
        </div>
       
      </div>
    </div>
    
</body>
</html>
<script src="library/vendor/jquery/jquery.min.js"></script>
<script src="script/oficialsis.js"></script>
<script>
    

      $(document).ready(function(){
        Mostrar5Ultimas();
        Mostrar1Ultimas();
        setInterval(() => {
          let fecha=new Date ();
          let fechaHora=fecha.toLocaleTimeString('it-IT');
          document.getElementById("fecha").textContent=fechaHora;
      
      }, 3000);
  
      //obteniendo el lector del codigo de barra
      $("#idIngresoCodigo").keydown(async function(event){
          //Validamos si la accion realizada fue enter o tab
          if (event.keyCode === 13 || event.keyCode === 9) {
            //validamos que el valor ingresado no este vacio
              if ($("#idIngresoCodigo").val() != '') {
                //validamos que la cantidad de caracter sea iguala 11
                if ($("#idIngresoCodigo").val().length == 11 ) {
                  $.ajax({
                            url:"../controlador/Asistencia.controller.php",
                            type:"POST",
                            async: true,
                            data:{
                              id:$("#idIngresoCodigo").val(),
                              hora:$("#fecha").text(),
                              accion:'validacion'
                            },
                            success:function(data){
                              var jsorsp = JSON.parse(data);
                              alert(jsorsp.rpt);
                              location.reload();

                            }
                          });
                }
                else  { alert('Codigo no valido')}
              }
            $("#idIngresoCodigo").val('');
          }
        });
      });
   
      //Mostrar los 5 ultimas marcaciones del dia
      function  Mostrar1Ultimas(){
        $.ajax({
                url:"../controlador/Asistencia.controller.php",
                type:"POST",
                data:{
                  accion:'consultar1ultima'
                },
                success:function(data){
                  var jsorsp = JSON.parse(data);
                  //idDatosPersonales
                  if(typeof(jsorsp) === "object"){
{}
                  var tr =  `<tr>
                                <td ><strong>NOMBRES</strong></td>
                                <td colspan="3"> <span> ` + jsorsp.nombres + `</span></td>
                            </tr>
                            <tr>
                                <td> <strong>APELLIDOS</strong></td>
                                <td colspan="3"> <span>  ` + jsorsp.apellidos + `</span></td>
                            </tr>
                            <tr>
                                <td> <strong>GRADO</strong></td>
                                <td> <span> ` + jsorsp.grado + `</span></td>
                                <td> <strong>SECCION</strong></td>
                                <td> <span>` + jsorsp.seccion + `</span></td>
                            </tr>
                         
                            <tr> 
                              <td colspan="4" style="  background: ` + (jsorsp.es == 'ENTRADA'?'green':'red') + `; text-align: center;" > <span style="color:white;font-weight: bold;">` + jsorsp.es + `</span></td>
                            </tr>`;
                  $('#idDatosPersonales').html(tr);
                  $('#imagenPrincipal').html('<img src="'+ jsorsp.img +'" class="imgAlumno" alt="">');
                }}
              });
    }
           //Mostrar la ultima Marcacion
      function  Mostrar5Ultimas(){
        $.ajax({
                url:"../controlador/Asistencia.controller.php",
                type:"POST",
                data:{
                  accion:'consultar5ultima'
                },
                success:function(data){
                  var jsorsp = JSON.parse(data);
                  //idDatosPersonales
                  var tr =  '<div class="col-1"></div>';
                  for (var item of jsorsp) {
                   var colorTardanza="";
                   var descTardanza="";
                    if (item.tardanza == 1)
                    {
                      colorTardanza = 'class="tardanza"';
                      descTardanza = "(TARDANZA)";
                    }

                   tr +=  ` 
                            
                            <div class="card col-2">
                              <table class="table tableDatosPersonalesotros"  >
                                  <tr>
                                    <td>
                                      <img src="${item.img}" class="subimgAlumno" alt="">
                                    </td>                          
                                  </tr>
                                  <tr>
                                    <td>`+item.nombres +`</td>
                                  </tr>
                                  <tr>
                                    <td ${colorTardanza}>`+item.horaregistro +`</td>
                                  </tr>
                                  <tr>
                                    <td colspan="4" style="  background: ` + (item.es == 'ENTRADA'?'green':'red') + `; text-align: center;" > <span style="color:white;font-weight: bold;">` + item.es + `</span></td>                            
                                  </tr>
                              </table>                                
                              <label>  </label>
                              <label> </label>
                            </div> `;
                  }
                  $('#idDatosPersonalesAlumnos').html(tr);
                }
              });
      }
  </script>