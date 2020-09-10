/* 

- Insertar Registros (fechas en formato Americano Y-m-d)
INSERT INTO usuarios VALUES (null,'Rafa','Rodríguez','rafael@gmail.com','rafapass','2020-08-15');
INSERT INTO usuarios VALUES (null,'Fran','Pérez','fran@gmail.com','franpass','2019-08-15');
INSERT INTO usuarios VALUES (null,'Amanda','López','amanda@gmail.com','amandapass','2019-08-15');
INSERT INTO categorias VALUES (null,'Acción');
INSERT INTO categorias VALUES (null,'Rol');
INSERT INTO categorias VALUES (null,'Deportes');
INSERT INTO entradas VALUES (null,1,1,'Novedades del GTA 5','Review del GTA 5',CURDATE());
INSERT INTO entradas VALUES (null,1,2,'Novedades del LOL','Review del LOL',CURDATE());
INSERT INTO entradas VALUES (null,1,3,'Nuevos jugadores del FIFA 2019','Review del FIFA 2019',CURDATE());
INSERT INTO entradas VALUES (null,2,1,'Novedades del Assasins Online','Review del Assasins Online',CURDATE());
INSERT INTO entradas VALUES (null,2,2,'Novedades del WOW','Review del WOW',CURDATE());
INSERT INTO entradas VALUES (null,2,3,'Nuevos jugadores del PES 2019','Review del PES 2019',CURDATE());
INSERT INTO entradas VALUES (null,3,1,'Novedades del Call Of Duty','Review del Call Of Duty',CURDATE());
INSERT INTO entradas VALUES (null,3,2,'Novedades del Fortnite','Review del Fortnite',CURDATE());
INSERT INTO entradas VALUES (null,3,3,'Nuevos jugadores del Formula 1 2019','Review del Formula 1',CURDATE());







- Insertar Registros con ciertas Columnas
INSERT INTO usuarios(email,password) VALUES('admin@admin.com','admin');







- Obtener todos los Registros
SELECT * FROM usuarios;







- Obtener ciertos los Registros
SELECT nombre, apellidos, email FROM usuarios;







- Operadores Aritméticos
SELECT email, (7+7) AS 'OPERACIÓN' FROM usuarios;
SELECT email, (id+7) AS 'OPERACIÓN' FROM usuarios;







- Funciones Matemáticas 
SELECT ABS(-7) AS 'OPERACIÓN' FROM usuarios; VALOR ABSOLUTO
SELECT CEIL(7.23) AS 'OPERACIÓN' FROM usuarios; REDONDEA A LA ALTA
SELECT FLOOR(7.23) AS 'OPERACIÓN' FROM usuarios; REDONDEA A LA BAJA
SELECT PI() AS 'OPERACIÓN' FROM usuarios; SACA NÚMERO PI
SELECT RAND() AS 'OPERACIÓN' FROM usuarios; SACA Nº ALEATORIO ENTRE 0 Y 1
SELECT ROUND(7.91231,3) AS 'OPERACIÓN' FROM usuarios; REDONDEO A 3 DECIMALES
SELECT TRUNCATE(7.12312,3) AS 'OPERACIÓN' FROM usuarios; REDONDEO A 3 DECIMALES
SELECT SQRT(25) AS 'OPERACIÓN' FROM usuarios; RAÍZ CUADRADA







- Funciones para Texto
SELECT UPPER(nombre) FROM usuarios; MAYÚSCULAS
SELECT LOWER(nombre) FROM usuarios; MINÚSCULAS
SELECT CONCAT(nombre,'',apellido) AS 'CONCERSIÓN' FROM usuarios; CONCATENAR
SELECT UPPER(CONCAT(nombre,'',apellido)) AS 'CONCERSIÓN' FROM usuarios; MIX
SELECT LENGTH(CONCAT(nombre,'',apellido)) AS 'CONCERSIÓN' FROM usuarios; LONGITUD TEXTO
SELECT TRIM(CONCAT('      ',nombre,'',apellido,'       ')) AS 'CONCERSIÓN' FROM usuarios; ELIMINA ESPACIOS BLANCOS







- Funciones para Texto
SELECT email, CURDATE() AS 'FECHA ACTUAL' FROM usuarios; FECHA ACTUAL
SELECT email, DATEDIFF(fecha,CURDATE()) FROM usuarios; DÍAS DIFERENCIAS
SELECT email, DAYNAME(fecha) FROM usuarios; NOMBRE DEL DÍA
SELECT email, DAYOFMONTH(fecha) FROM usuarios; DÍA DEL MES
SELECT email, DAYOFWEEK(fecha) FROM usuarios; DÍA DE LA SEMANA
SELECT email, DAYOFYEAR(fecha) FROM usuarios; DÍA DEL AÑO
SELECT email, MONTH(fecha) FROM usuarios; MES DEL AÑO
SELECT email, YEAR(fecha) FROM usuarios; AÑO
SELECT email, DAY(fecha) FROM usuarios; DÍA
SELECT email, HOUR(fecha) FROM usuarios; HORA
SELECT email, CURTIME FROM usuarios; HORA ACTUAL
SELECT email, SYSDATE() FROM usuarios; FECHA Y HORA ACTUAL
SELECT email, DATE_FORMAT(fecha,'%d-%m-%Y) FROM usuarios; FORMATO PERSONALIZADO







- Funciones Generales
SELECT email, ISNULL(apellidos) FROM usuarios; SI ALGÚN REGISTRO DEL CAMPO apellidos es nulo
SELECT email, STRCMP('hola','HOLA) FROM usuarios;  STRING COMPARE
SELECT VERSION() FROM usuarios; VERSIÓN SQL
SELECT USER() FROM usuarios; USUARIOS SQL
SELECT DISTINCT USER() FROM usuarios; USUARIOS SQL sin repetir REGISTROS
SELECT IFNULL(apellidos,'ESTE CAMPO ESTÁ VACÍO) FROM usuarios; SI NULO=>MUESTRA EN LUGAR DE NULL,'ESTE CAMPO ESTÁ VACÍO'







- Comandos WHERE, LIKE, LIMIT, ORDER BY, ...
SELECT * FROM usuarios WHERE email = 'rafael@gmail.com';
SELECT * FROM usuarios WHERE YEAR(fecha) = 2019;
SELECT * FROM usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);
SELECT * FROM usuarios WHERE apellidos LIKE '%d%' AND password = 'rafapass';
SELECT * FROM usuarios WHERE (YEAR(fecha) % 2 = 0);
SELECT nombre, apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2020;
SELECT * FROM usuarios ORDER BY nombre DESC; (ASC por defecto)
SELECT * FROM usuarios LIMIT 2; SACA MÁXIMO 2 REGISTROS
SELECT * FROM usuarios LIMIT 0,2; SACA DE LOS REGISTROS 1 AL 3







- Actualizar Registros
UPDATE usuarios SET fecha=CURDATE(), apellidos='Calvente' WHERE id = 1;







- Eliminar Registros
DELETE FROM usuarios WHERE email='fran@gmail.com'; 







- Consultas Agrupamiento
Muestra nºentradas/categoría con sus respectivas id_categorias
SELECT COUNT(titulo) AS 'NÚMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

En las consultas de agrupamiento (GROUP BY) se usa HAVING en lugar de WHERE para establecer condiciones,
ya que WHERE actúa sobre una columna de datos, no sobre un conjunto columnas.
SELECT COUNT(titulo) AS 'NÚMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >=3;







-Funciones de Agrupamiento
AVG - MEDIA
COUNT - RECUENTO
MAX - MÁXIMO
MIN - MÍNIMO
SUM - SUMA CONTENIDO DE GRUPO

SELECT AVG(id) AS 'Media de nº IDs de entradas' FROM entradas;
SELECT SUM(id) AS 'Suma de nº IDs de entradas' FROM entradas;
SELECT MAX(id) AS 'Max nº IDs de entradas' FROM entradas;
SELECT MIN(id) AS 'Min nº IDs de entradas' FROM entradas;








-Subconsultas

#Selecciona SOLO usuarios que tienen entradas
SELECT * FROM usuarios WHERE id IN(
    SELECT usuario_id FROM entradas
);

#Selecciona SOLO usuarios que NO tienen entradas
SELECT * FROM usuarios WHERE id NOT IN(
    SELECT usuario_id FROM entradas
);

#Selecciona usuarios que tengan alguna entrada de GTA
SELECT nombre,apellidos FROM usuarios WHERE id IN(
    SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%"
);

#Selecciona entradas de la categoría 'acción' utilizando su nombre
SELECT titulo FROM entradas WHERE categoria_id IN(
    SELECT id FROM categorias WHERE nombre = 'Acción'
);

#Mostrar categorías > 2 entradas
SELECT nombre FROM categorias WHERE id IN(
    SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3
);

#Mostrar usuarios que crearon una entrada un martes
SELECT * FROM usuarios WHERE id IN(
    SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=7
);

#Mostrar usuario que tenga más entradas
SELECT * FROM usuarios WHERE id IN(
    SELECT MAX(usuario_id) FROM entradas GROUP BY usuario_id HAVING COUNT(usuario_id)
);

#Mostrar Categorías sin entradas
SELECT * FROM categorias WHERE id NOT IN(
    SELECT categoria_id FROM entradas
);






- Consultas Multitablas


 */