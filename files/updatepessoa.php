<meta charset="UTF-8">
<?php
include("../functions/conexao.php");
include("sessionStart.php");

$senha = $_POST["inputForSenha"];
$senhaAtual = $_POST["inputForSenhaAtual"];
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

if($senhaAtual!=""){
	$query = $con->query("SELECT * FROM Pessoa WHERE idPessoa = '".$_SESSION['idPessoa']."' AND senha = '$senhaAtual'");
	if($query->rowCount()==0){
		echo'<div class="page-header"><h1>A senha atual está incorreta.</h1></div>';
		exit();
	}
	$querySenha = "senha = '".$senha."', ";
}else{
	$querySenha = "";
}

if($_FILES['arquivo']['size']!=0){
	include("uploadFile.php");
	$imagem = ", imagem = '$nome_final'";
}else{
	$imagem = "";
}
$query = $con->query("UPDATE Pessoa SET $querySenha nome = '$nomeCompleto', rg = $rg, cpf = $cpf, logradouro = '$logradouro', numero = $numero, bairro = '$bairro', cidade = '$cidade', estado = '$estado', cep = $cep, nascimento = '$nascimento', dddTelefone = $dddTelefone, dddCelular = $dddCelular, telefone = $telefone, celular = $celular, email = '$email' $imagem WHERE idPessoa = ".$_SESSION['idPessoa'].";");
$result = $query->execute();

if($result){
	echo '<div class="page-header"><h1>Usuário alterado com sucesso.</h1></div>';
}else{
	echo '<div class="page-header"><h1>Erro na atualização dos dados.</h1></div>';
}
?>