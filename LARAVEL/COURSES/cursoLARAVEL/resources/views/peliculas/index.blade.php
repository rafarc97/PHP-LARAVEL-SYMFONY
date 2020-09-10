<h1>{{$titulo}}</h1>
<p>(acción index del controlador IndexController)</p>
<h2>Página: {{$pagina}}</h2>
{{-- Para ir a otra url desde la vista --}}
<a href="{{action('PeliculaController@detalle')}}">Ir al detalle</a>
{{-- Otra forma accediendo a través de su nombre indicado en web.php--}}
<br>
<a href="{{route('detalle.pelicula',['id' => 12])}}">Ir al detalle</a>
