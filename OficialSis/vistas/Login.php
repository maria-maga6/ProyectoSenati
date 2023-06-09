<!doctype html>
<html lang="en">

<head>
  <title>SISIEC - LOGIN </title>
  <link href="library/imgs/icon.png" rel="icon">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="library/css/style.css">

</head>

<body class="bodylogin  imgfondologin" >
  <div class="boxlogin">
    <div class="formlogin">
      <h2>Inicie Sesion</h2>
      <div class="inputBoxlogin">
        <input type="text" required="required" id="idusuario">
        <i></i>
      </div>
      <div class="inputBoxlogin">
        <input  type="password" required="required" id="idcontra">
        <i></i>
      </div>
      <div class="linkslogin">
        <a href="#">¿Olvidaste tu Contraseña?</a>
      </div>
      <input type="submit" value="Ingresar" onclick="logeo()">

    </div>
  </div>
</body>
</html> 

<script src="library/vendor/jquery/jquery.min.js"></script>
<script src="script/oficialsis.js"></script>
<script>
function logeo(){
  $.ajax({
          url:"../controlador/logincontroller.php",
          type:"POST",
          data:{
            usuario:$("#idusuario").val(),
            contra:$("#idcontra").val()
          },
          success:function(data){
            var jsorsp = JSON.parse(data);
            if (jsorsp.estado == 0 )
            {
              alert(jsorsp.msj);
            }
            else  {
              window.location.href = "index.php";
            }


          }
        });
}

  
</script>