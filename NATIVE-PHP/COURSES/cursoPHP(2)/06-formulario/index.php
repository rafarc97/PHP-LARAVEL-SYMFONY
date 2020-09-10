<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- 
        En HTML existen atributos para validar en el lado del cliente
        los datos introducidos por un formulario, sin embargo, independientemente
        de si decidimos usarlos en nuestro proyecto, SIEMPRE, SIEMPRE, SIEMPRE debemos
        validarlo también en el lado del servidor.
    
        Esto es debido a que si alguien con ideas de programación sabe
        meterse en la consola del navegador, puede modificar dichos atributos
        del HTML.
    -->

    <h1>Validar formulario</h1>

    <?php

        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan valores'){
                echo '<strong style="color: red"> Introduce todos los campos </strong>';
            }
            if($error == 'nombre'){
                echo '<strong style="color: red"> Introduce un nombre correcto </strong>';
            }
            if($error == 'apellidos'){
                echo '<strong style="color: red"> Introduce unos apellidos correctos </strong>';
            }
            if($error == 'edad'){
                echo '<strong style="color: red"> Introduce una edad correcto </strong>';
            }
            if($error == 'email'){
                echo '<strong style="color: red"> Introduce un email correcto </strong>';
            }
            if($error == 'password'){
                echo '<strong style="color: red"> Introduce una password correcta </strong>';
            }
            
        }
    ?>

    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre</label> <br>
        <input type="text" name="nombre" pattern="[A-Za-z]+"> <br>

        <label for="apellidos">Apellidos</label> <br>
        <input type="text" name="apellidos" required pattern="[A-Za-z]+"> <br>

        <label for="edad">Edad</label> <br>
        <input type="number" name="edad" required pattern="[0-9]+"> <br>

        <label for="email">Email</label> <br>
        <input type="email" name="email" required> <br>

        <label for="pass">Contraseña</label> <br>
        <input type="password" name="pass" required> <br>
        
        <input type="submit" value="Enviar">
    </form>


    
</body>
</html>