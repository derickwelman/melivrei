<meta charset="UTF-8">
<?php
include("importSession.php");
include("sessionStart.php");

if(isset($_SESSION['idPessoa'])){
	echo '<script>window.location="../files/index.php"</script>';
}

?>
<form class="form" role="form" action="autenticaLogin.php" method="POST">
	<div class="page-header"><h1>Login</h1></div>

	<label for="inputForNomeUsuario">Usuario: </label>
	<input type="text" class="form-control" placeholder="Nome do Usuário" name="inputForNomeUsuario" pattern="[0-9a-zA-Z]*" required></input>

	<label for="inputForSenha">Senha: </label>
	<input type="password" class="form-control" placeholder="Senha" name="inputForSenha" pattern="[0-9a-zA-Z]{6,16}" required></input>

	<div class="checkbox">
		<label for="inputForKeepLogged"><input type="checkbox" name="inputForKeepLogged"></input>Continuar Logado? </label>
	</div>

	<input type="submit" class="btn btn-success" name="Enviar" value="Entrar">
</form>