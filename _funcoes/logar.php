<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Autenticando Usuário..</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function loginSucesso() {
			setTimeout("window.location='javascript:history.go(-1)'", 0);
		}
		function loginFalhou() {
			setTimeout("window.location='javascript:history.go(-1)'", 0);
		}
		function jaLogado() {
			alert("Você já está logado!");
			setTimeout("window.location='javascript:history.go(-1)'", 0);
		}
	</script>
</head>
<body>
<?php
	require_once "conectar.php";
	
	session_start();

	if (isset($_SESSION['login']) && isset($_SESSION['senha'])) {
		echo "<script>jaLogado()</script>";
	} else {
		$login = $_POST["cpf"];
		$senha = md5("loja@online".$_POST["senha"]); // escapa e criptografa

		$select = "SELECT * FROM usuarios WHERE cpf = '$login' AND senha = '$senha';";
		$resultado = $conn->query($select);

		if ($resultado->num_rows > 0) {
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			echo "<script>loginSucesso()</script>";
		} else {
			$_SESSION['loginFalhou'] = "E-mail ou Senha estão incorretos";
			echo "<script>loginFalhou()</script>";
		}
	}
?>
</body>
</html>