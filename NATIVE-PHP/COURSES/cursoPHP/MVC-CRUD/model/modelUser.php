<?php

    class modelUser{

        private $db;
        private $users;

        public function __construct(){
            require_once("model/connect.php");
            $this->db = Connect::connection();
            $this->users = array();
        }

        public function getUsers(){

            require("paginacion.php");

            $consulta = $this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde,$tam_paginas");

            while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
                $this->users[]=$filas;
            }
            return $this->users;
        }
    }

?>