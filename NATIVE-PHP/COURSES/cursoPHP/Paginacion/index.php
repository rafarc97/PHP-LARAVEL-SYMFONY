<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        try{
            $base = new PDO("mysql:host=localhost; dbname=productos", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");

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

            $sql_total = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM artículos WHERE SECCIÓN = 'DEPORTE'"; 
            $resultado = $base->prepare($sql_total);
            $resultado->execute(array());

            $num_filas = $resultado->rowCount(); //filas que devuelve la inst sql
            $total_paginas = ceil($num_filas / $tam_paginas); //ceil redondea

            echo "Número de registros de la consulta: " . $num_filas . "<br>";
            echo "Mostramos " . $tam_paginas . " registros por página <br>";
            echo "Mostrando la página" . $pagina . " de " . $total_paginas . "<br><br>";

            $resultado->closeCursor();

            $sql_limite = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM artículos WHERE SECCIÓN = 'DEPORTE' LIMIT $empezar_desde,$tam_paginas";

            $resultado = $base->prepare($sql_limite);
            $resultado->execute(array());

            while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
                echo "Nombre Artículo: " . $registro["NOMBREARTÍCULO"] . " Sección: " . $registro["SECCIÓN"] . " Precio: " . $registro["PRECIO"] . " País de Origen: " . $registro["PAÍSDEORIGEN"] . "<br>"; 
            }

            echo "<br>";
        }catch(Exception $e){
            echo "Línea de error: " . $e->getLine();
        }


        // PAGINACIÓN

        for($i = 1; $i <= $total_paginas; $i++){
            echo "<a href='?pagina= " . $i . "'>" . $i . "</a> ";
        }
    ?>
    
</body>
</html>