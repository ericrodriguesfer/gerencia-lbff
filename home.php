<?php
	session_start();
	
	if(!isset($_SESSION['sessoes']['login'])){
		$_SESSION['sessoes']['mensagens'] = "Efetue seu login!";
		header('Location: index.php');
	}

	include 'componentes/cabecalho.php';
	include 'componentes/navegacao.php';
	include 'componentes/mensagens.php';
	include 'componentes/navegacao_home.php';
	include 'componentes/rodape.php';
?>