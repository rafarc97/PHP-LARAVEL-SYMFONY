<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        td{
            border: 2px solid red;
        }
    </style>
</head>
<body>

<table>

<tr><td>Nombre del Artículo</td></tr>

    <?php

        foreach($matrizProductos as $registro){
            echo "<tr><td>" . $registro["NOMBREARTÍCULO"] . "</td></tr>";
        }

    ?>
</table>
    
</body>
</html>