<!DOCTYPE html>
<html>
<head>
	<title>Adicionar imagens</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/folha_de_estilo.css">
</head>
<body>
	<div class="blocos-conteudo">
			<header class="titulo">Adicionar imagens</header>
				<form method="POST" id="formulario" enctype="multipart/form-data" action="_funcoes/add_imagens.php">
					<p>
						<label>Escolher fotos</label>
						<input type="file" multiple name="url_fotos">
					</p>
					<p>
						<input type="submit" name="Enviar" value="Enviar">
					</p>
				</form>
			</div>
</body>
</html>