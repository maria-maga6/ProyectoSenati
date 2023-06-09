<?php 
 require_once '../modelo/core.modelo.php';

    $objCore = new CoreModelo();
  

    switch ($_POST['accion']) {
        case 'Registrar':   
            $idtipodocumento= $_POST["idtipodocumento"];
            $idprofesor= $_POST["idprofesor"];    
            $idNrdocumento= $_POST["idNrdocumento"];
            $idNombre= $_POST["idNombre"];
            $idApellido= $_POST["idApellido"];
            $idTelefono= $_POST["idTelefono"];
            $idDireccion= $_POST["idDireccion"];
            $idEspecialidad= $_POST["idEspecialidad"];
            $response = $objCore->setAll("set_Docente",[$idprofesor,$idtipodocumento,$idNrdocumento,$idNombre,$idApellido,$idTelefono,$idDireccion,$idEspecialidad],"Registrado correctamente");
            echo json_encode($response);
            break;
        case 'consultar':
            $result = $objCore->getAll("get_Docente",['1']);
            echo json_encode($result);
            break;
        case 'Eliminar':   
            $idprofesor= $_POST["idprofesor"];
            $response = $objCore->setAll("set_EliminarDocente",[$idprofesor],"Eliminado Correctamente");
            echo json_encode($response);
            break;
            
    };
  

?>