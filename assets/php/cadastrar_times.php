<?php
	include 'conexao_bd.php';

	if(isset($_POST['btn_cadastrar'])){
		$id_admin = limpar($_POST['id_admin']);
		$time = limpar($_POST['nome_time']);
		$senha = md5(md5(limpar($_POST['senha_confirmacao'])));

		$sql = "SELECT * FROM adiministradores WHERE id = '$id_admin'";
		$sql_exec = $mysqli -> query($sql) or die($mysqli -> error);
		$dados = $sql_exec -> fetch_assoc();

		if($senha == $dados['senha']){
			$sql_insercacao = "INSERT INTO campeonato (id, nome_time, pontuacao) VALUES (NULL, '$time', '0')";
			$sql_exec_insercacao = $mysqli -> query($sql_insercacao) or die($mysqli -> error);

			if($sql_exec_insercacao == true){
				$_SESSION['sessoes']['mensagens'] = "Time cadastrado com sucesso!";
				header('Location: ../../home.php');
			}else{
				$_SESSION['sessoes']['mensagens'] = "Erro ao cadastrar o time!";
				header('Location: ../../home.php');
			}
		}else{
			$_SESSION['sessoes']['mensagens'] = "Senha de administrador incorreta!";
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