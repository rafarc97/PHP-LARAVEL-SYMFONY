<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

    /* ARRAY INDEXADO */
    $semana[]="Lunes";
    $semana[]="Martes";
    $semana[]="Miércoles";

    echo $semana[1] . "<br>";

    $semana2 = array("Lunes","Martes","Miercoles","Jueves");
    sort($semana2);
    echo $semana2[3] . "<br>";

    /* Imprimimos pero ordenador alfabeticamente el array */
    for ($i = 0; $i < count($semana2); $i++){
        echo $semana2[$i] . "<br>";
    }

    /* ARRAY ASOCIATIVO */
        /* Para asociar un nombre con su pos. La primera pos del array
        queda identificada como "Nombre*/
    $datos = array("Nombre"=>"Rafa", "Apellido"=>"Rodríguez", "Edad"=>23);
    echo $datos["Apellido"] . "<br>";
    $datos["País"] = "España"; /* Agregar un elemento + a un array asociativo */


    /* Función que devuelve si esa variable es un array o no */
    if(is_array($datos))
        echo "Verdadero <br>";
    else
        echo "Falso <br>";

    
    /* Como recorrer arrays asociativos*/
    foreach($datos as $clave=>$valor){
        echo "A $clave le corresponde $valor <br>";
    }

    /* Como recorrer arrays indexados*/
    for ($i = 0; $i < 3; $i++){
        echo $semana[$i] . "<br>";
    }

    /* También podemos hacer:  */
    for ($i = 0; $i < count($semana); $i++){
        echo $semana[$i] . "<br>";
    }

?>
</body>
</html>