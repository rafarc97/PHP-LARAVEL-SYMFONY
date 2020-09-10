<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $conexion = new mysqli("localhost","root","","productos");

        if($conexion->connect_errno){
            echo "Falló la conexión" . $conexion->connect_errno;
        }

        //Forma Procedimental
        //mysqli_set_charset($conexion,"utf-8");

        //Forma POO
        $conexion->set_charset("utf-8");

        $sql="SELECT * FROM ARTÍCULOS";

        //Forma Procedimental
        //$resultados = mysqli_query($conexion,$sql);

        //Forma POO
        $resultados=$conexion->query($sql);

        if($conexion->errno){
            die($conexion->error);
        }

        //Forma Procedimental
        /*
        while($fila=mysqli_fetch_array($resultados,MYSQL_ASSOC){

        }*/

        //Forma POO
        while($fila=$resultados->fetch_assoc()){

            echo "<table width = '50%' align='center' border = '1'><tr><td>";

                echo $fila['SECCIÓN'] . " </td><td> ";
                echo $fila['NOMBREARTÍCULO'] . " </td><td> ";
                echo $fila['FECHA'] . " </td><t";
                echo $fila['PAÍSDEORIGEN'] . " </td><td> ";
                echo $fila['PRECIO'] . " </td></tr></table>";

                echo "<br>";
                echo "<br>";

        }

        //Forma Procedimental
        //mysqli_close($conexion);

        //Forma POO
        $conexion->close();

    ?>
</body>
</html>