<?php
	if (isset($_SESSION['loginFalhou'])) { 
		$msg_error = "<p class='bg-warning' id='msg_error'>".$_SESSION['loginFalhou']."</p>";
		unset($_SESSION["loginFalhou"]); ?>
		<script>
			$(document).ready(function(){
				$('#modal-login').modal('show');
			})
		</script>
<?php } ?>

	<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-label">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modal-label">Login</h4>
				</div>
				<div class="modal-body">
					<form id="login-form" method="post" action="_funcoes/logar.php">
						<div class="form-group">
							<label for="email" class="control-label sr-only">Email</label>
							<input type="email" class="form-control" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" title="exemplo@mail.com" placeholder="Email" required="required" onfocus="ocultarMsg()">
						</div>
						<div class="form-group">
							<label for="senha" class="control-label sr-only">Senha</label>
							<input type="senha" class="form-control" name="senha" placeholder="Senha" required="required" onfocus="ocultarMsg()">
						</div>
						<div class="form-group">
							<?php echo isset($msg_error)?$msg_error:""; ?>
							<input type="submit" class="btn btn-primary btn-block" name="logar" value="Login">
							<span class="pull-right"><a href="#">Criar conta</a></span>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</div>

<script>
	function ocultarMsg() {
		document.getElementById("msg_error").style.display = "none";
	}
</script>