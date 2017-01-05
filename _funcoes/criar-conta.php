<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Cadastrando Conta...</title>
	<meta charset="utf-8">
	<script>
		function cadastroSucesso(){
			alert("Seja bem vindo! O cadastro da sua conta foi realizado com sucesso, boas compras!");
			setTimeout("window.location='javascript:history.go(-1)'",0);
		}
		function cadastroFalhou(){
			alert("Ocorreu um erro inesperado no cadastro, tente novamente mais tarde!");
			setTimeout("window.location='javascript:history.go(-1)'",0);
		}
	</script>
</head>
<body>
<?php
	require_once "conectar.php";

	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$dt_nasc = $_POST['dt_nasc'];
	$nivel_de_acesso = 2;
	$telefone = $_POST['telefone'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$cep = $_POST['cep'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$nacionalidade = $_POST['nacionalidade'];
	$senha = md5(addslashes($_POST['senha']));
	$e_mail = $_POST['e_mail'];

	$insert = "INSERT INTO `usuario`(`cpf`, `nome`, `dt_nasc`, `nivel_de_acesso`, `telefone`, `rua`, `numero`, `bairro`, `cep`, `cidade`, `estado`, `nacionalidade`, `senha`, `e_mail`) VALUES ('$cpf','$nome','$dt_nasc','$nivel_de_acesso','$telefone','$rua','$numero','$bairro','$cep','$cidade','$estado','$nacionalidade','$senha','$e_mail')";

	$resultado = mysqli_query($conn,$insert);

	if ($conn->affected_rows > 0) {
		session_start();
		$_SESSION['usuario'] = $e_mail;
		$_SESSION['senha'] = $senha;
		echo "<script>cadastroSucesso()</script>";
	} else {
		echo "<script>CadastroFalhou()</script>";

	}
?>
</body>
</html>