<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    if(!$_COOKIE["idioma_seleccionado"]){
        header("location:Principal.html");
    }elseif($_COOKIE["idioma_seleccionado"] == "es"){
        header("location:es.php");
    }elseif($_COOKIE["idioma_seleccionado"] == "en"){
        header("location:en.php");
    }
?>
    
</body>
</html>