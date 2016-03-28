<meta charset="UTF-8">
<?php
include("importSession.php");
include("../functions/conexao.php");
include("sessionStart.php");

if(!isset($_GET['usuario'])){
	echo '<div class="page-header"><h1>Usuário não encontrado</h1></div>';
	exit();
}else{
	$query = $con->query("SELECT * FROM Pessoa WHERE usuario = '" . $_GET['usuario'] . "'");
	if($query->rowCount()==1){
		while($row = $query->fetch(PDO::FETCH_OBJ)){
			echo '<div class="page-header"><h1>Informações pessoais</h1></div>';
			echo '<img src="../uploads/' . $row->imagem . '" width="200px" height="200px" class="thumbnail">';
			echo 'Usuário: ' . $row->usuario . '</br>';
			echo 'Nome: ' . $row->nome . '</br>';
			echo 'Data de nascimento: ' . sqlToDate($row->nascimento);
			echo '<div class="page-header"><h1>Endereço</h1></div>';
			echo 'Logradouro: ' . $row->logradouro . '</br>';
			echo 'Número: ' . $row->numero . '</br>';
			echo 'Bairro: ' . $row->bairro . '</br>';
			echo 'Estado: ' . $row->estado . '</br>';
			echo 'Cidade: ' . $row->cidade . '</br>';
			echo 'CEP: ' . $row->cep . '</br>';
			echo '<div class="page-header"><h1>Contato</h1></div>';
			echo 'Telefone: ' . formataTelefone($row->dddTelefone, $row->telefone) . '</br>';
			echo 'Celular: ' . formataTelefone($row->dddCelular, $row->celular) . '</br>';
			echo 'Email: ' . $row->email . '</br>';
			if(isset($_SESSION['idPessoa']) and $_SESSION['idPessoa']==$row->idPessoa){
				echo '<a href="editapessoa.php" class="btn btn-success">Editar</a>';
			}
		}
	}else{
		echo '<div class="page-header"><h1>Usuário não encontrado</h1></div>';
		exit();
	}
}
?>
