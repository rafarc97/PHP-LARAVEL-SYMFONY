<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <?php
        if(isset($_COOKIE["idioma_seleccionado"])){
            if($_COOKIE["idioma_seleccionado"] == "es"){
                header("location:es.php");
            }elseif($_COOKIE["idioma_seleccionado"] == "en"){
                header("location:en.php");
        }
       } 
    ?>

    <h1>Elige Idioma: </h1>

    <!-- Cuando pulsemos se pasará por la url el parámetro idioma a crearCookie.php-->
    <p><a href="CreaCookie.php?idioma=es">Español</a></p>
    <p><a href="CreaCookie.php?idioma=en">Inglés</a></p>
</body>
</html>