<?php

    require_once __DIR__.'/../core/model.master.php';
    // require_once

    class CoreModelo extends ModelMaster{


        private $pdo;

        function __construct(){
            $this->pdo = parent::getConexion();
        }
        //Get trae un solo registro 
        // OBTENER - BUSCAR
        function get($spu,$parameters){

            try{

                // CANTIDAD DE PARAMETROS
                $cant = $this->getCantParameters($parameters);
                // REEMPLAZAMOS VACIOS POR NULOS
                $array = $this->ReplaceEmpty($parameters);

                $comando = $this->pdo->prepare("call {$spu} ($cant)");
                $comando->execute(
                    $array
                );

                return $comando->fetch(PDO::FETCH_OBJ);

            }catch(Exception $e){
                die($e->getMessage());
            }

        }
        //Get all trae varios registros
        // LISTAR
        function getAll($spu,$parameters){

            try{

                // CANTIDAD DE PARAMETROS
                $cant = $this->getCantParameters($parameters);
                // REEMPLAZAMOS VACIOS POR NULOS
                $array = $this->ReplaceEmpty($parameters);
               
                $comando = $this->pdo->prepare("call {$spu} ($cant)");
                $comando->execute(
                    $array
                );
               
                return $comando->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){
                die($e->getMessage());
            }

        }

        
        // REGISTRAR - MODIFICAR - ELIMINAR
        function setAll($spu,$parameters,$mensaje){

            $response = array();

            try{

                // CANTIDAD DE PARAMETROS
                $cant = $this->getCantParameters($parameters);
                // REEMPLAZAMOS VACIOS POR NULOS
                $array = $this->ReplaceEmpty($parameters);

                $comando = $this->pdo->prepare("call {$spu} ($cant)");
                $comando->execute(
                    $array
                );

                $response["success"]  = true;
                $response["rpt"]  =     $mensaje;
                // return $comando->fetchAll(PDO::FETCH_OBJ);

            }catch(Exception $e){
                $response["success"]  = false;
                $response["rpt"]  = $e->getMessage();
            }

            return $response;

        }



        # FUNCIONES EXTRAS

                // OBTIENE LA CANTIDAD DE PARAMETROS Y LOS CONVIERTE
                function getCantParameters($array){
                        
                    $response = array();

                    if($array != null){
                        for($i = 0; $i < count($array);$i++){
                            $response[] = "?";
                        }
            
                        return implode(",",$response);
                    }else{
                        return "";
                    }
                    
                } 

                // REEMPLAZA VACIOS
                function ReplaceEmpty($array){

                    $array2 = $array;
        
                    for($i = 0; $i < count($array);$i++){
                        if($array2[$i] == ""){
                            $array2[$i] = null;
                        }
                    }
        
                    return $array2;
                }

            #endregion


    }



?>