
CREATE DATABASE web_personal_jonatan CHARSET UTF8 COLLATE utf8_spanish_ci;

CREATE TABLE  estudios (
    id  			 int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tipo_estudio	 varchar (25) NOT NULL, 
	nombre_estudio	 varchar (60) NOT NULL,  
	institucion_educ varchar (60) NOT NULL,
	ciudad			 varchar (40),
	fecha_graduacion DATE)
ENGINE = InnoDB DEFAULT CHARSET = utf8  COLLATE utf8_spanish_ci;

INSERT INTO estudios (tipo_estudio,nombre_estudio, institucion_educ, ciudad, fecha_graduacion) VALUES
('Primaria', 'Educacion primaria', 'Policarpa Salabarrieta', 'Villeta Cundinamarca', '2013-12-01'),
('Bachierato', 'Bachiller Tecnico en Promocion Social', 'Instituto Nacional De Promocion Social', 'Villeta Cundinamarca', '2019-12-01'),
('Tecnico', 'Comercio Internacional', 'C D A E Sena', 'Villeta Cundinamarca', '2019-12-01'),
('Tecnologo', 'Analisis y Desarrollo de software (Proceso)', 'C D A E Sena', 'Villeta Cundinamarca', '2022-12-13');




create table contacto(
    Id int(0) AUTO_INCREMENT,
    Nombre varchar(60) not null,
    GeneroPersona varchar(10) not null,
    NumeroTelefonico varchar(10) not null,
    TipoPersona varchar(10) not null,
    CorreoElectronico varchar(60) not null,
    Mensaje text not null,
    Fecha_reg date not null,
    PRIMARY KEY (Id)
);


create table glosario (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    palabra varchar(500),
    significado varchar(1000),
    ilustracion varchar(60)
);

INSERT INTO glosario
(palabra, significado, ilustracion)
VALUES
('Android', 'Sistema operativo mas popular del mundo dedicado principalmente a dispositivos móviles.El código fuente es desarrollado por Google bajo el Proyecto de Codigo Abierto Android (AOSP, Android Open Source Project). Usualmente las versiones superiores son lanzada anualmente y son anunciadas en las conferencias de Google I/O. skiller', 'img/android.jpg');


INSERT INTO glosario
(palabra, significado, ilustracion)
VALUES
('Algoritmo', 'En matemáticas, lógica, ciencias de la computación y disciplinas relacionadas, un algoritmo es un conjunto de instrucciones 
                o reglas definidas y no-ambiguas, ordenadas y finitas que permite, típicamente, solucionar un problema, realizar un cómputo, 
                procesar datos y llevar a cabo otras tareas o actividades.', 'img/algoritmo.png');

INSERT INTO glosario
(palabra, significado, ilustracion)
VALUES
('Almacenamiento', 'En matemáticas, lógica, ciencias de la computación y disciplinas relacionadas, un algoritmo 
                    es un conjunto de instrucciones o reglas definidas y no-ambiguas, ordenadas y finitas que 
                    permite, típicamente, solucionar un problema, realizar un cómputo, procesar datos y llevar 
                    a cabo otras tareas o actividades.', 'img/medioAlmacenamiento.jpg'),
('Ascii', 'ASCII, pronunciado generalmente o [ásθi] o [ási], es un código de caracteres basado en el alfabeto
                    latino, tal como se usa en inglés moderno. Fue creado en 1963 por el Comité Estadounidense de 
                    estándares como una evolución de los conjuntos de códigos utilizados entonces en telegrafía.', 'img/Ascii.jpg'),
('Background', 'La propiedad background es una de las "propiedades shorthand" que define CSS y que se utilizan 
                para establecer de forma abreviada el valor de una o más propiedades individuales. En concreto, 
                background permite establecer simultáneamente las cinco propiedades relacionadas con el color e 
                imagen de fondo de cada elemento.Gracias a la propiedad background se puede establecer de forma 
                directa el color de fondo (background-color),la imagen de fondo (background-image), su posición  
                (background-position), si la imagen es fija o no (background-attachment) y/o si la imagen se repite
                o no (background-repeat). Puedes consultar la documentación de cada propiedad individual para 
                acceder a sus ejemplos de uso.', 'img/backgraund.jpg'),
('Base de Datos', 'Base de información almacenada y utilizada por un programa. Las bases de datos tradicionales están 
                                    organizadas por campos, registros y archivos. Las bases de datos resguardan información clave para 
                                    el negocio. Por ejemplo, las grandes tiendas de autoservicio necesitan y utilizan una base de datos 
                                    para saber cuántos productos tienen en almacén, cuáles son los más vendidos, los horarios con más 
                                    flujo de ventas, etcétera.', 'img/bases_de_datos.png');

INSERT INTO glosario
(palabra, significado, ilustracion)
VALUES
('Base de Datos NoSQL', 'Las bases de datos NoSQL están diseñadas específicamente para modelos de datos específicos y tienen 
                        esquemas flexibles para crear aplicaciones modernas. Las bases de datos NoSQL son ampliamente reconocidas 
                        porque son fáciles de desarrollar, por su funcionalidad y el rendimiento a escala.', 'img/NoSQL.jpg');

INSERT INTO glosario
(palabra, significado, ilustracion)
VALUES
('Base de Datos NoSQL', 'Las bases de datos NoSQL están diseñadas específicamente para modelos de datos específicos y tienen 
                        esquemas flexibles para crear aplicaciones modernas. Las bases de datos NoSQL son ampliamente reconocidas 
                        porque son fáciles de desarrollar, por su funcionalidad y el rendimiento a escala.', 'img/NoSQL.jpg');

INSERT INTO glosario
(palabra, significado, ilustracion)
VALUES
('Base de Datos Relacional', 'Una base de datos relacional es un tipo de base de datos que almacena y proporciona acceso a datos 
                            relacionados entre sí. Las bases de datos relacionales se basan en el modelo relacional, una forma 
                            intuitiva y directa de representar datos en tablas. 
                            Por ejemplo supongamos que en una tabla tenemos la información de nuestros clientes. Cada cliente 
                            tiene su propio nombre, teléfono, correo y dirección. Y cada cliente tiene un vendedor. Todos los 
                            vendedores tienen un nombre, telefono, email, edad etc.', 'img/base_de_datos_relacional.jpg');