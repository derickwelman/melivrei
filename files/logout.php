<?php
include("sessionStart.php");
session_destroy();
unset($_COOKIE['idPessoa']);
unset($_COOKIE['usuario']);
unset($_COOKIE['nome']);
setcookie('idPessoa', null, -1);
setcookie('usuario', null, -1);
setcookie('nome', null, -1);
?>