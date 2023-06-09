<?php 
 require_once '../modelo/core.modelo.php';

    $objCore = new CoreModelo();
  

    switch ($_POST['accion']) {
        
        case 'consultar':
            $result = $objCore->getAll("get_Aulaseccion",['1']);
            echo json_encode($result);
            break;
     
            
    };
  

?>