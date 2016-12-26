<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Autenticando Usuário..</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function loginSucesso() {
			setTimeout("window.location='javascript:history.go(-2)'", 0);
		}
		function loginFalhou() {
			alert("E-mail ou Senha estão incorretos");
			setTimeout("window.location='../login.php'", 0);
		}
		function jaLogado() {
			setTimeout("window.location='../index.php'", 0);
		}
	</script>
</head>
<body>
<?php
	require_once "conectar.php";
	session_start();

	if (isset($_SESSION['usuario']) && isset($_SESSION['senha'])) {
		echo "<script>jaLogado()</script>";
	} else {
		$usuario = $_POST["usuario"];
		$senha = $_POST["senha"];

		$select = "SELECT * FROM usuario WHERE e_mail = '$usuario' AND senha = '$senha';";
		$resultado = $conn->query($select);

		if ($resultado->num_rows > 0) {
			$_SESSION['usuario'] = $_POST['usuario'];
			$_SESSION['senha'] = $_POST['senha'];
			echo "<script>loginSucesso()</script>";
		} else {
			echo "<script>loginFalhou()</script>";
		}
	}
?>
</body>
</html>