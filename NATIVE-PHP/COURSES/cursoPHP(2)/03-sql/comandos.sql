/* COMANDOS BÁSICOS SQL 


- Ayuda consola SQL 
help;

- Info consola SQL 
status;

- Crea la BBDD "blog_master" 
create DATABASE blog_master;

- Borra la BBDD "blog_master" 
drop DATABASE blog_master;

- Usar BBDD "blog_master" 
use DATABASE blog_master;

- Muestra las tablas de la BBDD seleccionada anteriormente 
show TABLES;

- Crear Tabla
*Recomendable Crear las Tablas de una BBDD que no tengan campos
relacionados con otra Tablas*

CREATE TABLE usuarios(
    id int(11) NOT NULL,
    nombre varchar(100),
    apellidos varchar(255),
    email varchar(100) NOT NULL,
    password varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

- Mostrar Datos de una Tabla
Describe usuarios;

- Borrar una Tabla
Drop TABLE usuarios;

- Renombrar Tabla:
ALTER TABLE usuarios RENAME TO usuarios_renombrada;

- Cambiar Nombre de Columna:
ALTER TABLE usuarios_renombrada CHANGE apellidos apellido varchar(100) NULL;
 
- Modificar Columna sin cambiar nombre
ALTER TABLE usuarios_renombrada MODIFY apellido char(50) NOT NULL;

- Añadir Columna
ALTER TABLE usuarios_renombrada ADD website varchar(100) NOT NULL;

- Añadir Restricción a Columna (hago único los registros del campo email)
ALTER TABLE usuarios_renombrada ADD CONSTRAINT unique_email UNIQUE(email);
 
- Borrar una Columna
ALTER TABLE usuarios_renombrada DROP website;

 

RESTRICCIONES DE INTEGRIDAD al crear Tablas

NOT NULL (campo nunca puede ser nulo)

NULL (campo puede ser nulo)

DEFAULT('hola que tal') (inserta dicho valor al creat la tabla)

AUTO_INCREMENT (se suele usar para ID's) solo se usan para campos que son tambbién CLAVES PRIMARIAS

PRIMARY KEY: se especifica en la última línea así:
    CONSTRAINT pk_usuarios PRIMARY KEY(id)

 */
