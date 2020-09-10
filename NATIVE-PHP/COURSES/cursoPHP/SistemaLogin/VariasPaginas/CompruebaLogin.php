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

        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS = :login AND PASSWORD = :password";

        $resultado=$base->prepare($sql);

        //'htmlentities' Convierte cualquier símbolo en HTML
        //objetivo: evitar la inyección SQL
        $login = htmlentities(addslashes($_POST["login"]));

        $password = htmlentities(addslashes($_POST["password"]));

        //Establecemos la relación entre el marcador y las variables con bindValue:
        $resultado->bindValue(":login",$login);
        $resultado->bindValue(":password",$password);

        $resultado->execute();


        //Si devuelve 1 => introdució bien sus credenciales
        $numero_registro = $resultado->rowCount();


        //session_start: inicia una nueva sesión o reanuda la existente
        if($numero_registro != 0){

            //Iniciamos sesión
            session_start();
            //almacenamos en la variable super global SESSION el nombre usuario,
            //para poder usar estos datos en cualquier otra página de nuestro sitio.
            $_SESSION["usuario"] = $_POST["login"];

            header("location:UsuariosRegistrados.php");
        }else{
            //Redirigimos a la propia página de login
            header("location:Login.php");
        }
    }catch(Exception $e){
        die("Error: " . $e->getMessage());
    }
?>
</body>
</html>