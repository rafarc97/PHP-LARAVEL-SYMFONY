<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:white;
	width:50%;
	margin:auto;
	
	
}

table{
  border-radius: 2%;
	border:2px solid #333;
	padding:20px 50px;
	margin:50px auto;
}

body{
	background-color: coral;
}

td{
  color: white;
  font-family: sans-serif;
  font-weight: bold;
  align: center;
}

</style>
</head>

<body>
<h1>Registro de Artículos</h1>
<form name="form1" method="get" action="InsertaRegistro.php">
  <table>
    <tr>
      <td>Sección</td>
      <td><label for="seccion"></label>
      <input type="text" name="seccion" id="seccion"></td>
    </tr>
    <tr>
      <td>Nombre artículo</td>
      <td><label for="n_art"></label>
      <input type="text" name="n_art" id="n_art"></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for="precio"></label>
      <input type="text" name="precio" id="precio"></td>
    </tr>
    <tr>
      <td>Fecha</td>
      <td><label for="fecha"></label>
      <input type="text" name="fecha" id="fecha"></td>
    </tr>
    <tr>
      <td>País de Origen</td>
      <td><label for="p_orig"></label>
      <input type="text" name="p_orig" id="p_orig"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>