<?php 
 require_once '../modelo/core.modelo.php';

    $objCore = new CoreModelo();
  

    switch ($_POST['accion']) {
        case 'Registrar':   
            $idtipodocumento= $_POST["idtipodocumento"];
            $idEstudiante= $_POST["idEstudiante"];    
            $idNrdocumento= $_POST["idNrdocumento"];
            $idNombre= $_POST["idNombre"];
            $idApellido= $_POST["idApellido"];
            $idTelefono= $_POST["idTelefono"];
            $idDireccion= $_POST["idDireccion"];
            $location = '';

            if(!empty($_FILES['image'])){
		
                $image_name = $_FILES['image']['name'];
                $image_temp = $_FILES['image']['tmp_name'];
                $image_size = $_FILES['image']['size'];
                
                $exp = explode(".", $image_name);
                $ext = end($exp);

                $allowed_ext = array('jpg', 'jpeg', 'png');
                    
                if(in_array($ext, $allowed_ext)){
                    $image = time().'.'.$ext;
                    $location = "../upload/".$image;
                    if($image_size < 5242880){
                        move_uploaded_file($image_temp, $location);
                    }
                }
            }
            else{
                $location = "../upload/sinimagen.png";
            }

            
            $response = $objCore->setAll("set_Alumno",[$idEstudiante,$idtipodocumento,$idNrdocumento,$idNombre,$idApellido,$idTelefono,$idDireccion,$location],"Registrado correctamente");
            echo json_encode($response);
            break;
        case 'consultar':
            $result = $objCore->getAll("get_Alumno",['0']);
            echo json_encode($result);
            break;
        case 'Eliminar':   
            $idEstudiante= $_POST["idEstudiante"];
            $response = $objCore->setAll("set_EliminarAlumno",[$idEstudiante],"Eliminado Correctamente");
            echo json_encode($response);
            break;
            
    };
  

?>