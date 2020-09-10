<?php

/* 

COOKIES: fichero que se almacena en el ordenador del usuario que visita la web con el fin
        de recordar datos o rastrear cierta información o comportamiento del mismo en la web.

- Guardan información tanto en el equipo del usuario que navega por la web.
- Son inseguras porque las cookies se almacenan en el cliente (ficheros de caché).
- Permanecen persistentes en el equipo.
- Se almacenan en el pc del usuario por lo que él mismo puede modificarlas.
- Solo pueden almacenarse una cantidad limitada de datos (en las sesiones no, porque
    se almacenen en el servidor).

*/


// Crear cookie
//setcookie('nombre','valor que solo puede ser texto', caducidad, ruta, dominio);

// Cookie básica
setcookie('micookie','valor de mi galleta');

// Cookie con expiración
setcookie('unyear','valor de mi cookie de 365 días', time() +(60*60*24*365));

header('Location:ver_cookies.php');

?>