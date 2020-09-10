<?php

function incrementaVariable(){
    /* SI queremos que nuestra variable conserve su valor al salir de su ámbito, la declaramos
    como static */
    static $contador = 0;
    $contador++;
    echo $contador . "<br>";
}

/* Esto imprime 1, 2, 3. Sin el static imprime siempre 1. */
incrementaVariable();
incrementaVariable();
incrementaVariable();


?>