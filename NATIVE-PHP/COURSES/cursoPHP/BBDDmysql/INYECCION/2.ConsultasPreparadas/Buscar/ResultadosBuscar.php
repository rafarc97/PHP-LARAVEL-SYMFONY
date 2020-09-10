<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $user = $_GET["buscar"];

        require("../DatosConexion.php");

        $conexion = mysqli_connect($db_host, $db_user, $db_password);

        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la BBDD";
            exit();
        }

        mysqli_select_db($conexion, $db_name) or die ("No se encuentra la BBDD");

        mysqli_set_charset($conexion,"utf8");


        //Primer paso
        $sql = "SELECT * FROM usuarios WHERE user = ?";

        //Segundo paso
        $results = mysqli_prepare($conexion,$sql);

        //Tercer paso
        //"s" indica que es está tratando con parámetros de tipo texto (string), "i" (int) y "d" (decimal)
        $ok = mysqli_stmt_bind_param($results, "s", $user);

        //Cuarto paso
        $ok = mysqli_stmt_execute($results);

        if($ok == false){
            echo "Error al ejecutar la consulta";
        }else{
            //Quinto paso: escribimos tantos parámetros como columnas nos devuelva la instrucción SQL
            $ok = mysqli_stmt_bind_result($results, $user, $password);

            //Sexto paso
            echo "Usuario encontrado: <br><br>";

            while(mysqli_stmt_fetch($results)){
                echo $user . " " . $password . "<br>";
            }

            mysqli_stmt_close($results);
        }

    ?>
</body>
</html>