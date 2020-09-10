/* 

Los dos motores más usados en Bases de Datos son: 

- ENGINE=InnoDb: se usa para que las relaciones entre tablas a través de las claves foráneas
funcionen correctamente y para que haya un aumento del rendimiento en Bases de Datos donde
se hagan muchas operaciones de inserción (INSERT) y modificación (UPDATE) de las tablas existentes.

- ENGINE=MyISAM se usa para Bases de Datos donde la operación más frecuente es la de obtención 
de datos (INSERT). Tiene un problema y es que no sirve para Bases de Datos donde las tablas
son relacionales (ignora las claves foráneas).

*/

CREATE TABLE usuarios(
    id int(255) AUTO_INCREMENT NOT NULL,
    nombre varchar(100),
    apellidos varchar(100),
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    fecha date,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
    id int(255) AUTO_INCREMENT NOT NULL,
    nombre varchar(100),
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
    id int(255) AUTO_INCREMENT NOT NULL,
    usuario_id int(255) NOT NULL,
    categoria_id int(255) NOT NULL,
    titulo varchar(255) NOT NULL,
    descripcion mediumtext,
    fecha date NOT NULL,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE CASCADE
)ENGINE=InnoDb;

/* 

ON DELETE CASCADE: se indica para que cuando un registro de la tabla categoría se elimine,
también se borre de los registros de la tabla entrada.

ON UPDATE CASCADE: mismo mecanismo pero al actualizar.

ON DELETE SET NULL: mismo mecanimos, cuando se borre se coloca el campo categoria_id de la 
tabla entrada como NULL.

ON DELETE SET DEFAULT: igual pero como DEFAULT.

ON DELETE NO ACTION: no hace nada (valor por defecto).

*/