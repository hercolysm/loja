<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Pagina Inicial</title>
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
			<div id="destaques"> <!-- Galeria de destaques -->
				<img src="_imagens/destaque.jpg" alt="Energético HND">
			</div> <!-- fim galeria -->
			<div id="blocos"><!-- Blocos destaques -->
				<a href=""><!-- destaque -->
					<div class="bloco">
						<img src="_imagens/icone.png" width="30px" height="30px">
						<h2>Sed varius, metus.</h2>
						<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
					</div>
				</a>
				<a href=""><!-- destaque -->
					<div class="bloco">
						<img src="_imagens/icone.png" width="30px" height="30px">
						<h2>Integer lobortis lectus</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel maximus nisi. Integer quis tempus lacus, malesuada porta elit.</p>
					</div>
				</a>
				<a href=""><!-- destaque -->
					<div class="bloco">
						<img src="_imagens/icone.png" width="30px" height="30px">
						<h2>Aenean interdum nunc</h2>
						<p>Quisque ultricies maximus felis ac scelerisque. Nulla maximus vulputate massa in finibus. Integer lobortis lectus ut purus lacinia lacinia. </p>
					</div>
				</a>
			</div><!--fim blocos destaques  -->
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
				<aside id="aside" class="blocos-left"><!-- aside -->
					<h2 class="titulo">_</h2>
					secundario
				</aside><!-- fim aside -->
			</div><!-- fim Lateral esquerda -->
			<div class="blocos-conteudo"><!-- bloco conteudo -->
			<header class="titulo">Mais Vendidos</header>
				<!-- Produto -->
				<article id="produto" class="produto">
					<img src="_imagens/_produtos/empire-logo.jpg">
					<header>Perfume Empire 100ml</header>
					<label>R$ 135,00</label>
					<p>Até 10 x R$ 13,50 sem juros<br><a href="">Ver</a><a href="">Adicionar</a></p>
				</article>
				<!-- Produto -->
				<article id="produto" class="produto">
					<img src="_imagens/_produtos/empire-logo.jpg">
					<header>Perfume Empire 100ml</header>
					<label>R$ 135,00</label>
					<p>Até 10 x R$ 13,50 sem juros<br><a href="">Ver</a><a href="">Adicionar</a></p>
				</article>
				<!-- Produto -->
				<article id="produto" class="produto">
					<img src="_imagens/_produtos/empire-logo.jpg">
					<header>Perfume Empire 100ml</header>
					<label>R$ 135,00</label>
					<p>Até 10 x R$ 13,50 sem juros<br><a href="">Ver</a><a href="">Adicionar</a></p>
				</article>
				<!-- Produto -->
				<article id="produto" class="produto">
					<img src="_imagens/_produtos/empire-logo.jpg">
					<header>Perfume Empire 100ml</header>
					<label>R$ 135,00</label>
					<p>Até 10 x R$ 13,50 sem juros<br><a href="">Ver</a><a href="">Adicionar</a></p>
				</article>
				<!-- Produto -->
				<article id="produto" class="produto">
					<img src="_imagens/_produtos/empire-logo.jpg">
					<header>Perfume Empire 100ml</header>
					<label>R$ 135,00</label>
					<p>Até 10 x R$ 13,50 sem juros<br><a href="">Ver</a><a href="">Adicionar</a></p>
				</article>
				<!-- Produto -->
				<article id="produto" class="produto">
					<img src="_imagens/_produtos/empire-logo.jpg">
					<header>Perfume Empire 100ml</header>
					<label>R$ 135,00</label>
					<p>Até 10 x R$ 13,50 sem juros<br><a href="">Ver</a><a href="">Adicionar</a></p>
				</article>
				<!-- Produto todos -->
				<article id="ver-todos" class="produto">
					<a href="">Ver Todos</a>
				</article>
			</div><!-- fim bloco conteudo -->
			<div class="blocos-conteudo"><!-- bloco conteudo 2 -->
			<header class="titulo">Novidades</header>
				<!-- Produto -->
				<article id="produto" class="produto">
					<img src="_imagens/_produtos/empire-logo.jpg">
					<header>Perfume Empire 100ml</header>
					<label>R$ 135,00</label>
					<p>Até 10 x R$ 13,50 sem juros<br><a href="">Ver</a><a href="">Adicionar</a></p>
				</article>
				<!-- Produto -->
				<article id="produto" class="produto">
					<img src="_imagens/_produtos/empire-logo.jpg">
					<header>Perfume Empire 100ml</header>
					<label>R$ 135,00</label>
					<p>Até 10 x R$ 13,50 sem juros<br><a href="">Ver</a><a href="">Adicionar</a></p>
				</article>
				<!-- Produto -->
				<article id="produto" class="produto">
					<img src="_imagens/_produtos/empire-logo.jpg">
					<header>Perfume Empire 100ml</header>
					<label>R$ 135,00</label>
					<p>Até 10 x R$ 13,50 sem juros<br><a href="">Ver</a><a href="">Adicionar</a></p>
				</article>
				<!-- Produto todos -->
				<article id="ver-todos" class="produto">
					<a href="">Ver Todos</a>
				</article>
			</div><!-- fim bloco conteudo 2 -->
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
				<li><a href="">Criar Conta</a></li>
				<li><a href="">Entrar</a></li>
				<li><a href="cadastrar_produto.php">Acesso Restrito</a></li>
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