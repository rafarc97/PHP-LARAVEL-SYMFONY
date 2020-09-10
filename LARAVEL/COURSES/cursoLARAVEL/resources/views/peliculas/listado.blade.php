<h1><?=$titulo?></h1>
<h2><?=$listado[2]?></h2>

<br>
{{-- Usando la forma de BLADE --}}
<br>

<h1>{{$titulo}}</h1>
<h2>{{$listado[2]}}</h2>
<p>{{date('Y')}}</p>





{{-- Condicional ternario en PHP --}}
<?= isset($director) ? $director : 'No hay director <br>' ?>
{{-- Condicional ternario en BLADE --}}
{{ $director ?? "No hay director" }}





{{-- CONDICIONALES --}}

@if($titulo && count($listado) >= 5)
    <h1>El titulo existe y es este: {{$titulo}} y el listado es mayor= a 5</h1>
@elseif($titulo)
    <h1>El titulo "{{$titulo}}" existe pero el listado no es mayor a 5</h1>
@else
    <h1>El titulo no existe</h1>
@endif





{{-- BUCLES --}}

@for($i = 0; $i <= 10; $i++)
    El número es: {{$i}} <br>
@endfor

<hr>

<?php $contador = 1 ?>
@while($contador < 20)
    @if($contador % 2 == 0)
        NUMERO PAR: {{$contador}}
    @endif

    <br>
    <?php $contador++ ?>
@endwhile

<hr>

@foreach($listado as $pelicula)
    <p>{{$pelicula}}</p>

    <br>

@endforeach





{{-- PASAR VISTAS DENTRO DE OTRAS VISTAS "carpeta include dentro de views" --}}
@include('includes.header') {{-- Estos includes los pondremos donde queramos que aparezca dentrod e nuestra vista listado.blade.php--}}
@include('includes.footer')

