<?php
session_start();
if(isset($_COOKIE['idPessoa'])){
	$_SESSION['idPessoa'] = $_COOKIE['idPessoa'];
	$_SESSION['usuario'] = $_COOKIE['usuario'];
	$_SESSION['nome'] = $_COOKIE['nome'];
}
?>