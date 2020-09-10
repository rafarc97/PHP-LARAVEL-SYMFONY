@extends('layouts.master') {{-- heredamos la plantilla master --}}


{{-- Sustituye el titulo de la web --}}
@section('titulo','Master en PHP')


{{-- eN @yield('content') de master.blade.php añade lo de dentro de @section('content')--}}
@section('content')
<h1>Contenido</h1>
@stop

@section('header')
    @parent() {{-- añade lo puesto en la plantilla master --}}
    <h2>hola</h2> {{-- Sustituye la cabecera de la plantilla --}}
@stop
