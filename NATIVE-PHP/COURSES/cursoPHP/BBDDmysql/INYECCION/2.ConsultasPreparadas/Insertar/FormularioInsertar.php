<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        <style>
			table{
				background-color:#FFC;
				border:1px solid #FF0000;
				margin:auto;
				padding:25px;
			}
		h1{
			width:50%;
			margin:25px auto;
			
			text-align:center;
			margin-bottom:50px;
		}
		
		body{
			background-color:#FC9;
		}
		
		#boton{
			padding-top:25px;
			
		}
		
		</style>
    </head>
    
    <body>
    <h1> Alta de artículos nuevos</h1>
    
        <form action="ResultadosInsertar.php" method="get">
        <table>
        <tr><td>
            <label>Usuario:</label></td><td> <input type="text" name="user"></td></tr>
            <tr><td><label>Coontraseña:</label></td><td><input type="text" name="password"></td></tr>
          <tr><td colspan="2" align="center" id="boton">  <input type="submit" name="enviando" value="¡Dale!"></td></tr>
        </table>
        </form>
    
    </body>
    
</html>