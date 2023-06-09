<?php 
 require_once '../modelo/core.modelo.php';

    $objCore = new CoreModelo();
  

    switch ($_POST['accion']) {
        case 'Registrar':   
            $idusuario= $_POST["idusuario"];
            $idUsuarioN=$_POST["idUsuarioN"];
            $idcontra= $_POST["idcontra"];    
            $idtipousuario=$_POST["idtipousuario"];
            $idpersona=$_POST["idpersona"];   
      

            
            $response = $objCore->setAll("set_Usuario",[$idusuario,$idUsuarioN,$idcontra,$idtipousuario,$idpersona],"Registrado correctamente");
            echo json_encode($response);
            break;
        case 'consultar':
            $result = $objCore->getAll("get_Usuario",['0']);
            echo json_encode($result);
            break;
        case 'Eliminar':   
            $idEstudiante= $_POST["idUsuario"];
            $response = $objCore->setAll("set_EliminarUsuario",[$idusuario],"Eliminado Correctamente");
            echo json_encode($response);
            break;
            
    };
  

?>