<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $user = $_GET["user"];
        $password = $_GET["password"];

        require("../DatosConexion.php");

        $conexion = mysqli_connect($db_host, $db_user, $db_password);

        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }

        mysqli_select_db($conexion, $db_name) or die ("No se encuentra la BBDD");

        mysqli_set_charset($conexion,"utf8");


        $sql = "INSERT INTO usuarios (user, password) VALUES (?,?)";

        $results = mysqli_prepare($conexion,$sql);

        //"s" indica que es está tratando con parámetros de tipo texto (string), "i" (int) y "d" (decimal)
        //Indicamos dos s porque ambos campos son de tipo string.
        $ok = mysqli_stmt_bind_param($results, "ss", $user, $password);

        //Cuarto paso
        $ok = mysqli_stmt_execute($results);

        if($ok == false){
            echo "Error al ejecutar la consulta";
        }else{
    
            echo "Agregado nuevo usuario a la base de datos. <br><br>";

            mysqli_stmt_close($results);
        }

    ?>
</body>
</html>