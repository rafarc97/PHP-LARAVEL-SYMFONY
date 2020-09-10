
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>


<?php


  /* funcion isset comprueba si hemos pulsado el boton o no */
  if(isset($_POST["enviando"])){
    /* $_POST es una variable super global (son arrays). Conseguimos almacenar en $usuario, lo
    que el usuario haya introducido en el cuadro de texto*/
    $usuario = $_POST["nombre_usuario"];
    $edad = $_POST["edad_usuario"];

    /* if($usuario == "Rafa" && $edad <= 18){
      echo"<p class='no_validado'>No puedes entrar. Eres joven.</p>";
    }
    else if ($usuario == "Rafa" && $edad <= 40){
      echo "<p class='validado'>Puedes entrar</p>";
	}
	else if ($usuario == "Rafa" && $edad <= 65){
		echo "<p class='validado'>Puedes entrar</p>";
	}
	else if ($usuario == "Rafa" && $edad >= 65){ 
		echo"<p class='no_validado'>No puedes entrar. Eres muy mayor.</p>";
	  } */

	/* OPERADOR TERNARIO: */

	//echo $edad < 18 ? "Eres menor de edad. No puedes acceder" : "Puedes acceder";

	/* Otra forma sería: */

	//$resultado = $edad<18 ? "eres menos de edad..." : "Puedes entrar";
	//echo $resultado;

	/* Otra forma de uso (con operadores lógicos) */
	echo $edad==23 && $usuario=="Rafa" ? "<p class='validado'> Puedes acceder </p>" : "<p class='no_validado'> No puedes acceder </p>";

/* 	switch($usuario){
		case "Rafa":
			echo "Bienvenido Rafa";
			break;
		case "Juan":
			echo "Bienvenido Juan";
			break;
		default:
			echo "Usuario no autorizado";
	} */

	/* Como evaluar dos condiciones con un switch: */

/* 	switch (true){
		case ($dad==23 && $usuario=="Rafa"):
			echo "Bienvenido Rafa";
			break;
		case ($edad==21 %%$usuario=="Amanda");
			echo "Bienvenida Amanda";
			break;
		default:
			echo "Usuario no encontrado";
	} */
}
?>