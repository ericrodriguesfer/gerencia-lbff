<?php
	include 'conexao_bd.php';

	if(isset($_POST['btn_logar'])){
		$login = limpar($_POST['login']);
		$senha = md5(md5(limpar($_POST['senha'])));

		$sql = "SELECT * FROM adiministradores WHERE login = '$login'";
		$sql_exec = $mysqli -> query($sql) or die($mysqli-> error);
		$dados = $sql_exec -> fetch_assoc();
		$total = $sql_exec -> num_rows;

		if($total == 0){
			$erro[] = "Email inexistente!";
			$_SESSION['sessoes']['mensagens'] = "Email inexistente!";
			header('Location: ../../logar.php');
		}else{
			if($dados['senha'] == $senha){
				$_SESSION['sessoes']['login'] = $dados['id'];
				$_SESSION['sessoes']['mensagens'] = "Logado com sucesso!";
			}else{
				$erro[] = "Senha incorreta!";
				$_SESSION['sessoes']['mensagens'] = "Senha incorreta!";
				header('Location: ../../logar.php');
			}
		}

		if(count($erro) == 0 || !isset($erro)){
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
