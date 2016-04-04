<meta charset="UTF-8">
<?php
include("importSession.php");
include("../functions/conexao.php");

$usuario = $_POST["inputForNomeUsuario"];
$senha = sha1($_POST["inputForSenha"]);
if(isset($_POST["inputForKeepLogged"])){
	$keepLogged = true;
}else{
	$keepLogged = false;
}


echo $keepLogged;

$query = $con->query("SELECT idPessoa, usuario, nome FROM Pessoa WHERE usuario = '$usuario' AND senha = '$senha'");
if($query->rowCount()){
	while($row = $query->fetch(PDO::FETCH_OBJ)){
		session_start();
		$_SESSION['idPessoa'] = $row->idPessoa;
		$_SESSION['usuario'] = $row->usuario;
		$_SESSION['nome'] = $row->nome;

		if($keepLogged){
			setcookie("idPessoa", $row->idPessoa);
			setcookie("usuario", $row->usuario);
			setcookie("nome", $row->nome);
		}
		echo '<script>window.location="../files/index.php";</script>';
	}
}else{
	echo '<script>alert("Nome de usuário ou senha incorretos");window.location="../files/index.php";</script>';
}
?>