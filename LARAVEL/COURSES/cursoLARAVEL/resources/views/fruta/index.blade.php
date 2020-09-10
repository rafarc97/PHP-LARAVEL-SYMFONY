<h1>Listado de Frutas</h1>
<h3><a href=" {{ action('FrutaController@create') }}">Crear fruta</a></h3>

@if(session('status'))
    <p style="background: green;">
        {{session('status')}}
    </p>
@endif
<ul>
    @foreach($frutas as $fruta)
        <li>
        <a href=" {{ action('FrutaController@detail', ['id' => $fruta->id] ) }}"> {{$fruta->nombre}} </a>
        </li>
    @endforeach
</ul>
