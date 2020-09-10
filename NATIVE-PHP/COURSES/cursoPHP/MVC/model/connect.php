<?php

    class Connect{

        public static function connection(){
            try{
                $conexion = new PDO('mysql:host=localhost; dbname=productos','root','');
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET CHARACTER SET utf8");
            }catch(Exception $e){
                die('Error.' . $e->getMessage()) . "<br><br>";
                echo "Línea del error" . $e->getLine();
            }
            return $conexion;
        }
    }

?>