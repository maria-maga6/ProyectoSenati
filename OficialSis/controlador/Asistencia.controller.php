<?php       
    require_once '../modelo/core.modelo.php';

    $objCore = new CoreModelo();
    switch ($_POST['accion']) {
        case 'leer':    
            $id = $_POST["id"];
            $hora= $_POST["hora"];
            $response = $objCore->setAll("set_leerAsistencia",[$id,$hora],"Registrado correctamente");
            echo json_encode($response);
            break;

        case 'consultar5ultima':
            $response = $objCore->getAll("get_Asistencia5ultima",[0]);
            echo json_encode($response);
            break;

        case 'consultar1ultima':            
            $response = $objCore->get("get_Asistencia1ultima",[0]);
            echo json_encode($response);
            break;
        case 'validacion':     
            $id = $_POST["id"];
            $hora= $_POST["hora"];       
            $response = $objCore->get("get_ValidacionesAsistencia",[$id,$hora]);
            echo json_encode($response);
            break;

            
    }
?>
