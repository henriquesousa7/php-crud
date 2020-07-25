CREATE DATABASE livraria;
USE livraria;

CREATE TABLE livros (
	id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(255),
    autor VARCHAR(255),
    categoria VARCHAR(30), 
	PRIMARY KEY(id)
);

INSERT INTO livros (titulo, autor, categoria) VALUES('Dom Casmurro','Machado de Assis','Romance');
INSERT INTO livros (titulo, autor, categoria) VALUES('Memórias Póstumas de Brás Cubas','Machado de Assis','Romance');

