<?php 
 require_once '../modelo/core.modelo.php';

    $objCore = new CoreModelo();
  

    switch ($_POST['accion']) {
        case 'Registrar':   
            $idPeriodosp= $_POST["idPeriodosp"];
            $idanioEstudiop= $_POST["idanioestudio"];    
            $idfechaIniciop= $_POST["idfechaI"];
            $idfechaFinp = $_POST["idfechaF"];
            $idhoraEntradap= $_POST["idhoraE"];
            $idhoraSalidap= $_POST["idhoraS"];
            $idestadop = 0;
         
            $response = $objCore->setAll("set_Periodo",[$idPeriodosp,$idanioEstudiop,$idfechaIniciop,$idfechaFinp,$idhoraEntradap,$idhoraSalidap,$idestadop],"Registrado correctamente");
            echo json_encode($response);
            break;
        case 'consultar':
            $result = $objCore->getAll("get_Periodo",['1']);
            echo json_encode($result);
            break;
        case 'Eliminar':   
            $idPeriodosp= $_POST["idPeriodosp"];
            $response = $objCore->setAll("set_EliminarPeriodo",[$idPeriodosp],"Eliminado Correctamente");
            echo json_encode($response);
            break;
            
    };
  

?>