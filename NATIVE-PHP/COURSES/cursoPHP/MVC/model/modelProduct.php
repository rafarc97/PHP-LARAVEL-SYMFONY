<?php

    class modelProduct{

        private $db;
        private $productos;

        public function __construct(){
            require_once("model/connect.php");
            $this->db = Connect::connection();
            $this->productos = array();
        }

        public function getProductos(){
            $consulta = $this->db->query("SELECT * FROM artículos");

            while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
                $this->productos[]=$filas;
            }
            return $this->productos;
        }
    }

?>