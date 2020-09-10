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
<h1>Eliminación de Artículos</h1>
<form name="form1" method="get" action="EliminaRegistro.php">
  <table>
    <tr>
      <td>Nombre artículo</td>
      <td><label for="n_art"></label>
      <input type="text" name="n_art" id="n_art"></td>
    </tr>
    
    <tr>
      <td><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
    
  </table>
</form>
</body>
</html>