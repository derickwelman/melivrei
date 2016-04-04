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
	<div class="row">
		<h2>Faça seu cadastro e aproveite!</h2>
		<br>
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Login</a></li>
			<li><a data-toggle="tab" href="#menu1">Pessoal</a></li>
			<li><a data-toggle="tab" href="#menu2">Endereço</a></li>
			<li><a data-toggle="tab" href="#menu3">Contato</a></li>
		</ul>


		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<br>
				<label for="inputForNomeUsuario">Usuário: </label>
				<input type="text" class="form-control" placeholder="Nome do Usuário" name="inputForNomeUsuario" pattern="[0-9a-zA-Z]*" required></input>
				<br>

				<div class="row">
					<div class="col-sm-6">
						<label for="inputForSenha">Senha: </label>
						<input type="password" class="form-control" placeholder="Senha" name="inputForSenha" pattern="[0-9a-zA-Z]{6,16}" id="inputForSenha" required></input>

					</div>
					<div class="col-sm-6">
						<label for="inputForCofirmacaoSenha">Confirmar senha: </label>
						<input type="password" class="form-control" placeholder="Confirmação de Senha" name="inputForConfirmacaoForSenha" patter="[0-9a-zA-Z]{6,16}"required oninput="validaSenha(this)"></input>
					</div>
				</div>
				<br><br>
				<div class="progress">
					<div class="progress-bar progress-bar-striped active" role="progressbar"
					aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:25%">
					25%
				</div>
			</div>
		</div>

		<div id="menu1" class="tab-pane fade">
			<br>

			<label for="inputForNomeCompleto">Nome completo: </label>
			<input type="text" class="form-control" placeholder="Nome completo" name="inputForNomeCompleto" pattern="[a-zA-Z_\]*"required></input>
			<br>
			<div class="row">
				<div class="col-sm-6">
					<label for="inputForFoto">Adicionar Foto: </label>
					<input type="file" class="form-control" name="arquivo" required></input>
				</div>
				<div class="col-sm-6">
					<label for="inputForDataNascimento">Data de nascimento: </label>
					<input type="date" class="form-control" placeholder="Data de Nascimento" name="inputForDataNascimento" required></input>
				</div>
			</div>
			<br>

			<div class="row">
				<div class="col-sm-6">
					<label for="inputForRG">RG: </label>
					<input type="text" class="form-control" placeholder="RG" name="inputForRG" pattern="[0-9]{9}" required></input>
				</div>
				<div class="col-sm-6">
					<label for="inputForCPF">CPF: </label>
					<input type="text" class="form-control" placeholder="CPF" name="inputForCPF" pattern="[0-9]{11}" required></input>
				</div>
			</div>

			<br><br>
			<div class="progress">
				<div class="progress-bar progress-bar-striped active" role="progressbar"
				aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%">
				50%
			</div>
		</div>
	</div>
	<div id="menu2" class="tab-pane fade">

		<br>

		<div class="row">
			<div class="col-sm-10">
				<label for="inputForLogradouro">Logradouro: </label>
				<input type="text" class="form-control" placeholder="Logradouro" name="inputForLogradouro" required></input>
			</div>
			<div class="col-sm-2">
				<label for="inputForNumero">Número: </label>
				<input type="text" class="form-control" placeholder="Número" name="inputForNumero" pattern="[0-9]{1,4}" required></input>
			</div>
		</div>

		<br>

		<div class="row">
			<div class="col-sm-6">
				<label for="inputForEstado">Estado: </label>
				<input type="text" class="form-control" placeholder="Estado" name="inputForEstado" required></input>
			</div>
			<div class="col-sm-6">
				<label for="inputForCidade">Cidade: </label>
				<input type="text" class="form-control" placeholder="Cidade" name="inputForCidade" required></input>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-sm-6">

				<label for="inputForBairro">Bairro: </label>
				<input type="text" class="form-control" placeholder="Bairro" name="inputForBairro" required></input>

			</div>
			<div class="col-sm-6">

				<label for="inputForCEP">CEP: </label>
				<input type="text" class="form-control" placeholder="CEP" name="inputForCEP" pattern="[0-9]{8}" required></input>


			</div>
		</div>
		<br><br>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar"
			aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:75%">
			75%
		</div>
	</div>
	<br>
</div>
<div id="menu3" class="tab-pane fade">
	<br>


	<div class="row">
		<div class="col-sm-6">
			<label for="inputForTelefone">Telefone: </label>
			<input type="text" class="form-control" placeholder="(00)00000000" name="inputForTelefone" pattern="\([0-9]{2}\)[0-9]{8,9}"></input>
		</div>
		<div class="col-sm-6">
			<label for="inputForCelular">Celular: </label>
			<input type="text" class="form-control" placeholder="(00)00000000" name="inputForCelular" pattern="\([0-9]{2}\)[0-9]{8,9}"></input>
		</div>
	</div>
	<br>




	<label for="inputForEmail">Email: </label>
	<input type="email" class="form-control" placeholder="Email" name="inputForEmail" required></input>
	<br><br>
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar"
		aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
		100%
	</div>
</div>
<br><br>
<input type="submit" class="btn btn-success btn-lg pull-right" name="Enviar" value="Cadastrar">
</div>
</div>
</div>

</form>
