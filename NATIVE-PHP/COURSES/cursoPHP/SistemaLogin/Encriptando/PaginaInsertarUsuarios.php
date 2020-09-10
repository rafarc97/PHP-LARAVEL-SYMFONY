<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$usuario= $_POST["usu"];
	$contrasenia= $_POST["contra"];

	//PASSWORD_DEFAULT para que genere la constraseña encriptada de forma automática (no manual)
	//El coste por defecto es 10, e indica el tiempo cte (para cualquier longitud de caracteres de la contraseña)
	//y los recursos hardware quie se utilizarán para conseguir una contraseña más o menos segura. Cuanto
	//mayor es el coste más segura será pero más recursos consumirá y más tiempo tarda en encriptarse.
	$pass_cifrado=password_hash($contrasenia,PASSWORD_DEFAULT, array("cost"=>12));
	
	
				
	try{

		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");		
		
		
		$sql="INSERT INTO USUARIOS_PASS (USUARIOS, PASSWORD) VALUES (:usu, :contra)";
		
		$resultado=$base->prepare($sql);		
		
		
		$resultado->execute(array(":usu"=>$usuario, ":contra"=>$pass_cifrado));		
		
		
		echo "Registro insertado";
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
	}

?>
</body>
</html>