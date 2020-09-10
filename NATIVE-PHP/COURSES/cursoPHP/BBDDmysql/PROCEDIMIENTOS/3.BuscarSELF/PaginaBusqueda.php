<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        function ejecuta_consulta($labusqueda){

            //Almacena en $busqueda lo que se le pasa por la URL
            $busqueda = $_GET["buscar"];

            require("../datosConexion.php");

            $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

            if(mysqli_connect_errno()){
                echo"Fallo al conectar con la BBDD";
                exit();
            }

            mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

            mysqli_set_charset($conexion,"utf8");

            $consulta="SELECT * FROM ARTÍCULOS WHERE NOMBREARTÍCULO LIKE '%$labusqueda%'";

            $resultados = mysqli_query($conexion,$consulta);

            $fila=mysqli_fetch_row($resultados);

            //FORMA ASOCIATIVA
            while($fila=mysqli_fetch_assoc($resultados)){

                echo "<table width = '50%' align='center' border = '1'><tr><td>";

                echo $fila['SECCIÓN'] . " </td><td> ";
                echo $fila['NOMBREARTÍCULO'] . " </td><td> ";
                echo $fila['FECHA'] . " </td><t";
                echo $fila['PAÍSDEORIGEN'] . " </td><td> ";
                echo $fila['PRECIO'] . " </td></tr></table>";
                echo "<br>";
                echo "<br>";
            }
            mysqli_close($conexion);
        }

    ?>
</head>
<body>
    
    <?php

        //Si lo ejecutamos en local nos saldrá un error indicando que devuelve NULL,
        //pero este problema no ocurre en producción.
        $mibusqueda=$_GET["buscar"];

        //Le indicamos la pag del servidor a la que tiene que llamar
        //que en este caso es a ella misma
        $mipag=$_SERVER["PHP_SELF"];

        if($mibusqueda != NULL){
            ejecuta_consulta($mibusqueda);
        }else{
            echo("

            <form action=' " . $mipag . " ' method='get'>
                <label>Buscar: <input type='text' name='buscar'></label>
                <input type='submit' name='enviando' value='ENVIAR'>
            </form>
            
            ");
        }

    ?>

</body>
</html>