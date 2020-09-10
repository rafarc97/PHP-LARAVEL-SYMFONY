<?php

if(!is_dir('mi_carpeta')){
    // Crear directorio
    mkdir('mi_carpeta',0777) or die('No se puede crear la carpeta');
}else{
    echo 'Ya existe la carpeta';
}

// Borrar directorio
// rmdir('mi_carpeta');

if($gestor = opendir('./mi_carpeta')){
    while(false !== ($fichero = readdir($gestor))){
        if($fichero != '.' && $fichero != '..'){
            echo '<br>' . $fichero . '<br>';
        }
    }
}


?>