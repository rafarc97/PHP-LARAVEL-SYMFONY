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

$nom=$_GET["n_art"];

require("../datosConexion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_errno()){
    echo"Fallo al conectar con la BBDD";
    exit();
}

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion,"utf8");

$consulta="DELETE FROM ARTÍCULOS WHERE NOMBREARTÍCULO='$nom'";

$resultados = mysqli_query($conexion,$consulta);

if($resultados == false){
    echo "Error en la consulta";
}else{
    if(mysqli_affected_rows($conexion) == 0){
        echo "No hay registros que eliminar con ese nombre";
    }else{
        echo "Se han eliminado" . mysqli_affected_rows($conexion) . " registros";
    }
}

mysqli_close($conexion);

?>
</head>
<body>

</body>
</html>