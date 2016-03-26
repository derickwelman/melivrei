<meta charset="UTF-8">
<?php
include("../functions/conexao.php");
include("sessionStart.php");

if(!isset($_SESSION['idPessoa'])){
	echo '<script>window.location="login.php";</script>';
	exit();
}

$nomeProduto = $_POST["inputForNomeProduto"];
$descricao = $_POST["inputForDescricao"];
$tipo = $_POST["inputForTipo"];
$genero = $_POST["inputForGenero"];
$preco = str_replace(",", ".", $_POST["inputForPreco"]);
$paginas = $_POST["inputForPaginas"];
$autor = $_POST["inputForAutor"];
$editora = $_POST["inputForEditora"];
$estado = $_POST["inputForEstado"];

include("uploadFile.php");

$query = $con->prepare("INSERT INTO Produto (idPessoa, nome, descricao, idTipo, idGenero, autor, editora, preco, paginas, estado, imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$query->bindValue(1, $_SESSION['idPessoa']);
$query->bindValue(2, $nomeProduto);
$query->bindValue(3, $descricao);
$query->bindValue(4, $tipo);
$query->bindValue(5, $genero);
$query->bindValue(6, $autor);
$query->bindValue(7, $editora);
$query->bindValue(8, $preco);
$query->bindValue(9, $paginas);
$query->bindValue(10, $estado);
$query->bindValue(11, $nome_final);
$result = $query->execute();
if($result){
	echo '<div class="page-header"><h1>Usuário cadastrado com sucesso.</h1></div>';
}else{
	echo '<div class="page-header"><h1>Erro na inserção dos dados.</h1></div>';
}

?>