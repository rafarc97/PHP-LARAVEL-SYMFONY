<?php


/* Existen variables de 3 ámbitos:
        
        -Local (visible dentro de una función)
        
        -Global (visible desde cualquier lugar del código PHP)
        
        -SuperGlobal (visible incluso desde fuera del script PHP). Se declaran como Array.*/


        $nombre = "Juan";

        function dameNombre(){
            /* Para poder utilizar una variable como global dentro de otra función, se debe hacer
            desde la propia función que se quiere utilizar dicha variable que está fuera, nunca
            desde fuera se deberá hacer el "global $name", esto es así por la propia naturaleza
            que tiene PHP en la cual permite incluir ficheros externos, es como una medida de seguridad
            para que las variables que tenemos en nuestro fichero PHP no se pueda sobreescribir
            por otras variables que se llamen igual y que se añadan desde un archivo externo con
            include/require o con funciones como está. Para poder sobreescribir las variables 
            de nuestro fichero PHP desde otro externo usando require/include deberemos usar el
            "global $variable" también desde el fichero externo, nunca desde el propio nuestro.
            Si lo intentamos PHP nos dará error.*/
            global $nombre;
            $nombre="El nombre es " . $nombre;
        }

        dameNombre();
        echo $nombre;

?>