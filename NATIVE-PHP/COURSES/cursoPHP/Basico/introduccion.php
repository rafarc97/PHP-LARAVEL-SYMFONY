<!-- Hay lenguajes que se ejecutan en el lado del cliente y otros en el del servidor
PHP se ejecuta en el lado del servidor. Podemos visitar webs cuyo código se procese
en el lado del cliente (javascript) o en el lado del servidor (php).
Cuando introducimos la url de una web y pulsamos intro, si esa web está hecha en html
por ejemplo, será el propio navegagor quien procese dicho código (es decir, se procesa
en el lado del cliente). Si por el contrario introducimos una url de una web hecha en
php, cuando pulsemos intro este codigo será procesado en el lado del servidor, es decir
en una máquina distinta a la que estamos usando nosotros, y cuando ese código haya sido
procesado entonces nos llegará a nosotros (lado del cliente).

Para comprobar que nuestro código de PHP se está desarrollando correctamente tendremos
que instalar un servidor web propio en nuestro ordenador. Así, una vez que hayamos 
realizado el desarrollo completo y nuestro proyecto esté en condiciones de ser subido
a la web, podremos pasarlo a un servidor web remoto.

Usaremos los softwares Apache (servidor web), extensiones PHP (instalación del lenguaje PHP
para que nuestro ordenador pueda entender dicho código) y MySql (GBBDD).
Para instalar los 3 softwares de una sola vez, instalaremos un paquete que englobe los 3 
softwares. Usaremos el paquete LAMP.
 -->


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>

    <!-- Donde irá alojado todo el código PHP el cuál será interpretado por nuestro servidor web Apache-->
    <!-- Para colocar el localhsot en un directorio de nuestro pc en concreto, hacemos en la terminal
    de linux la isntrucción: php -S localhost:4000 (estando dentro de la carpeta en cuestión). Para abrir
    nuestro archivo PHP en el navegador escribimos http://localhost:4000 si nuestro arechivo principal se 
    llama index.php, o igual pero añadiendo el nombre del archivo al final si tiene otro nombre-->

    <?php

        /* Todas las sentencias en PHP acaban en ; */
        print "Bienvenidos al curso de PHP <br>";
        print "Estamos aprendiendo un nuevo lenguaje de programación <br>";
        print "Hasta el próximo vídeo <br>";
        /* Las variables no pueden comenzar (pero si contener) por valores numéricos.
        No se necesita indicar el tipo de datos de las variables.*/
        
        $nombre = "Juan";
        $nombre2 = 'Rafa';

        /* Esto es un error, aunque lo interpreta como una cte y la imprime */
        $nombre3 = Juan; 

        print $nombre3;
        $edad = 18;

        /* Para concatenar cadena con varibales se utiliza un punto y es conveniente que haya un espacio
        de separación. */
        print "El nombre del usuario es " . $nombre2 . "<br>";
        print "El nombre del usuario es  $nombre2 <br>"; /* Otra opción */
        /* Usando comillas simples no se reconoce las variables dentro de ellos.
        Es decir con comillas simples se escribe lo que esté dentro tal cual. */
        print 'El nombre de usuario es $nombre2' . "<br>";

        /* Echo se utiliza igual que print pero echo a diferencia de print, admite imprimir + de 1 
        varible separadas por comas*/ 
        /* print es una función que devuelve 1 (se toma + timepo que echo para imprimir en pantalla, por
        ello se utiliza + echo). Echo es una expresión, no una función (utiliza menos recursos) */
        echo $nombre,$nombre2,$nombre3,$edad;
        echo "<br>";

        /* Funciones */

        function dameDatos(){
            
        }

        /* Llamada a funciones */

        dameDatos();

        /* A esta altura de nuestro cçodigo se incluye el código de dicho fichero */
        include ("introduccion2.php");
        imprime();
        

        /* También podemos usar require, que se diferencia en que si al usar include y metemos un archivo
        que no existe, el programa nos dará un error pero se seguirá ejecutando el resto del programa.
        Sin embargo con require, dará ese error y no se ejecutará el resto del código. */


    ?>

    <!-- En PHP se pueden tener varios bloques de PHP. Se suele usar a veces para tener el código 
    (funciones) en un bloque y las llamadas a ellos en el otro.-->



     
 </body>
 </html>