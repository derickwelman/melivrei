<meta charset="UTF-8">
<?php
include("importSession.php");
include("../functions/conexao.php");
include("sessionStart.php");

if(!isset($_SESSION['idPessoa'])){
	echo '<script>window.location="login.php";</script>';
	exit();
}
?>

<form class="form" role="form" action="insertProduto.php" method="POST" enctype="multipart/form-data">
	<label for="inputForNome">Nome: </label>
	<input type="text" class="form-control" placeholder="Nome do Produto" name="inputForNomeProduto" required></input>

	<label for="inputForFoto">Adicionar Foto: </label>
	<input type="file" class="form-control" name="arquivo" required></input>

	<label for="inputForDescricao">Descrição: </label>
	<textarea class="form-control" id="comment" placeholder="Descreva Seu Produto" name="inputForDescricao" required></textarea>

	<label for="inputForTipo">Quero Vender Um: </label>
	<select class="form-control" id="inputForTipo" name="inputForTipo" required>
		<option value=''>Livro? Revista? Quadrinho?</option>
		<?php
		$query = $con->query("SELECT * FROM Tipo");
		while($row = $query->fetch(PDO::FETCH_OBJ)){
			echo '<option value="'.$row->idTipo.'">'.$row->descricao.'</option>';
		}
		?>
	</select>

	<label for="inputForGenero">Do Genero: </label>
	<select class="form-control" id="inputForGenero" name="inputForGenero" required>
		<option value=''>Romance? Ação? Terror?</option>
		<?php
		$query = $con->query("SELECT * FROM Genero");
		while($row = $query->fetch(PDO::FETCH_OBJ)){
			echo '<option value="'.$row->idGenero.'">'.$row->descricao.'</option>';
		}
		?>
	</select>

	<label for="inputForPreco">Quero Vender Por R$:</label>
	<input type="text" class="form-control" placeholder="000,00" name="inputForPreco" name="inputForPreco" pattern="[0-9]*(,[0-9]{0,2})?" required></input>

	<div class="page-header"><h1>Informações Adicionais</h1></div>

	<label for="inputForPaginas">N° de Paginas: </label>
	<input type="text" class="form-control" placeholder="000" name="inputForPaginas" pattern="[0-9]+"></input>

	<label for='inputForAutor'>Autor: </label>
	<input type="text" class="form-control" placeholder="Machado de Assis" name="inputForAutor" pattern="[\w\ ]{3,}"></input>

	<label for="inputForEditora">Editora: </label>
	<input type="text" class="form-control" placeholder="LeYa, Panini, etc..." name="inputForEditora"></input>

	<label for="inputForEstado"> O Que Quero Vender Está: </label>
	<div class="radio">
		<label><input type="radio" name="inputForEstado" class="optradio" value="1" checked>Bom, quase novo.</input></label>
	</div>
	<div class="radio">
		<label><input type="radio" name="inputForEstado" class="optradio"  value="2">Mais ou menos, algumas paginas estão amareladas</input></label>
	</div>
	<div class='radio'>
		<label><input type="radio" name="inputForEstado" class="optradio"  value="3">Ruim, não sei cuidar das minhas coisas, mas ainda tá legivel</input></label>
	</div>

	<input type="submit" class="btn btn-success" value="Me Livrei !"></input>

</form>