<div class="container">
	<div class="col s12 m6 push-m3">
		<center><h4 class="ligth">Cadastrar pontuação</h4></center>
		<div class="row">
	    	<form class="col s12" action="assets/php/cadastrar_pontuacao.php" method="post">
	    		<?php
	    			$sql = "SELECT * FROM campeonato";
	    			$sql_exec = $mysqli -> query($sql) or die($mysqli -> error);
	    			$total = $sql_exec -> num_rows;

	    			if($total > 0){
	    				$dados = $sql_exec -> fetch_assoc();
	    				do{
	    		?>
	      		<div class="row">
	      			<input type="hidden" name="id_time_<?php echo $dados['id']; ?>" value="<?php echo $dados['id']; ?>">
	        		<div class="input-field col s6">
	          			<input placeholder="Digite o nome do time" id="nome_time_<?php echo $dados['id']; ?>" name="nome_time_<?php echo $dados['id']; ?>" type="text" class="validate" value="<?php echo $dados['nome_time']; ?>" readonly required>
	          			<label for="nome_time_<?php echo $dados['id']; ?>">Nome do time</label>
	        		</div>
	       			<div class="input-field col s3">
	          			<input placeholder="Pontuação atual" id="pontuacao_time_<?php echo $dados['id']; ?>" name="pontuacao_time_<?php echo $dados['id']; ?>" type="number" class="validate" value="<?php echo $dados['pontuacao']; ?>" readonly required>
	          			<label for="pontuacao_time_<?php echo $dados['id']; ?>">Pontuação atual</label>
	        		</div>
	        		<div class="input-field col s3">
	          			<input placeholder="Acrescentar mais pontos" id="nova_pontuacao_time_<?php echo $dados['id']; ?>" name="nova_pontuacao_time_<?php echo $dados['id']; ?>" type="number" class="validate" required>
	          			<label for="nova_pontuacao_time_<?php echo $dados['id']; ?>">Mais pontuãção</label>
	        		</div>
	      		</div>
	      		<div class="divider"></div><br>
	      		<?php
	      				}while($dados = $sql_exec -> fetch_assoc());
	      		?>
	      		<button type="submit" name="btn_cadastrar_pontos" class="btn blue">Cadastrar pontos</button>
				<?php
					}else{
						$_SESSION['sessoes']['mensagens'] = "Não há nenhum time cadastrado!";
						header('Location: home.php');
					}
				?>
	    	</form>
	 	</div>
	</div>
</div>
<br>