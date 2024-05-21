CREATE DATABASE projeto_terca;

USE projeto_terca;

CREATE TABLE artigos (
  id INT NOT NULL AUTO_INCREMENT,
  manchete VARCHAR(100) NOT NULL,
  categoria VARCHAR(50) NOT NULL,
  materia TEXT NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO artigos (manchete, categoria, materia) VALUES
('Gordão da XJ sofre acidente', 'Acidentes', 'Conteúdo...'),
('Prova do final do semestre será fácil, diz professora', 'Estudos', 'Conteúdo...');
