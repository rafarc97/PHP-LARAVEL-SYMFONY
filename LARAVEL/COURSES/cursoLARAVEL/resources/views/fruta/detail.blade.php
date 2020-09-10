<h1>{{$fruta->nombre}}</h1>
<p>
    {{$fruta->descripcion}}
</p>

<p>
    <a href="{{action('FrutaController@index') }}"> Ir a index </a>
</p>

<a href="{{action('FrutaController@delete',['id' => $fruta->id]) }}">Eliminar</a>
<br><br>
<a href="{{action('FrutaController@edit',['id' => $fruta->id]) }}">Actualizar</a>
