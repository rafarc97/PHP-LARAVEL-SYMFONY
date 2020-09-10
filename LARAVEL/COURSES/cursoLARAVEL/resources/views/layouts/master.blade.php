<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Título - @yield('titulo')</title>
</head>
<body>
    @section('header')
        <h1>CABECERA DE LA WEB(master)</h1>
    @show
    <br>
    {{-- Con yield NO tenemos un contenido por defecto --}}
    {{-- Con section SI puedo tener un contenido por defecto --}}
    <div class="container">
        @yield('content')
    </div>
    <br>
    @section('footer')
        <h1>PIE DE LA WEB(master)</h1>
    @show
</body>
</html>
