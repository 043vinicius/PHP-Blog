CREATE DATABASE projeto_terca;

USE projeto_terca;

CREATE TABLE escritores(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE artigos (
  id INT NOT NULL AUTO_INCREMENT,
  manchete VARCHAR(100) NOT NULL,
  categoria VARCHAR(50) NOT NULL,
  materia TEXT NOT NULL,
  escritor_id INT NOT NULL,
  data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (escritor_id) REFERENCES escritores(id),
  PRIMARY KEY (id)
);

CREATE TABLE comentarios(
  id INT NOT NULL AUTO_INCREMENT,
  comentario TEXT NOT NULL,
  artigo_id INT NOT NULL,
  data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (artigo_id) REFERENCES artigos(id),
  PRIMARY KEY (id)
);

INSERT INTO escritores (id, nome, email, senha) VALUES
(1, 'admin', 'dev@admin.com', '123456');
