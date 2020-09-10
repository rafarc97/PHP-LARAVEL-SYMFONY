<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .resaltar{
            color: red;
            font-weight: bold;
        }
    
    </style>
</head>

<body>


<?php

    /* Para incluir algo que tiene comillas dentro de otra cosa que tb las tenga, usamos comillas simples.
    También se podría invertir el orden de las comillas, la cosa es que siempre algo que tenga comillas
    dentro de otra cosa que también tenga, sean de distinto tipo, fin. */
    echo "<p class='resaltar'> Esto es un ejemplo de frase </p>";

    /* Otra manera es usando la barra invertida para escapar el caracter:  */
    echo "<p class=\"resaltar\"> Esto es un ejemplo de frase </p>";
    echo '<p class=\'resaltar\'> Esto es un ejemplo de frase </p>';

    /* strcmp es case sensitive
     strcasecmp no lo es 
     
     -Devuelve 0 si son iguales 
     -Devuelve < 0 si el primer string es mas chico que el segundo
     -Devuelve > 0 si el primer string es mas grande que el segundo
     
     */

    $variable1 = "La casa de Rafa";
    $variable2 = "casa";

    $resultado = strcasecmp($variable1,$variable2);

    if (!$resultado > 0){
        echo $resultado;
    }
    else
        echo "hola";

?>
    
</body>
</html>