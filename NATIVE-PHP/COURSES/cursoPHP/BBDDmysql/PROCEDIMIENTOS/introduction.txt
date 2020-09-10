<!-- 
    
    
//////////OPERACIONES BÁSICAS://////////


CREATE DATABASE nombre_bbdd; //crear bbdd
DROP DATABASE nombre_bbdd; //borrar bbdd
SHOW DATABASES; //mostrar bbdd
USE nombre_bbdd; //indicamos bbdd para trabajar con ella


//CREAR TABLA
CREATE TABLE nombre_tabla (NOMBRE VARCHAR(30), CLAVE VARCHAR(30)); 
DROP TABLE nombre_tabla; //borra tabla
DESCRIBE nombre_tabla; //muestra la estructura de esa tabla
ALTER TABLE DATOSPERSONALES ADD COLUMN EDAD INT(2); //crea la columna edad en la tabla datos personales
ALTER TABLE nombre_tabla DROP nombre_columna; //alterar de manera que borramos una columna de la tabla
INSERT INTO DATOSUSUARIOS (NIF,NOMBRE,APELLIDO,EDAD) VALUES ("987654321A","Amanda","López",21) //insertar datos en tabla



//////////OPERACIONES CONSULTAS://////////

SELECT NIF,NOMBRE,APELLIDO,EDAD FROM DATOSPERSONALES //mostrar dichas columnas de la tabla (se puede poner * para todas)




///////////////TIPOS DE DATOS://////////////////
Tipos de datos que podemos usar en las tablas

-binary: datos de tipo binario. Entre paréntesis cantidad exacta valores que vamos a permitir.
-varbinary: entre parentesis cantidad maxima pero podremos ingresar menos (en binary no).
-char: almecena caracteres. Pueden ser números sin utilización para op.  aritm. Entre paréntesis cantidad exacta valores que vamos a permitir.
-varchar: entre parentesis cantidad maxima pero podre escribirle menos (en char no).
-datetime: datos en formato fecha. Rango de 1/1/1753 - 31/12/9999. 
-datetime2: rango de 1/1/0001 - el 31/12/9999.
-smalldatetime: rango 1/1//1900 - 6/6/2079.
-image: datos binarios orientados a imágenes. El pc puede almecenar una imagen en 1's y 0's. Soporta hasta 2GB de información.
-int: enteros. Rango de -2.147.483.648 - 2.147.483.647.
-tinyint: rango de 0 255 ( no puede ser negativo)
-smallint: rango de -32.768 - 32767.
-Bigint: rango mayor que int.
-money: valores numericos en formato moneda. rango de -922.337.203.685.477,5808 - 922.337.203.685.477,5807.
-numeric o decimal (son iguales): numeros formato decimal. Campo precision (total) y escala (decimales). P.ej 123,45 (precisión 5 escala 2).
-smallmoney (similar a money): su rango es de -214.748,3648 - 214.748,3647.



 -->