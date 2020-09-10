<?php

    /* 
    Ejercicio 1. Crear una sesión que aumente su valor en uno o disminuya en uno 
    enf función de si el parámetros get counter está a uno o a cero.
     */


     session_start();

     if(!isset($_SESSION['numero'])){
         $_SESSION['numero'] = 0;
     }
     if(isset($_GET['counter']) && $_GET['counter'] == 1){
        $_SESSION['numero']++;
     }
     if(isset($_GET['counter']) && $_GET['counter'] == 0){
        $_SESSION['numero']--;
    }


?>

<h1>El valor de la sesión número es: <?= $_SESSION['numero']?></h1>
<a href="ej1.php?counter=1">Aumentar el valor</a>
<a href="ej1.php?counter=0">Disminuir el valor</a>