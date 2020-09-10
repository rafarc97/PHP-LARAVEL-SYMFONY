<?php

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

$consulta="SELECT * FROM ARTÍCULOS WHERE NOMBREARTÍCULO LIKE '%$busqueda%'";

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

?>