<meta charset="UTF-8">
<?php
include("importSession.php");
include("../functions/conexao.php");
include("sessionStart.php");

if(!isset($_SESSION['idPessoa'])){
	echo '<script>window.location="login.php";</script>';
	exit();
}else{
	$query = $con->query("SELECT * FROM Pessoa WHERE idPessoa = " . $_SESSION['idPessoa'] . ";");

	while($row = $query->fetch(PDO::FETCH_OBJ)){
		$usuario = $row->usuario;
		$nome = $row->nome;
		$imagem = $row->imagem;
		$nascimento = $row->nascimento;
		$rg = $row->rg;
		$cpf = $row->cpf;
		$logradouro = $row->logradouro;
		$numero = $row->numero;
		$bairro = $row->bairro;
		$cidade = $row->cidade;
		$estado = $row->estado;
		$cep = $row->cep;
		$telefone = formataTelefoneSemHifen($row->dddTelefone, $row->telefone);
		$celular = formataTelefoneSemHifen($row->dddCelular, $row->celular);
		$email = $row->email;
	}
}
?>

<script>
function validaSenha (input){ 
    if (input.value != document.getElementById('inputForSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
}

function validaNovaSenha() {
	var senhaAtual = document.getElementById('inputForSenhaAtual');
	var novaSenha = document.getElementById('inputForSenha');
	if((senhaAtual.value == "" && novaSenha.value != "") || (senhaAtual.value != "" && novaSenha.value == "")){
		senhaAtual.setCustomValidity('Digite as senhas corretamente');
		alert(senhaAtual.value);
		alert(novaSenha.value);
		return false;
	}else{
		senhaAtual.setCustomValidity('');
		return true;
	}
}


</script>

<form class="form" role="form" action="updatepessoa.php" method="POST" enctype="multipart/form-data" onsubmit="return validaNovaSenha();">
	<?php
	echo '
	<div class="page-header"><h1>Informações pessoais</h1></div>

	<label for="inputForNomeCompleto">Nome completo: </label>
	<input type="text" class="form-control" placeholder="Nome completo" name="inputForNomeCompleto" value="'.$nome.'" pattern="[a-zA-Z_\]*" required></input>

	<img src="../uploads/'.$imagem.'" class="thumbnail" height="200px" width="200px"></img>

	<label for="inputForFoto">Alterar Foto: </label>
	<input type="file" class="form-control" name="arquivo"></input>

	<label for="inputForDataNascimento">Data de nascimento: </label>
	<input type="date" class="form-control" placeholder="Data de Nascimento" name="inputForDataNascimento" value="'.$nascimento.'" required></input>

	<label for="inputForRG">RG: </label>
	<input type="text" class="form-control" placeholder="RG" name="inputForRG" value="'.$rg.'" pattern="[0-9]{9}" required></input>

	<label for="inputForCPF">CPF: </label>
	<input type="text" class="form-control" placeholder="CPF" name="inputForCPF" value="'.$cpf.'" pattern="[0-9]{11}" required></input>

	<div class="page-header"><h1>Endereço</h1></div>

	<label for="inputForLogradouro">Logradouro: </label>
	<input type="text" class="form-control" placeholder="Logradouro" name="inputForLogradouro" value="'.$logradouro.'" required></input>

	<label for="inputForNumero">Número: </label>
	<input type="text" class="form-control" placeholder="Número" name="inputForNumero" value="'.$numero.'" pattern="[0-9]{1,4}" required></input>

	<label for="inputForBairro">Bairro: </label>
	<input type="text" class="form-control" placeholder="Bairro" name="inputForBairro" value="'.$bairro.'" required></input>

	<label for="inputForCidade">Cidade: </label>
	<input type="text" class="form-control" placeholder="Cidade" name="inputForCidade" value="'.$cidade.'" required></input>

	<label for="inputForEstado">Estado: </label>
	<input type="text" class="form-control" placeholder="Estado" name="inputForEstado" value="'.$estado.'" required></input>

	<label for="inputForCEP">CEP: </label>
	<input type="text" class="form-control" placeholder="CEP" name="inputForCEP" value="'.$cep.'" pattern="[0-9]{8}" required></input>

	<div class="page-header"><h1>Contato</h1></div>

	<label for="inputForTelefone">Telefone: </label>
	<input type="text" class="form-control" placeholder="Telefone" name="inputForTelefone" value="'.$telefone.'" pattern="\([0-9]{2}\)[0-9]{8,9}"></input>

	<label for="inputForCelular">Celular: </label>
	<input type="text" class="form-control" placeholder="Celular" name="inputForCelular" value="'.$celular.'" pattern="\([0-9]{2}\)[0-9]{8,9}"></input>

	<label for="inputForEmail">Email: </label>
	<input type="email" class="form-control" placeholder="Email" name="inputForEmail" value="'.$email.'" required></input>

	<div class="page-header"><h1>Segurança</h1></div>

	<label for="inputForSenhaAtual">Senha atual: </label>
	<input type="password" class="form-control" placeholder="Senha atual" name="inputForSenhaAtual" id="inputForSenhaAtual" pattern="[0-9a-zA-Z]{6,16}" onsubmit="validaAlteracao();"></input>

	<label for="inputForSenha">Nova senha: </label>
	<input type="password" class="form-control" placeholder="Nova senha" name="inputForSenha" pattern="[0-9a-zA-Z]{6,16}" id="inputForSenha"></input>

	<label for="inputForCofirmacaoSenha">Confirmar senha: </label>
	<input type="password" class="form-control" placeholder="Confirmação de Senha" name="inputForConfirmacaoForSenha" patter="[0-9a-zA-Z]{6,16}" oninput="validaSenha(this)"></input>';?>
	<input type="submit" class="btn btn-success" name="Enviar" value="Enviar">
</form>
