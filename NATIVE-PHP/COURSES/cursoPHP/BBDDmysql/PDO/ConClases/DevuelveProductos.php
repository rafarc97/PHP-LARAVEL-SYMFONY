<?php

    require "Conexion.php";

    class DevuelveProductos extends Conexion{

        //Constructor
        public function DevuelveProductos(){
            parent::Conexion(); //ejecutamos el const de la Clase Conexion
        }
    
        public function get_productos($dato){

            $sql = "SELECT * FROM ARTÍCULOS WHERE PAÍSDEORIGEN='" . $dato . "'";

            $sentencia = $this->conexion_db->prepare($sql);

            $sentencia->execute(array());

            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

            $sentencia->closeCursor();

            return $resultado;

            $this->conexion_db = null;
        }
    }
?>