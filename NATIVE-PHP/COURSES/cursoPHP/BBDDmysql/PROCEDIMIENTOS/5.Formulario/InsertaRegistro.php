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

$sec=$_GET["seccion"];
$nom=$_GET["n_art"];
$pre=$_GET["precio"];
$fec=$_GET["fecha"];
$pais=$_GET["p_orig"];


require("../datosConexion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_errno()){
    echo"Fallo al conectar con la BBDD";
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion,"utf8");

$consulta="INSERT INTO ARTÍCULOS (PAÍSDEORIGEN, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA) VALUES ('$pais', '$sec', ' $nom', '$pre', '$fec')";

$resultados = mysqli_query($conexion,$consulta);

if($resultados == false){
    echo "Error en la consulta";
}else{
    echo"Registro guardado <br> <br>";

    echo "<table><tr><td>$nom</td></tr>";

    echo "<tr><td>$sec</td></tr>";

    echo "<tr><td>$fec</td></tr>";

    echo "<tr><td>$pais</td></tr>";

    echo "<tr><td>$pre</td></tr>";
}

mysqli_close($conexion);

?>
</head>
<body>

</body>
</html>