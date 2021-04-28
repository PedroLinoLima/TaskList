CREATE DATABASE tasklist;

USE tasklist;

CREATE TABLE tblTasks (
	id INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(255) NOT NULL
);

SELECT * FROM tblTasks;

INSERT INTO tblTasks (descricao) VALUES ("Estudar JAVA");

INSERT tblTasks (descricao) VALUES ("Fazer exercícios PHP");

INSERT tblTasks (descricao) VALUES ("Ler o livro clean code");

INSERT tblTasks (descricao) VALUES ("Ter hábitos saudáveis");

DELETE FROM tblTasks WHERE ID <> 0;

