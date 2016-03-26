DROP DATABASE melivrei;
CREATE DATABASE melivrei;
USE melivrei;
CREATE TABLE Pessoa(
	idPessoa	INT		 	NOT NULL PRIMARY KEY AUTO_INCREMENT,
	usuario		VARCHAR(16)	NOT NULL UNIQUE,
	senha		varchar(20)	NOT NULL,
	nome		VARCHAR(60) NOT NULL,
	rg			CHAR(9)		NOT NULL,
	cpf			CHAR(11)	NOT NULL,
	logradouro	VARCHAR(50)	NOT NULL,
	numero		INT(4)		NOT NULL,
	bairro		VARCHAR(50) NOT NULL,
	cidade		VARCHAR(30)	NOT NULL,
	estado		VARCHAR(30)	NOT NULL,
	cep			INT(8)		NOT NULL,
	nascimento	DATE		NOT NULL,
	dddTelefone INT(3)		NULL,
	dddCelular	INT(3)		NULL,
	telefone	INT(9)		NULL,
	celular 	INT(9)		NULL,
	email		VARCHAR(80)	NOT NULL UNIQUE,
	ativo		BOOLEAN		NULL
);

ALTER TABLE Pessoa ADD imagem VARCHAR(36) NULL;

INSERT INTO Pessoa (idPessoa, usuario, senha, nome, rg, cpf, logradouro, numero, bairro, cidade, estado, cep, nascimento, dddTelefone, dddCelular, telefone, celular, email, ativo, imagem)
VALUES (1, 'derickwelman', 'senha123', 'Dérick Welman', '460329595', '43946545807', 'Av. Siqueira Campos', '1057', 'Sumaré', 'Caraguatatuba', 'São Paulo', '11661400', '1996-11-13', '12', '12', '38833292', '992618733', 'derickwelman@hotmail.com', true, '01234567890123456789012345678901.jpg');

CREATE TABLE Tipo(
	idTipo 		INT			NOT NULL PRIMARY KEY AUTO_INCREMENT,
	descricao	VARCHAR(20)	NOT NULL
);

INSERT INTO Tipo (idTipo, descricao) VALUES (1, 'Livro'), (2, 'Revista'), (3, 'Quadrinho');

CREATE TABLE Genero(
	idGenero 	INT			NOT NULL PRIMARY KEY AUTO_INCREMENT,
	descricao	VARCHAR(20)	NOT NULL
);

INSERT INTO Genero (idGenero, descricao) VALUES (1, 'Romance'), (2, 'Ação'), (3, 'Terror'); 

CREATE TABLE Produto(
	idProduto		INT				NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idPessoa		INT				NOT NULL,
	nome			VARCHAR(30)		NOT NULL,
	descricao		VARCHAR(200)	NULL,
	idTipo			INT				NOT NULL,
	idGenero		INT 			NOT NULL,
	autor 			VARCHAR(40)		NULL,
	editora 		VARCHAR(40)		NULL,
	preco			DOUBLE(4,2)		NOT NULL,
	paginas			INT(4)			NULL,
	estado			INT(1)			NOT NULL,
	imagem			VARCHAR(36)		NOT NULL,
	CONSTRAINT fk_produto_idPessoa FOREIGN KEY (idPessoa) REFERENCES Pessoa (idPessoa),
	CONSTRAINT fk_produto_idTipo FOREIGN KEY (idTipo) REFERENCES Tipo (idTipo),
	CONSTRAINT fk_produto_idGenero FOREIGN KEY (idGenero) REFERENCES Genero (idGenero)
	-- CONSTRAINT fk_idAutor FOREIGN KEY idAutor REFERENCES Autor (idAutor),
	-- CONSTRAINT fk_idEditora FOREIGN KEY idEditora REFERENCES Editora (idEditora)
);

INSERT INTO Produto (idProduto, idPessoa, nome, descricao, idTipo, idGenero, autor, editora, preco, paginas, estado, imagem)
VALUES (1, 1, 'Livro', 'Descrição', 1, 1, 'Martelo de Assis', 'Panini', 50.40, 126, 1, "09876543210987654321098765432112.jpg");

CREATE TABLE ProdutoGenero(
	idProduto	INT			NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idGenero	INT
);

CREATE TABLE Genero(
	idGenero
	descricao
);

CREATE TABLE Autor(
	idAutor
	nome
);

CREATE TABLE Editora(
	idEditora
	nome
);