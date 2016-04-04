<meta charset="UTF-8">
<?php
include("importSession.php");
include("../functions/conexao.php");
include("sessionStart.php");

//PESQUISAR POR NOME, TIPO, GENERO, AUTOR, EDITORA, ESTADO
//ORDENAR POR PRECO
?>

<form class="form" role="form" action="" method="GET">
	<div class="page-header"><h1>Pesquisa de produtos</h1></div>

	<label for="nome">Nome: </label>
	<input type="text" class="form-control" placeholder="O que você procura?" name="nome"></input>

	<label for="tipo">De qual tipo: </label>
	<select class="form-control" id="tipo" name="tipo">
		<option value=''>Livro? Revista? Quadrinho?</option>';
		<?php
		$query = $con->query("SELECT * FROM Tipo");
		while($row = $query->fetch(PDO::FETCH_OBJ)){
			echo '<option value="'.$row->idTipo.'">'.$row->descricao.'</option>';
		}
		?>
	</select>

	<label for="genero">Do Genero: </label>
	<select class="form-control" id="genero" name="genero">
		<option value=''>Romance? Ação? Terror?</option>
		<?php
		$query = $con->query("SELECT * FROM Genero");
		while($row = $query->fetch(PDO::FETCH_OBJ)){
			echo '<option value="'.$row->idGenero.'">'.$row->descricao.'</option>';
		}
		?>
	</select>

	<label for="autor">Autor: </label>
	<input type="text" class="form-control" placeholder="Quem escreveu?" name="autor"></input>

	<label for="editora">Editora: </label>
	<input type="text" class="form-control" placeholder="Quem publicou?" name="editora"></input>

	<label for="estado">Qual estado de conservação: </label>
	<select class="form-control" id="estado" name="estado">
		<option value=''>Tanto faz</option>
		<option value='1'>Bom, quase novo.</option>
		<option value='2'>Mais ou menos conservado</option>
		<option value='3'>Ruim</option>
	</select>

	<label for="ordenar">Ordenar por:</label>
	<select class="form-control" id="ordenar" name="ordenar">
		<option value='1'>Mais barato</option>
		<option value='2'>Mais caro</option>
	</select>

	<input type="submit" class="btn btn-success" value="Pesquisar"></input>
</form>

<?php
	if(isset($_GET['nome']) AND $_GET['nome'] != ""){
		$pesquisa['nome'] = "nome LIKE '%" . $_GET['nome'] . "%'";
	}
	if(isset($_GET['tipo']) AND $_GET['tipo'] != ""){
		$pesquisa['tipo'] = "idTipo = " . $_GET['tipo'];
	}
	if(isset($_GET['genero']) AND $_GET['genero'] != ""){
		$pesquisa['genero'] = "idGenero = " . $_GET['genero'];
	}
	if(isset($_GET['autor']) AND $_GET['autor'] != ""){
		$pesquisa['autor'] = "autor LIKE '%" . $_GET['autor'] . "%'";
	}
	if(isset($_GET['editora']) AND $_GET['editora'] != ""){
		$pesquisa['editora'] = "editora LIKE '%" . $_GET['editora'] . "%'";
	}
	if(isset($_GET['estado']) AND $_GET['estado'] != ""){
		$pesquisa['estado'] = "estado = '" . $_GET['estado'] . "'";
	}
	if(isset($_GET['ordenar']) AND $_GET['ordenar'] == 1){
		$ordenar = "";
	}else{
		$ordenar = "DESC";
	}

	$filtros = "";

	if(isset($pesquisa)){
		foreach($pesquisa as $filtro){
			$filtros .= $filtro . " AND ";
		}
	}

	if(strlen($filtros)>0){
		$filtros = "WHERE " . substr($filtros, 0, strlen($filtros) - 5);
	}

	$query = $con->query("SELECT * FROM PesquisaProduto $filtros ORDER BY preco $ordenar ;");
	if($query->rowcount()){
		while($row = $query->fetch(PDO::FETCH_OBJ)){
			echo '<div style="clear:both">
				<img src="../uploads/'.$row->imagem.'" height="100px" width="100px" class="thumbnail" style="float:left"></img>
				<div style="float:left">
					Nome: '.$row->nome.'<br/>
					Autor: '.$row->autor.'<br/>
					Tipo: '.$row->tipo.'<br/>
					Gênero: '.$row->genero.'<br/>
					Preço: R$'.sqlToDecimal($row->preco).'<br/>
					Vendedor: <a href="pessoa.php?usuario='.$row->usuario.'">'.$row->usuario.'</a><br/>
					<a href="produto.php?produto='.$row->idProduto.'"><input type="button" class="btn btn-info" value="Mais informações"></input></a>
				</div>
			</div>';
		}
	}
?>