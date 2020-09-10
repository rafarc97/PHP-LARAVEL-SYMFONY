
 <!-- CONEXIÓN MI WEB CON BBDD: 
 
 
 NECESITAMOS PARA ELLO:
 

 -DIRECCIÓN DE LA BBDD: LOCALHOST
 -NOMBRE DE LA BBDD: PRUEBAS
 -USUARIO DE LA BBDD: ROOT
 -CONTRASEÑA SE LA BBDD: ********
 
 

 Para conectarnos con la BBDD Mysql desde PHP se puede hacer por 
 
 -procedimientos 
 -POO


 -->



 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>

 <?php

    require("datosConexion.php");
    /* Realizamos la conexión */
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    /* Se ejecuta si da un error en la funcion anterior */
    if(mysqli_connect_errno()){
        echo"Fallo al conectar con la BBDD";
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
    /* Para que se traduzcan bien las tildes */
    mysqli_set_charset($conexion,"utf8");
    /* Almacenamos en la variable consulta, la instruccion sql que queremos ejecutar */
    $consulta="SELECT * FROM ARTÍCULOS";

    /* Creamos una tabla en la memoria RAM con toda la información de la instruccion $consulta */
    $resultados = mysqli_query($conexion,$consulta);

    /* Almacenamos toda la información de las tablas en una variable en forma de ARRAY */
    $fila=mysqli_fetch_row($resultados);


    /* Mientras haya registros, imprimelos */
    while($fila=mysqli_fetch_row($resultados)){
        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " ";
        echo $fila[3] . " ";
        echo "<br>";
    }

    mysqli_close($conexion);

?>
     
 </body>
 </html>