<?php       
    require_once '../modelo/core.modelo.php';

    $objCore = new CoreModelo();
    switch ($_POST['accion']) {
        case 'consultar':
            $response = $objCore->get("get_Dashboard",[0]);
            echo json_encode($response);
            break;
    }
?>
