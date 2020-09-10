<h1>Detalle de la película</h1>
{{-- Para ir a otra url desde la vista --}}
<a href="{{action('PeliculaController@index')}}">Ir al listado</a>
{{-- Otra forma accediendo a través de su nombre indicado en web.php--}}
<br>
<a href="{{route('index.pelicula')}}">Ir al listado</a>

<br>

<?php isset($_GET['id']) ? $_GET['id'] : ''?>
{{isset($_GET['id']) ? $_GET['id'] : ''}}
