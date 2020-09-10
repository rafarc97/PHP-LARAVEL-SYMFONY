<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php

    //Los marcadores nos facilitan el uso de arrays asociativos

        $nombre = $_GET["n_art"];
        

        try{
            $base=new PDO('mysql:host=localhost; dbname=productos', 'root', '');
            //echo "Conexion OK";

            //Establece atributos para el manejo de excepciones y errores (sin ellos el navegador no nos
            //mostraría el tipo de error si hubiera alguno durante la ejecución del programa)
            $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $base->exec("SET CHARACTER SET utf8");

            $sql="DELETE FROM ARTÍCULOS WHERE NOMBREARTÍCULO = :NOMBRE ";

            $resultado = $base->prepare($sql); //devuelve obj PDO statment

            $resultado->execute(array(":NOMBRE"=>$nombre));

            echo "Registro Eliminado";

            $resultado->closeCursor();

        }catch(Exception $e){
            die('Error: ' . $e->GetMessage());
        }finally{
            $base=null; //vaciar memoria
        }
        

    ?>
</body>
</html>