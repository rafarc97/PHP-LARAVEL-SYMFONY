<?php

    $fichero = $_FILES['archivo'];
    $nombre = $fichero['name'];
    $tipo = $fichero['type'];

    var_dump($fichero);

    if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/gif' || $tipo == 'image/png'){
        if(!is_dir('images')){
            mkdir('images',0777);
        }

        move_uploaded_file($fichero['tmp_name'],"images/.$nombre");
        header('Refresh: 3; URL=index.php');
        echo '<h1> Imagen subida correctamente </h1>';

    }else{
        header('Refresh: 3; URL=index.php');
        echo '<h1>Sube una imagen con un formato correcto, por favor... </h1>';
    }  
?>