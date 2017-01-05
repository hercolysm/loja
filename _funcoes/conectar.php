<?php

	define("HOST", "localhost");
	define("USUARIO", "root");
	define("SENHA", "");
	define("BD", "loja");

	// conecta ao bando de dados
	$conn = mysqli_connect(HOST, USUARIO, SENHA, BD);
	if ($conn->connect_error) {
		die('Erro na conexão: ' . $conn->connect_error);
	}

?>