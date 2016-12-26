<?php
	$i = 0; // índice de identificação no vetor

	// analisa cada arquivo
	foreach ($_FILES["url_fotos"]["error"] as $key => $error) {
		
		// define diretorio onde irá salvar os arquivos
		$destino = "../_imagens/_produtos/" . $_FILES["url_fotos"]["name"][$i];

		// move o arquivo para o diretorio de destino
		move_uploaded_file($_FILES["url_fotos"]["tmp_name"][$i], $destino);

		// prox arquivo
		$i++;
	}
?>