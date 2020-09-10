<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calculadora</title>
</head>

<body>

<p>&nbsp;</p>
<!-- Atributo "action" es el encargado de decir quién será el archivo PHP
que realizará el procesamiento de datos introducido en el teclado. -->
<form name="form1" method="post" action="calculadora.php">
  
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
      <option>Incremento</option>
      <option>Decremento</option>
    </select>
  </p>

  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>

</form>

<p>&nbsp;</p>


<?php

  include ("funciones.php");

  if(isset($_POST["button"])){
      $numero1 = $_POST["num1"];
      $numero2 = $_POST["num2"];
      $operacion = $_POST["operacion"];  
      calcular();  
    }

?>


</body>
</html>