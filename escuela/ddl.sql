USE bd_escuela;

CREATE TABLE ESTUDIANTE (
	id_estudiante 	INT PRIMARY KEY AUTO_INCREMENT,
    nombre 			VARCHAR(250) NOT NULL
);

CREATE TABLE MATERIA (
	id_materia 	INT PRIMARY KEY AUTO_INCREMENT,
    nombre 		VARCHAR(100) NOT NULL
);

CREATE TABLE NOTA (
	id_nota 		INT PRIMARY KEY AUTO_INCREMENT,
    anio			INT NOT NULL,
    bimestre		INT NOT NULL,
    nota			INT NOT NULL,
    id_estudiante	INT NOT NULL,
    id_materia		INT NOT NULL,
    FOREIGN KEY (id_estudiante) REFERENCES ESTUDIANTE(id_estudiante),
    FOREIGN KEY (id_materia) REFERENCES MATERIA(id_materia)
);

