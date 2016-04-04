INSERT INTO Pessoa (idPessoa, usuario, senha, nome, rg, cpf, logradouro, numero, bairro, cidade, estado, cep, nascimento, dddTelefone, dddCelular, telefone, celular, email, ativo, imagem)
VALUES 
	(1, 'derickwelman', '3decd49a6c6dce88c16a85b9a8e42b51aa36f1e2', 'Dérick Welman', '460329595', '43946545807', 'Av. Siqueira Campos', '1057', 'Sumaré', 'Caraguatatuba', 'São Paulo', '11661400', '1996-11-13', '12', '12', '38833292', '992618733', 'derickwelman@hotmail.com', true, '01234567890123456789012345678901.jpg'),
	(2, 'rianyoliveira', '3decd49a6c6dce88c16a85b9a8e42b51aa36f1e2', 'Riany Oliveira', '123456789', '12345678901', 'Av. Rua da Riany', '1234', 'Bairro da Riany', 'Caraguatatuba', 'São Paulo', '11660400', '1996-01-01', '12', '12', '38833883', '912345678', 'rianyoliveira@gmail.com', true, '01234567890123456789012345678902.jpg');

INSERT INTO Produto (idProduto, idPessoa, nome, descricao, idTipo, idGenero, autor, editora, preco, paginas, estado, imagem) VALUES 
	(1, 1, 'Produto1', 'Descrição1', 1, 1, 'Autor1', 'Editora1', 100.00, 100, 1, '01234567890123456789012345678903.jpg'),
	(2, 2, 'Produto2', 'Descrição2', 2, 2, 'Autor2', 'Editora2', 200.00, 200, 2, '01234567890123456789012345678904.jpg');