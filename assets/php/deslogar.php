<?php
	include 'conexao_bd.php';
	unset($_SESSION['sessoes']['login']);
	$_SESSION['sessoes']['mensagens'] = "Logout efetuado com sucesso!";
	session_unset();
	header('Location: ../../index.php');
?>