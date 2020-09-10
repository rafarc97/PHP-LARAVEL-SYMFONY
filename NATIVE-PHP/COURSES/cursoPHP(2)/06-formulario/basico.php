<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">

        <!-- 
            
            Atributos Relevantes Inputs:
            
            - autofocus: para al cargar web puntero se posicione inmediatamente en dicho input
            - disabled: para deshabilitar la escritura en dicho input
            - maxlength: max longitud caractéres
            - minlength: min longitud de caractéres
            - pattern: indicar patrón (formato). Existen muchos patrones ya construidos
                        en google para muchos campos como emails, ....
         
            - required: obligación de completar dicho campo
            - placeholder: texto preintroducido como ejemplo. P. ej: "Escribir nombre..."
            - value: texto preintroducido como texto real. P. ej: "Rodríguez"
            - checked: campo checkbox marcado por default
            - multiple: permite elegir varios archivos a la vez
            - type="hidden" esconder el input

        -->


        <label for="nombre">Nombre: </label>
        <p><input type="text" name="nombre" disabled maxlength="5" required placeholder="Escribir nombre..."></p>

        <label for="apellido">Apellido: </label>
        <p><input type="text" name="apellido" autofocus minlength="3" pattern="[A-Z ]" value="Rodríguez"></p>
        <input type="submit" value="Enviar">

        <label for="boton">Botón: </label>
        <p><input type="button" name="boton" value="Clícame"></p>
        
        <label for="sexo">Sexo: </label>
        <p>
            Hombre: <input type="checkbox" name="sexo" value="hombre">
            Mujer: <input type="checkbox" name="sexo" value="mujer" checked>

        </p>
        
        <label for="color">Color: </label>
        <p><input type="color" name="color"></p>
        
        <label for="fecha">Fecha: </label>
        <p><input type="date" name="fecha"></p>
        
        <label for="correo">Email: </label>
        <p><input type="email" name="correo"></p>

        <label for="archivo">Archivo: </label>
        <p><input type="file" name="archivo" multiple></p>

        <label for="numero">Número: </label>
        <p><input type="number" name="numero"></p>

        <label for="pass">Contraseña: </label>
        <p><input type="password" name="pass"></p>

        <label for="pass">Contraseña: </label>
        <p><input type="password" name="pass"></p>

        <label for="continente">Continente: </label>
        <p>
            América del Sur: <input type="radio" name="continente" value="America del Sur">
            Europa: <input type="radio" name="continente" value="Europa">
            Asia: <input type="radio" name="continente" value="Asia">
        </p>

        <label for="web">Página web: </label>
        <p><input type="url" name="web"></p>

        <textarea name="" id="" cols="30" rows="10"></textarea> 
        <br>

        Películas:
        <select name="peliculas" id="">
            <option value="Spiderman">Spiderman</option>
            <option value="Batman">Batman</option>
            <option value="La jungla de cristal">La jungla de cristal</option>
            <option value="Gran torino">Gran torino</option>
        </select>
        <br>

    </form>
</body>
</html>