<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceptos Básicos PHP</title>
</head>
<body>
    
    <?php


    /* TIPOS DATOS:
        -int
        -float/double
        -string
        -boolean
        -array
        -object
    */

















    /* CURIOSIDADES Variables */
    echo "<h1> Curiosidades Variables </h1>";

    $number = 12;

    /* Obtener tipo dato y el dato en sí en el navegador */
    var_dump($number);

    echo "<br><br>";

    /* Obtener tipo de dato en el navegador */
    echo gettype($number) . "<br><br>";

    /* Diferencia de " y ' */
    $string = "prueba de string $number";
    $string2 = 'prueba de string $number';

    echo $string . "<br><br>";
    echo $string2 . "<br><br>";
    
    /* Escapando comillas con slashes */
    echo "hola \" \" <br><br>";
























    /* CONSTANTES */
    echo "<h1> Constantes </h1>";

    define('nombre','rafa');
    $nombre = 'rafael';

    /* ctes se muestran sin el "$" */
    /* Podemos tener una cte y variable de mismo nombre */
    echo nombre . '<br><br>';
    echo $nombre . '<br><br>';

    /* Algunas Constantes Predefinidas */
    echo '<h1> Ctes Predefinidas (existen muchas más)</h1>';

    /* SO */
    echo PHP_OS . '<br><br>';
    /* Versión PHP */
    echo PHP_VERSION . '<br><br>';
    /* Ubicación extensiones PHP instaladas */
    echo PHP_EXTENSION_DIR . '<br><br>';
    /* Nº Línea script */
    echo __LINE__ . '<br><br>';
    /* Ruta completa script */
    echo __FILE__ . '<br><br>';
    /* Nombre de la Función desde donde se ejecuta */
    function hola(){
        echo __FUNCTION__ . '<br><br>';
    }
    hola();


















    /* Operadores Incre/Decre - mento */
    echo '<h1> Curiosidades Operadores Incre/Decre - Mento </h1>';
    $year = 2020;
    echo $year++ . '<br>';
    echo $year . '<br>';
    $year2 = 2020;
    echo $year2-- . '<br>';
    echo $year2 . '<br>';



















    /* Variables SuperGlobales */
    echo '<h1> Variables SuperGlobales </h1>';

    echo $_SERVER['SERVER_ADDR'] . '<br><br>';
    
    echo $_SERVER['SERVER_NAME'] . '<br><br>';
    
    echo $_SERVER['SERVER_SOFTWARE'] . '<br><br>';
    
    echo $_SERVER['HTTP_USER_AGENT'] . '<br><br>';
    
    /* Si accedieramos desde otro PC saldría otra dirección distinta a SERVER_ADDR,
    puesto que esta equivale a la del cliente. En est caso el cliente somos nosotros
    mismos. */
    echo $_SERVER['REMOTE_ADDR'] . '<br><br>';
    






















    /* Curiosidades Operadores de Comparación */
    /* 

    != <=> <> 
    
    */






















    echo '<h1> Curiosidades Operadores de Comparación </h1>';
    echo ' != <=> <> <br><br>';

    /* GOTO */

    echo '<h1> goto </h1>';
    goto marca;

    echo 'echo nº1';
    echo 'echo nº2';
    echo 'echo nº3';
    echo 'echo nº4';

    marca:
    echo 'Me he saltado 4 echos';






















    /* isset, Casting, break y continue */
    echo '<h1> isset, Casting, break y continue </h1>';

    /* Si la variable está definida procede */
    if(isset($_GET['numero'])){
            $numero = (int)$_GET['numero']; //convertimos de string a int
    }else{
        $numero = 1;
    }

    echo "<h3> Tabla de multiplicar de $numero </h3>";

    $contador = 1;

    while($contador <= 10){
        echo "$numero x $contador = ". ($numero*$contador) . "<br>";
        $contador++;    

        if($contador == 6){
            echo 'Aplicando el break en $contador == 6';
            break;
        }
    }

    $contador = 1;
    echo '<br><br>';

    while($contador <= 10){
        echo "$numero x $contador = ". ($numero*$contador) . "<br>";
        $contador++;    

        if($contador == 6){
            echo 'Aplicando el continue en $contador == 6';
            continue;
        }
    }





















    /* Small Exercise */

    /* Es muy BUENA PRÁCTICA devolver siempre algo en las funciones, en lugar
    de imprimir línea por línea el ejercicio. */
    $cadena_texto = '<h1> Small Exercise </h1>';

    function multiplicaciones(){

        //Hay que indicar que es global para poder ser utilizada en un ámbito local
        global $cadena_texto; 

        $cadena_texto .= "<table border='1'> <tr>";
        //Fila 1 de celdas
        $cadena_texto .= "<tr>";
            for($cabecera = 1; $cabecera <= 10; $cabecera++){
                $cadena_texto .= "<td> Tabla del $cabecera </td>";
            }
            
        $cadena_texto .= "</tr>";
        //Fila 2 de celdas
        $cadena_texto .= "<tr>";
            for($i = 1; $i <= 10; $i++){
                $cadena_texto .= "<td>";
                for($x = 1; $x <= 10; $x++){
                    $cadena_texto .= "$i x $x = " . ($i*$x) . "<br>";
                }
                $cadena_texto .= "</td>";
            }
            $cadena_texto .= "</tr>";
        $cadena_texto .=  "</table>";

        return $cadena_texto;
    }

    echo multiplicaciones();



















    /* Funciones Relevantes */
    echo '<h1> Funciones Relevantes </h1>';

    /* Debuggear */
    $nombre = 'Rafa Rodríguez';
    var_dump($nombre);
    echo '<br>';

    /* Fechas */
    echo date('d-m-Y'); //existen otros formatos para esta misma función
    echo '<br>';
    echo time(); //formato timestamp
    echo '<br>';

    /* Matemáticas */
    echo 'Raíz Cuadrada de 10: ' . sqrt(10);
    echo '<br>';
    echo 'Número Aleatorio entre 10 y 40: ' . rand(10,40);
    echo '<br>';
    echo 'Número PI: ' . pi();
    echo '<br>';
    echo 'Redondeo: ' . round(7.891234,3);
    echo '<br>';
    
    /* Otras */

    /* Devuelve tipo (gettype)*/
    echo gettype($nombre);
    echo '<br>';

    /* True si string False si no (is_string)*/
    if(is_string($nombre)){
        echo '$nombre es un string';
    }else{
        echo 'no es un string';
    }
    echo '<br>';

    /* true si existe false si no */
    if(isset($edad)){
        echo 'existe la var $edad';
    }else{
        echo 'no existe la var $edad';
    }
    echo '<br>';

    /* Elimina espacios (trim)*/
    echo trim($nombre);
    echo '<br>';

    /* Eliminar variables (unset) */
    unset($nombre);
    var_dump($nombre);
    echo '<br>';

    $texto1 = '';
    $texto2 = false;
    $texto3 = NULL;
    //$texto4 = '';
    $texto5 = true;

    /* empty */
    function contenido($texto){
        if(empty($texto)){
            echo 'la variable $texto está vacía';
        }else{
            echo 'la variable $texto TIENE CONTENIDO';
        }
        echo '<br><br>';
        return;
    }

    contenido($texto1);
    contenido($texto2);
    contenido($texto3);
    contenido($texto4);
    contenido($texto5);

    /* Longitud cadena (strlen) */
    $cadena = '12345';
    echo strlen($cadena);
    echo '<br>';

    /* Encontrar caracter (strpos)*/
    $frase = 'La vida es bella';
    echo strpos($frase, 'ida es');
    echo '<br>';

    /* Reemplazar contenido string (str_replace) */
    $frase = str_replace("vida", "moto", $frase);
    echo $frase;
    echo '<br>';

    /* Mayúsculas y Minúsculas */
    echo strtolower($frase);
    echo '<br>';
    echo strtoupper($frase);
    echo '<br>';
    



















    /* Arrays */
    echo '<h1> Arrays </h1>';

    $peliculas = array('Batman','Spiderman','El señor de los Anillos');

    var_dump($peliculas);
    echo '<br>';
    var_dump($peliculas[1]);
    echo '<br>';
    echo $peliculas[2];
    echo '<br>';

    /* Recorrer Arrays */

    /* for */
    echo '<h3> Listado de películas </h3>';
    echo '<ul>';
    for($i = 0; $i < count($peliculas); $i++){
        echo '<li>' . $peliculas[$i] . '</li>';
    }
    echo '</ul>';

    /* foreach */
    echo '<h3> Listado de películas </h3>';
    echo '<ul>';
    foreach($peliculas as $pelicula){
        echo '<li>' . $pelicula . '</li>';
    }
    echo '</ul>';

    unset($peliculas);

    /* Arrays Asociativos */
    $peliculas = array(
        'pelicula1' => 'Batman',
        'pelicula2' => 'Spiderman',
        'pelicula3' => 'El señor de los Anillos'
    );

    echo '<h3> Listado de películas </h3>';
    echo '<ul>';
    foreach($peliculas as $pelicula){
        echo '<li>' . $pelicula . '</li>';
    }
    echo '</ul>';

    echo '<br><br>';
    /* LOS MÉTODOS $_GET y $_POST SON TAMBIÉN ARRAYS ASOCIATIVOS */


    /* Arrays Multidimensionales */

    $contactos = array(
        array(
            'nombre' => 'rafa',
            'email' => 'rafaelrodriguezcalvente@gmail.com'
        ),array(
            'nombre' => 'fran',
            'email' => 'franperez@gmail.com'
        ),array(
            'nombre' => 'nacho',
            'email' => 'nachomarin@gmail.com'
        )
    );

    echo $contactos[2]['email'];
    echo '<br>';
    
    echo '<h3> Listado de contactos </h3>';
    echo '<ul>';
    foreach($contactos as $contacto){
        echo '<li>' . $contacto['email'] . '</li>';
    }
    echo '</ul>';



    /* Funciones Relevantes para Arrays */
    
    /* Ordena alfabéticamente */
    asort($peliculas);
    var_dump($peliculas);
    echo '<br>';
    echo '<br>';
    
    /* Alfabéticamente también, y además, sirve para arrays numéricos */
    sort($peliculas);
    var_dump($peliculas);
    echo '<br>';
    echo '<br>';

    /* Alfabéticamente inverso */
    arsort($peliculas);
    var_dump($peliculas);
    echo '<br>';
    echo '<br>';

    /* Añadir elementos */
    $peliculas[] = 'La vida es bella';
    var_dump($peliculas);
    echo '<br>';
    array_push($peliculas,'Titanic');
    var_dump($peliculas);
    echo '<br>';
    echo '<br>';

    /* Eliminar último elemento */
    array_pop($peliculas);
    var_dump($peliculas);
    echo '<br>';
    /* Eliminar por índica */
    unset($peliculas[0]);
    echo '<br>';

    /* Obtener índice aleatoriamente */
    var_dump(array_rand($peliculas));
    echo '<br>';

    /* Reverse al array */
    var_dump(array_reverse($peliculas));
    echo '<br>';

    /* Buscar en array, devuelve índice si encuentra false si no*/
    var_dump(array_search('Spiderman',$peliculas));
    echo '<br>';

    /* Contar nº elementos */
    echo count($peliculas);
    echo '<br>';
    echo sizeof($peliculas);
    echo '<br>';






















    /* Small Exercise 2 */

    $tabla = array(
        'ACCIÓN' => array('GTA 5','Call of Duty','PUGB'),
        'AVENTURA' => array('Assasins Creed','Crash Bandicoot','Prince of Persia'),
        'DEPORTES' => array('Fifa 19','PES 19','Moto G 19')
    );

    $categorias = array_keys($tabla);

    ?>

    <table border="1">
        <tr>
            <?php foreach($categorias as $categoria): ?>
                <th><?=$categoria?></th>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td><?=$tabla['ACCIÓN'][0]?></td>
            <td><?=$tabla['AVENTURA'][0]?></td>
            <td><?=$tabla['DEPORTES'][0]?></td>
        </tr>
        <tr>
            <td><?=$tabla['ACCIÓN'][1]?></td>
            <td><?=$tabla['AVENTURA'][1]?></td>
            <td><?=$tabla['DEPORTES'][1]?></td>
        </tr>
        <tr>
            <td><?=$tabla['ACCIÓN'][2]?></td>
            <td><?=$tabla['AVENTURA'][2]?></td>
            <td><?=$tabla['DEPORTES'][2]?></td>
        </tr>
    </table>

</body>
</html>