<h1>Formulario en Laravel</h1>
<form action="{{action('PeliculaController@recibir')}}" method="POST">
    {{csrf_field()}} {{-- Se hace en todos los formulario para protegerlo de ataques --}}
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <br><br>
    <label for="email">Email</label>
    <input type="email" name="email">
    <br><br>
    <input type="submit" value="Enviar">
</form>
