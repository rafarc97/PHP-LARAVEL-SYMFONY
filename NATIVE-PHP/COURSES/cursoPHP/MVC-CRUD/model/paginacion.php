<?php

    require_once("connect.php");
    
    $base= Connect::connection();

    $tam_paginas = 3; //registros/pag

    if(isset($_GET["pagina"])){
        if($_GET["pagina"] == 1){
            header("location: index.php");
        }else{
            $pagina = $_GET["pagina"];
        }
    }else{
        $pagina = 1; //pag actual en la que nos encontramos
    }

    $empezar_desde = ($pagina - 1) * $tam_paginas; //al cargar calcula de x a y registros que carga

    $sql_total = "SELECT * FROM datos_usuarios"; 
    $resultado = $base->prepare($sql_total);
    $resultado->execute(array());

    $num_filas = $resultado->rowCount(); //filas que devuelve la inst sql
    $total_paginas = ceil($num_filas / $tam_paginas); //ceil redondea


?>