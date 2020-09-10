<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    include("model/connect.php");

    $id = $_GET["id"];

    $base->query("DELETE FROM datos_usuarios WHERE id = '$id'");

    header("location:../index.php");

?>
</body>
</html>