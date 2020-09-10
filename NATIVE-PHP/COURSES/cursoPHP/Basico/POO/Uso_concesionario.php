<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");
	
	/* Para manipular la variable ayuda, como no pertenece a ningún objeto
	si no que pertenece a la propia clase, por ello se le llama de esta manera
	distinta. Esto se puede hacer porque es una variable no privada. Si
	fuera privada no podríamos modificarla desde aquí (fuera de la clase). */
	//Compra_vehiculo::$ayuda=10000;
	Compra_vehiculo::descuento_gobierno();

	
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");
	
	echo $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_vehiculo("compacto");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo $compra_Ana->precio_final();
	
	
	
	


?>
</body>
</html>