<?php

// Abrir (r solo lectura)
$fichero = fopen('fichero.txt','r');

// Leer una línea
$contenido = fgets($fichero);
echo $contenido . '<br>';

// Cerrar
fclose($fichero);

// Abrir (a+ permite leer y escribir)
$fichero = fopen('fichero.txt','a+');

// Leer varias líneas
while(!feof($fichero)){
    $contenido = fgets($fichero);
    echo $contenido . '<br>';
}

// Escribir
fwrite($fichero,"Soy un texto metido desde PHP" . "<br>");

// Cerrar
fclose($fichero);

// Copiar
copy('fichero.txt','fichero_copiado.txt') or die('Error al copiar');

// Renombrar
rename('fichero_copiado.txt','fichero_copiado_renombrado.txt');

// Eliminar
unlink('fichero_copiado_renombrado.txt') or die('Error al borrar');

// Existe / No existe
if(file_exists('fichero.txt')){
    echo 'Existe fichero.txt' . '<br>';
}else{
    echo 'No existe fichero.txt' . '<br>';
}


?>