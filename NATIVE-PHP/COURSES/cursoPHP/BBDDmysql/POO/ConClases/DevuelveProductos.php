<?php

    require "Conexion.php";

    class DevuelveProductos extends Conexion{

        //Constructor
        public function DevuelveProductos(){
            parent::Conexion(); //ejecutamos el const de la Clase Conexion
        }
    
        public function get_productos($dato){

            $resultado=$this->conexion_db->query('SELECT * FROM ARTÍCULOS WHERE PAÍSDEORIGEN="' . $dato . '"');

            echo $resultado;
            
            $productos = $resultado->mysqli_fetch_all();

            return $productos;  
        }
    }
?>