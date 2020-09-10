<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        //Filtro para que los usuarios que solo se hayan logeado correctamente
        //puedan entrar a la página, ya que, si no hacemos esto, simplemente
        //copiando esta url en el navegador podremos acceder a esta página
        //sin previamente haber introducido usuario y contraseña correctos.

        //Reanudamos la sesión para rescatar lo almacenado en la variable super global
        //que se almacenó en CompruebaLogin.php
        session_start();

        //Si NO existe algo almacenado en dicha variable super global (es decir,
        //si no hemos introducido antes los datos correctos en CompruebaLogin y por lo tanto
        //no se ha introducido nada en la variable SESSION) => redirigimos a Login.php
        //Si probamos a escribir la url en otro navegador nos redirigirá a Login.php
        if(!isset($_SESSION["usuario"])){
            header("location:Login.php");
        }
    
    ?>
    
    <h1>Bienvenidos Usuarios</h1>

    <?php

        echo "Usuario: " . $_SESSION["usuario"] . "<br> <br>";
    ?>

    <p><a href="Cierre.php">Cierra Sesion</a></p>


    <h2 style="color: green; font-weight: bold;">Esto es información solo para usuarios registrados</h2>
    <p><a href="UsuariosRegistrados.php">Volver</a></p>

</body>
</html>