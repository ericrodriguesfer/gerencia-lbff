<div class="container">
	<div class="col s12 m6 push-m3">
		<table class="striped">
	        <thead>
	        	<tr>
	         		<th>Posição</th>
	            	<th>Time</th>
	              	<th>Pontos</th>
	          	</tr>
	        </thead>
	        <tbody>
	        	<?php
	        		$sql = "SELECT * FROM campeonato ORDER BY pontuacao DESC";
	        		$sql_exec = $mysqli -> query($sql) or die($mysqli -> error);
	        		$total = $sql_exec -> num_rows;

	        		if($total > 0){
		        		$dados = $sql_exec -> fetch_assoc();
		        		$posicao = 1;
		        		do{
	        	?>
	        	<tr>
	            	<td><?php echo $posicao."°"; ?></td>
	            	<td><?php echo $dados['nome_time']; ?></td>
	           		<td><?php echo $dados['pontuacao']; ?></td>
	          	</tr>
	          	<?php
	          				$posicao++;
		          		}while($dados = $sql_exec -> fetch_assoc());
		          	}else{
		          		$_SESSION['sessoes']['mensagens'] = "Não há nenhum time cadastrado!";
						header('Location: home.php');
		          	}
	          	?>
	        </tbody>
	    </table>
	</div>
</div>
<br>