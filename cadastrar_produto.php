<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Cadastro de produto</title>
	<link rel="stylesheet" href="_css/folha_de_estilo.css">
	<meta charset="utf-8">
	
	<?php /* Exibe e oculta elementos de acordo com a sessão */
		session_start();

		if (isset($_SESSION['usuario']) && isset($_SESSION['senha'])) {?>
			<style type='text/css'>
					.log_no {display: none !important;}
					.log_yes {display: inline-block !important;}
			</style>
	<?php } ?>

</head>
<body>
	<div id="container"> 
		<header id="header"><!-- topo total -->
			<div id="topo"><!-- topo 1 -->
				<div id="topo-esquerdo">
					<ul>
						<li><label for="select">Moeda:</label></li>
						<li><form><select name="select"><option>Real</option><option>Dolar</option><option>Euro</option></select></form></li>
						<li><a href="">BR</a></li>
						<li><a href="">US</a></li>
						<li><a href="">DE</a></li>
						<li><a href="">ES</a></li>
					</ul>
				</div>
				<div id="topo-direito">
					<ul>
						<li><a href="">Atendimento Online</a></li>
						<li><a href="">Busca Avançada</a></li>
						<li class="log_yes">Bem vindo!</li>
						<li class="log_no"><a href="" class="button">Criar conta</a></li>
						<li class="log_yes"><a href="" class="button iconic_user">Conta</a></li>
						<li class="log_no"><a href="login.php" class="button">Entrar</a></li>
						<li class="log_yes"><a href="_funcoes/sair.php" class="button">Sair</a></li>
						<li><span class="icon-cart">Carrinho&#xe93a;</span></li>
					</ul>
				</div>
			</div><!-- fim topo 1 -->
			<div id="menu"><!-- topo 2 -->
				<img> <!-- logo -->
				<nav id="nav">
					<h1>Menu Principal</h1>
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Destaques</a></li>
						<li><a href="">Ofertas</a></li>
						<li><a href="">Black Friday</a></li>
						<li><a href="">Parceiros</a></li>
						<li><a href="">SAC</a></li>
					</ul>
				</nav>
				<form>
					<input type="text" name="pesquisa">
					<button type="submit">Pesquisar</button>
				</form>
			</div><!-- fim topo 2 -->
		</header><!-- fim topo total -->
		<section id="section">
			<div id="left"><!-- Lateral esquerda -->
				<nav id="categorias" class="blocos-left"><!-- Menu categorias -->
					<ul>
						<li><h2 class="titulo">Categorias</h2></li>
						<li><a href="">Abelha</a></li>
						<li><a href="">Bola</a></li>
						<li><a href="">Coração</a></li>
						<li><a href="">Dado</a></li>
						<li><a href="">Elefante</a></li>
						<li><a href="">Faca, foca e fardamentos</a></li>
					</ul>
				</nav><!-- fim menu categorias -->
			</div><!-- fim Lateral esquerda -->
			<div class="blocos-conteudo">
			<header class="titulo">Novo Produto</header>
				<form method="POST" id="formulario" action="_funcoes/add_produto.php">
					<p>
						<label for="cod_barra">Codigo de barras</label>
						<input type="number" name="cod_barra" min="0" required autofocus>
					</p>
					<p>
						<label for="nome">Nome do produto</label>
						<input type="text" name="nome" max="50" required>
					</p>
					<p>
						<label for="categoria">Categoria</label>
						<input list="lista-categorias" name="categoria" required>
						<datalist id="lista-categorias">
							<option value="Perfumaria Masculina">
							<option value="Perfumaria Feminina">
							<option value="Bem Estar">
						</datalist>
					</p>
					<p>
						<label for="descricao">Descrição</label>
						<textarea name="descricao" maxlength="200" style="height: 50px"></textarea>
					</p>
					<p>
						<label for="custo">Custo</label>
						<input type="number" name="custo" min="0" step="0.0001" value="0.00" required>
					</p>
					<p>
						<label for="preco">Preço</label>
						<input type="number" name="preco" min="0" step="0.0001" value="0.00" required>
					</p>
					<p>
						<label for="saldo">Saldo</label>
						<input type="number" name="saldo" min="0" value="0" required>
					</p>
					<p>
						<input type="submit" name="Cadastrar" value="Cadastrar">
					</p>
				</form>
			</div>
		</section>
		<footer id="footer">
			<ul id="nav">
				<li><a href="">Home</a></li>
				<li><a href="">Destaques</a></li>
				<li><a href="">Ofertas</a></li>
				<li><a href="">Black Friday</a></li>
				<li><a href="">Parceiros</a></li>
				<li><a href="">SAC</a></li>
			</ul>
			<ul id="nav">
				<li><a href="">Atendimento Online</a></li>
				<li><a href="">Busca Avançada</a></li>
				<li><a href="">Criar conta</a></li>
				<li><a href="">Entrar</a></li>
			</ul>
			<ul>
				<li>Facebook</li>
				<li>Twitter</li>
				<li>Glogle+</li>
				<li>Linkedin</li>
				<li>Youtube</li>
			</ul>
			<ul>
				<li>Rua dos Parlamentos, 4321,<br> Cristovo Colombo, 60.132-570</li>
				<li>Tel: (85) 9 3242-1234</li>
				<li>E-mail: hinode@hinode.com</li>
			</ul>
			<p>Copyright R 2016 E-commerce HINODE | Politica de Privacidade | Condições de Uso</p>
		</footer>
	</div>
</body>
</html>