<div class="container">
	<div class="col s12 m6 push-m3">
		<center><h4 class="ligth">Cadastrar time</h4></center>
		<div class="row">
	    	<form class="col s12" action="assets/php/cadastrar_times.php" method="POST">
	      		<div class="row">
	      			<input type="hidden" name="id_admin" value="<?php echo $_SESSION['sessoes']['login']; ?>">
	        		<div class="input-field col s12">
	          			<input placeholder="Digite o nome do time" id="nome_time" name="nome_time" type="text" class="validate" required>
	          			<label for="nome_time">Nome do time</label>
	        		</div>
	      		</div>
	      		<div class="row">
	       			<div class="input-field col s12">
	          			<input placeholder="Digite a senha de confirmação" id="senha_confirmacao" name="senha_confirmacao" type="password" class="validate" required>
	          			<label for="senha_confirmacao">Digite sua senha</label>
	        		</div>
	      		</div>
	      		<button type="submit" name="btn_cadastrar" class="btn blue">Cadastrar</button>
				<button type="reset" name="btn_limpar" class="btn red">Limpar</button>
	    	</form>
	 	</div>
	</div>
</div>
<br>