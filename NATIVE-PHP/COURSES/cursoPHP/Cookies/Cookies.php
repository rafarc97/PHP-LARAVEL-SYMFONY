<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        //Al visitar o cargar esta página se almacenará este cookie
        //Esta cookie se elimina al cerrar el navegador, para que se mantenga tendremos que indicar
        //un parámetro (tiempo de vida de la cookie).

        //time() devuelve la fecha actual en la que se ejecuta dicha línea de código
        //+30 le añade 30 segundos (De esta forma la cookie permanecerá aún cerrando el navegador,
        //30 segundos más).
        //El 4º parámetro indica dentro de qué directorio estarán disponibles las cookies, si ahora crearamos otra
        //Carpeta al mismo nivel que 'Cookies', veremos como no estarán disponibles las cookies que hayamos creado.

        setcookie("prueba","Esta es la info de nuestra cookie",time()+30,"http://localhost/cursoPHP/Cookies/");

        //PARA ELIMINAR UNA COOKIE (valor negativo):
        setcookie("prueba","Esta es la info de nuestra cookie",time()-1,"http://localhost/cursoPHP/Cookies/");

        //Lee la cookie del navegador y la imprime si se ha creado anteriormente
        if(isset($_COOKIE["prueba"])){
            echo $_COOKIE["prueba"];
        }else{
            echo "La Cookie no se ha creado";
        }

        

    ?>
</body>
</html>