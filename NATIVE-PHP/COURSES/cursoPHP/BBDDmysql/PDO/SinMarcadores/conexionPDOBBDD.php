<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $sec = $_GET["seccion"];
        $pais = $_GET["pais"];

        try{
            $base=new PDO('mysql:host=localhost; dbname=productos', 'root', '');
            //echo "Conexion OK";

            //Establece atributos para el manejo de excepciones y errores (sin ellos el navegador no nos
            //mostraría el tipo de error si hubiera alguno durante la ejecución del programa)
            $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $base->exec("SET CHARACTER SET utf8");

            $sql="SELECT NOMBREARTÍCULO, SSECCIÓN, PRECIO, FECHA, PAÍSDEORIGEN FROM ARTÍCULOS WHERE SECCIÓN = ? AND PAÍSDEORIGEN = ?";

            $resultado = $base->prepare($sql); //devuelve obj PDO statment

            $resultado->execute(array($sec,$pais));

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                echo " Nombre Artículo " . $registro['NOMBREARTÍCULO'] . " Sección " . $registro['SECCIÓN'] . " Fecha " . $registro['FECHA'] .  " País de Origen " . $registro['PAÍSDEORIGEN'] . "Precio" . $registro['PRECIO'] . "<br>";
            }

            $resultado->closeCursor();

        }catch(Exception $e){
            die('Error: ' . $e->GetMessage());
            //echo "Codigo de error: " . $e->getCode();
            //echo "Línea del error: " . $e->getLine();
        }finally{
            $base=null; //vaciar memoria
        }
        

    ?>
</body>
</html>