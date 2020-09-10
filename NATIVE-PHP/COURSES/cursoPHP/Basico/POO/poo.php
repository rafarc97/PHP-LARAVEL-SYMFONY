<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


    include("clases.php");

    /* Instancias/ejemplares de nuestra clase "Coche" */
    /* Si los constructores de nuestras clases no reciben parametros, al inicizalizar 
    las instancias no tenemos por qué ponerle paréntesis 
    También existen clases que no tienen por qué llevar clases constructoras.*/
    $mazda = new Coche;
    $pegaso = new Camion();
    
    echo $mazda->getRuedas() . "<br>";
    $mazda->arrancar();
    $mazda->setColor("Rojo","Mazda");
 
    echo $pegaso->getRuedas() . "<br>";
    $pegaso->arrancar();
    $pegaso->setColor("Negro","Pegaso"); 

?>
</body>
</html>