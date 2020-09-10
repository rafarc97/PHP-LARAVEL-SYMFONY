<!-- Las ctes deben ir en mayusculas por convenio. 
    El ámbito de las ctes es por defecto global.
    Solo pueden almacenar valores escalares.
-->


<?php

/* Definición de ctes. */
define("AUTOR", "Rafa");

/* Imprime ctes. */
echo AUTOR . "<br>";
print AUTOR . "<br>";

/* Diferencia con variables: 
    Para imprimirlas combinadas con texto, tenemos que sacarlo del string*/


echo "El autor es: " . AUTOR . "<br>";


/* Podemos definirlo así tb para poder utilizar en mayuscula o minuscula la cte: */

define("AUTOR2", "Rafa", true);

echo autor2;

/* Existen ctes predefinidas/mágicas para poder usarlas. En php.net podemos encontrarlas

__LINE__ : indica nº linea actual donde se imprima dicha cte.

__FILE__ : imprime ruta actual del fichero*/

?>