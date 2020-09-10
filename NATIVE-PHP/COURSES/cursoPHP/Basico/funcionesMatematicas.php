<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

    $num1 = rand();

    echo "El número aleatorio es: $num1 <br>";

    $num2 = rand(10,50);

    echo "El num alatorio entre 10 y 50 es: $num2 <br>";

    $potencia = pow(3,4);

    echo "La potencia es: $potencia <br>";

    $redondeo = 10.4566;

    echo "El redondeo es: " . round($redondeo) . "<br>";

    $redondeo2 = 10.45243;

    echo "El redondeo a dos decimales es: " . round($redondeo,2) . "<br>";

    /* CASTING IMPLÍCITO */
    /* Declaramos una variable de tipo string */
    $numero = "5";
    /* A partir de este punto sería int, esto se llama casting (cambio de tipos) implícito */
    $numero+=2;
    /* A partir de este momento ya sería float:  */
    $numero = 5.34;

    /* CASTING EXPLÍCITO */
    $numerito = "5";
    $resultadito = (int)$numerito;


?>
</body>
</html>