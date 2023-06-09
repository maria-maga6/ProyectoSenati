<?php 
 require_once '../modelo/core.modelo.php';

    $objCore = new CoreModelo();
    
    $usuario = $_POST["usuario"];
    $contra  = $_POST["contra"];
    
    $response = $objCore->get("get_loggin",[$usuario,$contra]);
    echo json_encode($response);

?>