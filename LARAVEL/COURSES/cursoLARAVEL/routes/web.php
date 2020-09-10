<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('galeria');
});

/*

GET: conseguir
POST: guardar
PUT: actualizar
DELETE: eliminar

*/

/* especificando mostrar-fecha al final de la url nos muestra la fecha */
Route::get('/mostrar-fecha', function(){
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha',array(
        'titulo' => $titulo
    ));
});

/* titulo es un parámetro obligatorio para que funciona la url pelicula */
Route::get('/pelicula/{titulo}',function($titulo){
    return view('pelicula',array(
        'titulo' => $titulo
    ));
});

/* Si queremos que el parámetro sea opcional hacemos lo siguiente: */
Route::get('/pelicula/{titulo?}',function($titulo = 'No hay una película seleccionada'){
    return view('pelicula',array(
        'titulo' => $titulo
    ));
});

/* Usando condiciones */
Route::get('/pelicula/{titulo}/{year?}',function($titulo,$year=2020){
    return view('pelicula',array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[0-9]+'
));

/* La ? indica que es un parámetro opcional y para ello tendremos que indicarle
dentro la función callback cual será en su defecto el parámetro por defecto */
Route::get('/pelicula/{titulo}/{year?}',function($titulo,$year=2020){
    return view('pelicula',array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where([
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
]);


Route::get('/listado-peliculas',function(){
    $titulo = 'Listado de películas';
    // Al estar la vista dentro de una carpeta tenemos que indicarselo
    return view('peliculas.listado',array(
        'titulo' => $titulo
    ));
});

/* Otra forma de pasar variables a la vista, con el método with */
Route::get('/listado-peliculas',function(){
    $titulo = 'Listado de películas';
    $listado = array('Superman','Spiderman','El señor de los anillos');
    // Al estar la vista dentro de una carpeta tenemos que indicarselo
    return view('peliculas.listado')
        ->with('titulo',$titulo)
        ->with('listado',$listado);
});


/* Rutas que redirigen a controladores: esta es la forma óptima de hacer las cosas */
Route::get('/peliculas/{pagina?}', 'PeliculaController@index');

/* Como ponerle un nombre a la ruta el cual podremos ver como cambia con php artisan:route list */
Route::get('/detalle', [
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'
]);

Route::get('/listado', [
    'uses' => 'PeliculaController@index',
    'as' => 'index.pelicula'
]);

/* Middlewares */
Route::get('/detalle/{year?}', [
    'middleware' => 'testyear',
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'
]);

/* Esta ruta nos redirige a la ruta detalle */
Route::get('/redirigir','PeliculaController@redirigir');

/* Con esta línea de código estamos generando varias rutas automáticamente,
las cuales podremos ver ejecutando php artisan:route list */
Route::resource('usuario','UsuarioController');

/*
Para ahorrarnos tener que crear una ruta por cada url, usaremos el controlador de tipo Resource,
que de manera automática tiene una serie de rutas ya preestablecidas
*/

Route::get('/formulario','PeliculaController@formulario');
Route::post('/recibir','PeliculaController@recibir');




//Rutas fruta (usando el grupo de rutas)
Route::group(['prefix'=>'frutas'], function(){
    Route::get('index','FrutaController@index');
    Route::get('detail/{id}','FrutaController@detail');
    Route::get('crear', 'FrutaController@create');
    Route::post('save', 'FrutaController@save');
    Route::get('delete/{id}', 'FrutaController@delete');
    Route::get('edit/{id}', 'FrutaController@edit');
    Route::post('update', 'FrutaController@update');
});















use App\Articulo;


/* ********************************************************************************** */

/* ORM ELOQUENT */
Route::get("/leer",function(){
    //Almacenar todos los registros de la tabla articulos
    //SELECT * FROM ARTICULO
    $articulos = Articulo::all();

    foreach($articulos as $articulo){
        echo $articulo->Nombre_Articulo; //Ese es el nombre de ese atributo en la BD
    }


    //SELECT * FROM ARTICULOS WHERE pais_origen = 'China' ORDER BYLIMIT 1
    //$articulos = Articulo::where("pais_origen","China")->orderBy('Nomre_Articulo','desc')->take(1)->get();

    return $articulos;

    //MAX y MIN
    //$articulos = Articulo::where('seccion','ceramica')->max('Precio');
    //$articulos = Articulo::where('seccion','ceramica')->min('Precio');

});

//INSERT
Route::get('/insertar',function(){
    $articulos = new Articulo;

    $articulos->Nombre_Articulo='Pantalones';
    $articulos->Precio=60;
    $articulos->pais_origen='España';
    $articulos->observaciones='Lavados a la piedra';
    $articulos->seccion='Confeccion';
});

//UPDATE
Route::get('/insertar',function(){

    //el registro de id 7
    $articulos = Articulo::find(7);

    $articulos->Nombre_Articulo='Camisetas';
    $articulos->Precio=90;
    $articulos->pais_origen='China';
    $articulos->observaciones='Lavados a la piedra';
    $articulos->seccion='Confeccion';

    //todos los registros donde seccion=ceramica y pasa a menaje
    Articulo::where('seccion','Ceramica')->update(['seccion'=>'Menaje']);

    //todos los registros donde seccion=ceramica y pais_origen=España y pasa a menaje
    Articulo::where('seccion','Ceramica')->where('pais_origen','España')->update(['seccion'=>'Menaje']);
});

//DELETE
Route::get('/insertar',function(){
    //el registro de id 2
    $articulo = Articulo::find(2);
    $articulo->delete();

    //los registros de seccion=Ferreteria
    Articulo::where('seccion','Ferreteria')->delete();
});


Route::get('/insercion-varios',function(){
    Articulo::create(['Nombre_Articulo'=>'Impresora','Precio'=>50,'pais_origen'=>'Colombia','observaciones'=>'nada que decir','seccion'=>'informatica']);
});

