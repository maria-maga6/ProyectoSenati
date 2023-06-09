<?php 
 require_once '../modelo/core.modelo.php';

    $objCore = new CoreModelo();
  

    switch ($_POST['accion']) {
        case 'Registrar':   
            $idPermiso= $_POST["idPermiso"];
            $idtipopermiso= $_POST["idtipopermiso"];    
            $idmatricula= $_POST["idmatricula"];
            $idmotivo = $_POST["idmotivo"];
            $idfechapermiso= $_POST["idfechapermiso"];
            $idHorapermiso= $_POST["idHorapermiso"];
            $entrada_salida = $_POST["entrada_salida"];
         
            $response = $objCore->setAll("set_Permiso",[$idPermiso,$idtipopermiso,$idmatricula,$idmotivo,$idfechapermiso,$idHorapermiso,$entrada_salida],"Registrado correctamente");
            echo json_encode($response);
            break;
        case 'consultar':
            $result = $objCore->getAll("get_Permiso",['1']);
            echo json_encode($result);
            break;
        case 'Eliminar':   
            $idPeriodosp= $_POST["idPeriodosp"];
            $response = $objCore->setAll("set_EliminarPeriodo",[$idPeriodosp],"Eliminado Correctamente");
            echo json_encode($response);
            break;
            
    };
  

?>