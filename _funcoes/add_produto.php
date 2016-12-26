<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Cadastrando o produdo..</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function cadastroSucesso() {
			alert("Cadastro realizado com sucesso!");
			setTimeout("window.location='../add_imagens.php'",0);
		}
		function cadastroFalhou() {
			alert("Ocorreu um erro no cadastro, tente novamente.");
			setTimeout("window.location='../cadastrar_produto.php'",0);
		}
	</script>
</head>
<body>
<?php
	require_once "conectar.php";

	$cod_barra = $_POST['cod_barra'];
	$nome = $_POST['nome'];
	$categoria = $_POST['categoria'];
	$descricao = $_POST['descricao'];
	$custo = $_POST['custo'];
	$preco = $_POST['preco'];
	$saldo = $_POST['saldo'];

	$insert = "INSERT INTO produtos VALUES ('$cod_barra','$nome','1','$descricao','$custo','$preco','$saldo');";

	$resultado = mysqli_query($conn,$insert);

	if ($conn->affected_rows > 0) {
		echo "<script>cadastroSucesso()</script>";
		/*header("Location: ../add_imagens.php");*/
	} else {
		echo "<script>cadastroFalhou()</script>";
		/*header("Location: ../cadastrar_produto.php");*/
	}
?>
</body>
</html>