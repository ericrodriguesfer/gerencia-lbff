<?php
	include 'assets/php/conexao_bd.php';
	
	if(!isset($_SESSION['sessoes']['login'])){
		$_SESSION['sessoes']['mensagens'] = "Efetue seu login!";
		header('Location: index.php');
	}
	
	include 'componentes/cabecalho.php';
	include 'componentes/navegacao.php';
	include 'componentes/tabela.php';
	include 'componentes/rodape.php';
?>