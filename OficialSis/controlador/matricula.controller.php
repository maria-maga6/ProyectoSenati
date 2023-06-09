<?php 
 require_once '../modelo/core.modelo.php';

    $objCore = new CoreModelo();
  

    switch ($_POST['accion']) {
        case 'Registrar':   
            $idestudiante= $_POST["idEstudiante"];
            $idgradoyseccion= $_POST["idgradoyseccion"];  
            $idfechaM= $_POST["idfechaM"];
         
            $response = $objCore->setAll("set_Matricula",[$idestudiante,$idgradoyseccion,$idfechaM],"Registrado correctamente");
            echo json_encode($response);
            break;
       
            
    };
  

?>