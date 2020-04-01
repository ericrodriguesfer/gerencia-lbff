<?php
	session_start();

	$local = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "gerencia_lbff";

	$mysqli = new mysqli($local, $usuario, $senha, $banco);
	$mysqli -> set_charset("utf8");

	if($mysqli -> connect_errno){
		$_SESSION['sessoes']['mensagens'] = "Erro ao conectar com a base de dados!";
	}else{
		//$_SESSION['mensagem'] = "Conectado com sucesso!";
	}
?>