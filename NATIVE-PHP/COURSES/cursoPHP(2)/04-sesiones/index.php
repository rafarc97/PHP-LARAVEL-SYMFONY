<?php

    /* 
    
    SESIONES: Almacenar y persistir datos del usuario mientras que navega en un sitio web
    hasta que cierra sesión o cierra el navegador.



    Ventajas:

    - Podemos almacenar grandes cantidades de datos (porque se almacenan en el servidor no en el
        cliente).
    - Los datos se almacenan en el servidor web. Esto hace que las sesiones sean muy seguras 
    puesto que no se está guardando nada en el cliente y es invisible para el JS o el cliente.


    */

    // Iniciar sesión
    session_start();

    // Variable local
    $variable_normal = "Soy una cadena de texto";

    // Variable de sesión
    $_SESSION['variable_persistente'] = 'HOLA SOY UNA SESIÓN ACTIVA';

    echo $variable_normal . '<br>';
    echo $_SESSION['variable_persistente'] . '<br>';
