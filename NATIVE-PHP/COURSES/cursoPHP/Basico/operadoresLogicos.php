<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

/* Los oepradores and y && tienen diferentes prioridades:
    A continuación un ejemplo: */

$var1 = true;
$var2 = false;

/* Imprime incorrecto pq evalua primero  $var1 && $var2 */
$resultado = $var1 && $var2;

if ($resultado == true)
    echo "correcto <br>";
else
    echo "incorrecto <br>";


/* Imprime correcto pq asigna primero a $resultado el true de $var1 */
$resultado = $var1 and $var2;

if ($resultado == true)
    echo "correcto <br>";
else
    echo "incorrecto <br>";


?>


</body>
</html>