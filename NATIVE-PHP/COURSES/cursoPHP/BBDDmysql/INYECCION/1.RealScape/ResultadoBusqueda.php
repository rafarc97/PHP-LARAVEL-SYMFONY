<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        require("DatosConexion.php");

        $conexion = new mysqli($db_host,$db_user,$db_password,$db_name);

        if($conexion->connect_errno){
            echo "Falló la conexión" . $conexion->connect_errno;
        }

        //Con esta función los carácteres extraños introducidos en el formulario
        //como ', |, etc... no se tendrán en cuenta. Esta es una forma de evitar la inyección.
        $user = mysqli_real_escape_string($conexion, $_GET["user"]);
        $password = mysqli_real_escape_string($conexion, $_GET["password"]);

        //Si en el formulario introducimos cualquier nombre y en contraseña: ' or '1'='1
        //Entonces si usar real_escape conseguiríamos obtener el nombre y usuario de 
        //toda la base de datos.
        //$user = $_GET["user"];
        //$password = $_GET["password"];

        $conexion->set_charset("utf-8");

        $sql="SELECT * FROM usuarios WHERE user='$user' AND password='$password'";

        //echo $sql;

        if($results=$conexion->query($sql)){
            if(($results->num_rows) > 0){
                echo "Usuario y contraseña correctos";
            }else{
                echo "Usuario y/o contraseña incorrecto/s";
            }

        }

        if($conexion->errno){
            die($conexion->error);
        }

        while($fila=$results->fetch_assoc()){

            echo "<table width = '50%' align='center' border = '1'><tr><td>";

                echo $fila['user'] . " </td><td> ";
                echo $fila['password'] .  " </td></tr></table>";

                echo "<br>";
                echo "<br>";

        }

        $conexion->close();

    ?>
</body>
</html>