<?php
	include 'conexao_bd.php';

	if(isset($_POST['btn_cadastrar_pontos'])){
		$time_1 = array(
			'id' => limpar($_POST['id_time_2']),
			'nome_time' => limpar($_POST['nome_time_2']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_2']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_2']),
			'pontos' => limpar($_POST['pontuacao_time_2']) + limpar($_POST['nova_pontuacao_time_2'])
		);

		$time_2 = array(
			'id' => limpar($_POST['id_time_3']),
			'nome_time' => limpar($_POST['nome_time_3']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_3']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_3']),
			'pontos' => limpar($_POST['pontuacao_time_3']) + limpar($_POST['nova_pontuacao_time_3'])
		);

		$time_3 = array(
			'id' => limpar($_POST['id_time_4']),
			'nome_time' => limpar($_POST['nome_time_4']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_4']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_4']),
			'pontos' => limpar($_POST['pontuacao_time_4']) + limpar($_POST['nova_pontuacao_time_4'])
		);

		$time_4 = array(
			'id' => limpar($_POST['id_time_5']),
			'nome_time' => limpar($_POST['nome_time_5']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_5']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_5']),
			'pontos' => limpar($_POST['pontuacao_time_5']) + limpar($_POST['nova_pontuacao_time_5'])
		);

		$time_5 = array(
			'id' => limpar($_POST['id_time_6']),
			'nome_time' => limpar($_POST['nome_time_6']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_6']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_6']),
			'pontos' => limpar($_POST['pontuacao_time_6']) + limpar($_POST['nova_pontuacao_time_6'])
		);

		$time_6 = array(
			'id' => limpar($_POST['id_time_7']),
			'nome_time' => limpar($_POST['nome_time_7']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_7']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_7']),
			'pontos' => limpar($_POST['pontuacao_time_7']) + limpar($_POST['nova_pontuacao_time_7'])
		);

		$time_7 = array(
			'id' => limpar($_POST['id_time_8']),
			'nome_time' => limpar($_POST['nome_time_8']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_8']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_8']),
			'pontos' => limpar($_POST['pontuacao_time_8']) + limpar($_POST['nova_pontuacao_time_8'])
		);

		$time_8 = array(
			'id' => limpar($_POST['id_time_9']),
			'nome_time' => limpar($_POST['nome_time_9']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_9']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_9']),
			'pontos' => limpar($_POST['pontuacao_time_9']) + limpar($_POST['nova_pontuacao_time_9'])
		);

		$time_9 = array(
			'id' => limpar($_POST['id_time_10']),
			'nome_time' => limpar($_POST['nome_time_10']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_10']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_10']),
			'pontos' => limpar($_POST['pontuacao_time_10']) + limpar($_POST['nova_pontuacao_time_10'])
		);

		$time_10 = array(
			'id' => limpar($_POST['id_time_11']),
			'nome_time' => limpar($_POST['nome_time_11']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_11']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_11']),
			'pontos' => limpar($_POST['pontuacao_time_11']) + limpar($_POST['nova_pontuacao_time_11'])
		);

		$time_11 = array(
			'id' => limpar($_POST['id_time_12']),
			'nome_time' => limpar($_POST['nome_time_12']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_12']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_12']),
			'pontos' => limpar($_POST['pontuacao_time_12']) + limpar($_POST['nova_pontuacao_time_12'])
		);

		$time_12 = array(
			'id' => limpar($_POST['id_time_13']),
			'nome_time' => limpar($_POST['nome_time_13']),
			'pontuacao_atual' => limpar($_POST['pontuacao_time_13']),
			'novo_pontos' => limpar($_POST['nova_pontuacao_time_13']),
			'pontos' => limpar($_POST['pontuacao_time_13']) + limpar($_POST['nova_pontuacao_time_13'])
		);

		$sql_1 = "UPDATE campeonato SET pontuacao = {$time_1['pontos']} WHERE id = {$time_1['id']};";
		$sql_2 = "UPDATE campeonato SET pontuacao = {$time_2['pontos']} WHERE id = {$time_2['id']};";
		$sql_3 = "UPDATE campeonato SET pontuacao = {$time_3['pontos']} WHERE id = {$time_3['id']};";
		$sql_4 = "UPDATE campeonato SET pontuacao = {$time_4['pontos']} WHERE id = {$time_4['id']};";
		$sql_5 = "UPDATE campeonato SET pontuacao = {$time_5['pontos']} WHERE id = {$time_5['id']};";
		$sql_6 = "UPDATE campeonato SET pontuacao = {$time_6['pontos']} WHERE id = {$time_6['id']};";
		$sql_7 = "UPDATE campeonato SET pontuacao = {$time_7['pontos']} WHERE id = {$time_7['id']};";
		$sql_8 = "UPDATE campeonato SET pontuacao = {$time_8['pontos']} WHERE id = {$time_8['id']};";
		$sql_9 = "UPDATE campeonato SET pontuacao = {$time_9['pontos']} WHERE id = {$time_9['id']};";
		$sql_10 = "UPDATE campeonato SET pontuacao = {$time_10['pontos']} WHERE id = {$time_10['id']};";
		$sql_11 = "UPDATE campeonato SET pontuacao = {$time_11['pontos']} WHERE id = {$time_11['id']};";
		$sql_12 = "UPDATE campeonato SET pontuacao = {$time_12['pontos']} WHERE id = {$time_12['id']};";
		
		$sql_exec_1 = $mysqli -> query($sql_1) or die($mysqli -> error);
		$sql_exec_2 = $mysqli -> query($sql_2) or die($mysqli -> error);
		$sql_exec_3 = $mysqli -> query($sql_3) or die($mysqli -> error);
		$sql_exec_4 = $mysqli -> query($sql_4) or die($mysqli -> error);
		$sql_exec_5 = $mysqli -> query($sql_5) or die($mysqli -> error);
		$sql_exec_6 = $mysqli -> query($sql_6) or die($mysqli -> error);
		$sql_exec_7 = $mysqli -> query($sql_7) or die($mysqli -> error);
		$sql_exec_8 = $mysqli -> query($sql_8) or die($mysqli -> error);
		$sql_exec_9 = $mysqli -> query($sql_9) or die($mysqli -> error);
		$sql_exec_10 = $mysqli -> query($sql_10) or die($mysqli -> error);
		$sql_exec_11 = $mysqli -> query($sql_11) or die($mysqli -> error);
		$sql_exec_12 = $mysqli -> query($sql_12) or die($mysqli -> error);

		if($sql_exec_1 == true && $sql_2 == true && $sql_3 == true && $sql_4 == true && $sql_5 == true && $sql_6 == true && $sql_7 == true && $sql_8 == true && $sql_9 == true && $sql_10 == true && $sql_11 == true && $sql_12 == true){
			$_SESSION['sessoes']['mensagens'] = "Pontuação atualizada com sucesso!";
			header('Location: ../../home.php');
		}else{
			$_SESSION['sessoes']['mensagens'] = "Erro ao atualizar pontuação!";
			header('Location: ../../home.php');
		}
	}

	function limpar($valor){
		global $mysqli;

		$retorno = $mysqli -> escape_string($valor);
		$retorno = htmlspecialchars($retorno);

		return $retorno;
	}
?>