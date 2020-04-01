<?php
	if(isset($_SESSION['sessoes']['mensagens'])){
?>
	<script>
		window.onload = function(){
			M.toast({html: '<?php echo $_SESSION['sessoes']['mensagens']; ?>'});
		}
	</script>
<?php
	}
	unset($_SESSION['sessoes']['mensagens']);
?>