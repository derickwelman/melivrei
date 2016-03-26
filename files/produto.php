<meta charset="UTF-8">
<?php
include("importSession.php");
include("../functions/conexao.php");
include("sessionStart.php");

if(!isset($_GET['produto'])){
	echo '<div class="page-header"><h1>Produto não encontrado</h1></div>';
	exit();
}else{
	$query = $con->query("SELECT * FROM Produto WHERE idProduto = '" . $_GET['produto'] . "'");
	if($query->rowCount()==1){
		while($row = $query->fetch(PDO::FETCH_OBJ)){
			echo '<div class="page-header"><h1>Informações do produto</h1></div>';
			echo '<img src="../uploads/' . $row->imagem . '" width="200px" height="200px" class="thumbnail">';
			echo 'Nome: ' . $row->nome . '</br>';
			echo 'Descrição: ' . $row->descricao . '</br>';
			echo 'Autor: ' . $row->autor . '</br>';
			echo 'Editora: ' . $row->editora . '</br>';
			$tipo = $con->query("SELECT descricao FROM Tipo WHERE idTipo = " . $row->idTipo . ";");
			echo 'Tipo: ' . $tipo->fetch(PDO::FETCH_OBJ)->descricao . '</br>';
			$genero = $con->query("SELECT descricao FROM Genero WHERE idGenero = " . $row->idGenero . ";");
			echo 'Gênero: ' . $genero->fetch(PDO::FETCH_OBJ)->descricao . '</br>';
			echo 'Preço: R$' . sqlToDecimal($row->preco) . '</br>';
			echo 'Páginas: ' . $row->paginas . '</br>';
			switch ($row->estado) {
				case 1:
					$estado = "Bom, quase novo.";
					break;
				case 2:
					$estado = "Mais ou menos, algumas paginas estão amareladas";
					break;
				case 3:
					$estado = "Ruim, não sei cuidar das minhas coisas, mas ainda tá legivel";
					break;
				default:
					$estado = "Estado não definido";
					break;
			}
			echo 'Estado: ' . $estado . '</br>';
			if(isset($_SESSION['idPessoa']) and $_SESSION['idPessoa']==$row->idPessoa){
				echo '<a href="editapessoa.php" class="btn btn-success">Editar</a>';
			}
		}
	}else{
		echo '<div class="page-header"><h1>Produto não encontrado</h1></div>';
		exit();
	}
}
?>
