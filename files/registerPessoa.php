<meta charset="UTF-8">
<?php
include("importSession.php");
?>

<script>
function validaSenha (input){ 
    if (input.value != document.getElementById('inputForSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>

<form class="form" role="form" action="insertPessoa.php" method="POST" enctype="multipart/form-data">
	<label for="inputForNomeUsuario">Usuario: </label>
	<input type="text" class="form-control" placeholder="Nome do Usuário" name="inputForNomeUsuario" pattern="[0-9a-zA-Z]*" required></input>

	<label for="inputForSenha">Senha: </label>
	<input type="password" class="form-control" placeholder="Senha" name="inputForSenha" pattern="[0-9a-zA-Z]{6,16}" id="inputForSenha" required></input>

	<label for="inputForCofirmacaoSenha">Confirmar senha: </label>
	<input type="password" class="form-control" placeholder="Confirmação de Senha" name="inputForConfirmacaoForSenha" patter="[0-9a-zA-Z]{6,16}"required oninput="validaSenha(this)"></input>

	<div class="page-header"><h1>Informações pessoais</h1></div>

	<label for="inputForNomeCompleto">Nome completo: </label>
	<input type="text" class="form-control" placeholder="Nome completo" name="inputForNomeCompleto" pattern="[a-zA-Z_\]*"required></input>

	<label for="inputForFoto">Adicionar Foto: </label>
	<input type="file" class="form-control" name="arquivo" required></input>

	<label for="inputForDataNascimento">Data de nascimento: </label>
	<input type="date" class="form-control" placeholder="Data de Nascimento" name="inputForDataNascimento" required></input>

	<label for="inputForRG">RG: </label>
	<input type="text" class="form-control" placeholder="RG" name="inputForRG" pattern="[0-9]{9}" required></input>

	<label for="inputForCPF">CPF: </label>
	<input type="text" class="form-control" placeholder="CPF" name="inputForCPF" pattern="[0-9]{11}" required></input>

	<div class="page-header"><h1>Endereço</h1></div>

	<label for="inputForLogradouro">Logradouro: </label>
	<input type="text" class="form-control" placeholder="Logradouro" name="inputForLogradouro" required></input>

	<label for="inputForNumero">Número: </label>
	<input type="text" class="form-control" placeholder="Número" name="inputForNumero" pattern="[0-9]{1,4}" required></input>

	<label for="inputForBairro">Bairro: </label>
	<input type="text" class="form-control" placeholder="Bairro" name="inputForBairro" required></input>

	<label for="inputForCidade">Cidade: </label>
	<input type="text" class="form-control" placeholder="Cidade" name="inputForCidade" required></input>

	<label for="inputForEstado">Estado: </label>
	<input type="text" class="form-control" placeholder="Estado" name="inputForEstado" required></input>

	<label for="inputForCEP">CEP: </label>
	<input type="text" class="form-control" placeholder="CEP" name="inputForCEP" pattern="[0-9]{8}" required></input>

	<div class="page-header"><h1>Contato</h1></div>

	<label for="inputForTelefone">Telefone: </label>
	<input type="text" class="form-control" placeholder="Telefone" name="inputForTelefone" pattern="\([0-9]{2}\)[0-9]{8,9}"></input>

	<label for="inputForCelular">Celular: </label>
	<input type="text" class="form-control" placeholder="Celular" name="inputForCelular" pattern="\([0-9]{2}\)[0-9]{8,9}"></input>

	<label for="inputForEmail">Email: </label>
	<input type="email" class="form-control" placeholder="Email" name="inputForEmail" required></input>

	<input type="submit" class="btn btn-success" name="Enviar" value="Enviar">
</form>
