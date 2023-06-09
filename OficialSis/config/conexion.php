<?php

    class Conexion{

        private $host       =   "localhost";
        private $dbname     =   "sistemcipru";
        private $user       =   "root";
        private $pass       =   "";
        private $charset    =   "utf8";

        public function Conectar(){
            try{
                $cn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=".$this->charset,$this->user,$this->pass);
                return $cn;
            }catch(Exception $e){
                die($e->getMessage());
            }

        }

    }
?>