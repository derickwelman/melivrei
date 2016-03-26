<meta charset="UTF-8">
<?php
include("../functions/conexao.php");

$nomeUsuario = $_POST["inputForNomeUsuario"];
$senha = $_POST["inputForSenha"];
$nomeCompleto = $_POST["inputForNomeCompleto"];
$rg = $_POST["inputForRG"];
$cpf = $_POST["inputForCPF"];
$logradouro = $_POST["inputForLogradouro"];
$numero = $_POST["inputForNumero"];
$bairro = $_POST["inputForBairro"];
$cidade = $_POST["inputForCidade"];
$estado = $_POST["inputForEstado"];
$cep = $_POST["inputForCEP"];
$nascimento = $_POST["inputForDataNascimento"];
$dddTelefone = substr($_POST["inputForTelefone"], 1, 2);
$dddCelular = substr($_POST["inputForCelular"], 1, 2);
$telefone = substr($_POST["inputForTelefone"], 4);
$celular = substr($_POST["inputForCelular"], 4);
$email = $_POST["inputForEmail"];

$query = $con->query("SELECT idPessoa, usuario, email FROM Pessoa WHERE usuario = '$nomeUsuario' OR email = '$email'");

if($query->rowCount()==0){

	include("uploadFile.php");

	$query = $con->prepare("INSERT INTO Pessoa (usuario, senha, nome, rg, cpf, logradouro, numero, bairro, cidade, estado, cep, nascimento, dddTelefone, dddCelular, telefone, celular, email, ativo, imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

	$query->bindValue(1, $nomeUsuario);
	$query->bindValue(2, $senha);
	$query->bindValue(3, $nomeCompleto);
	$query->bindValue(4, $rg);
	$query->bindValue(5, $cpf);
	$query->bindValue(6, $logradouro);
	$query->bindValue(7, $numero);
	$query->bindValue(8, $bairro);
	$query->bindValue(9, $cidade);
	$query->bindValue(10, $estado);
	$query->bindValue(11, $cep);
	$query->bindValue(12, $nascimento);
	$query->bindValue(13, $dddTelefone);
	$query->bindValue(14, $dddCelular);
	$query->bindValue(15, $telefone);
	$query->bindValue(16, $celular);
	$query->bindValue(17, $email);
	$query->bindValue(18, true);
	$query->bindValue(19, $nome_final);
	$result = $query->execute();
	if($result){
		echo '<div class="page-header"><h1>Usuário cadastrado com sucesso.</h1></div>';
	}else{
		echo '<div class="page-header"><h1>Erro na inserção dos dados.</h1></div>';
	}
}else{
	echo'<div class="page-header"><h1>Usuário ou email já existente.</h1></div>';
}
?>