<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "loja";

	$conn = mysqli_connect($host, $usuario, $senha, $banco);
	if ($conn->connect_error) {
		die('Erro na conexão: ' . $conn->connect_error);
	}

	/*$conexao = mysql_connect($host, $usuario, $senha) or die("Erro ao conectar ao mysql");
	mysql_select_db($banco);*/
?>