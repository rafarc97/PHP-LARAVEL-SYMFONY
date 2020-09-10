<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//Almacena en las variables lo que se le pasa por la URL

$busqueda=$_GET["buscar"];


require("../datosConexion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_errno()){
    echo"Fallo al conectar con la BBDD";
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion,"utf8");

$consulta="SELECT * FROM ARTÍCULOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";

$resultados = mysqli_query($conexion,$consulta);

$fila=mysqli_fetch_row($resultados);


while($fila=mysqli_fetch_assoc($resultados)){

    echo "<form action='Actualizar.php' method='get'>";

    echo "<input type='text' name='nom' value='" . $fila['NOMBREARTÍCULO'] .  "'><br>";

    echo "<input type='text' name='sec' value='" . $fila['SECCIÓN'] .  "'><br>";

    echo "<input type='text' name='fec' value='" . $fila['FECHA'] .  "'><br>";

    echo "<input type='text' name='pais' value='" . $fila['PAÍSDEORIGEN'] .  "'><br>";
  
    echo "<input type='text' name='pre' value='" . $fila['PRECIO'] .  "'><br>";

    echo "<input type='submit' name='enviando' value='¡Actualizar!'>";

    echo "</form>";

    echo "<br><br>";
}

mysqli_close($conexion);

?>
</head>
<body>

</body>
</html>