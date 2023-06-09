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
            $fechaFiltro= $_POST["fechaFiltro"];
            $esFiltro= $_POST["esFiltro"];
            $gradoFiltro= $_POST["gradoFiltro"];
            $seccionFiltro= $_POST["seccionFiltro"];
            $result = $objCore->getAll("get_Asistencia",[$fechaFiltro,$esFiltro,$gradoFiltro,$seccionFiltro]);
            echo json_encode($result);
            break;
        case 'Eliminar':   
            $idEstudiante= $_POST["idUsuario"];
            $response = $objCore->setAll("set_EliminarUsuario",[$idusuario],"Eliminado Correctamente");
            echo json_encode($response);
            break;
            
    };
  

?>