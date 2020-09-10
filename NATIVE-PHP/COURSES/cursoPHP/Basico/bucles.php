<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

/*
Los bucles funcionan igual que en Python.
Las intrucciones break y continue se pueden usar en PHP: 
*/

for ($i = 0; $i < 10; $i++){
    if ($i == 6)
        break;
    echo "iteracion: " . $i . "<br>";
}

echo "bucle finalizado <br>";


for ($i = 0; $i < 10; $i++){
    if ($i == 6)
        continue;
    echo "iteracion: " . $i . "<br>";
}

echo "bucle 2 finalizado <br>";

?>
</body>
</html>