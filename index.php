<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Loja Virtual da Hinode">
	<title>Layout da página</title>
	<link rel="stylesheet" href="_css/folha_de_estilo.css">
	<link rel="stylesheet" href="_css/bootstrap.css">
	<script src="_script/jquery.js"></script>
	<script src="_script/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#idcollapse" aria-expanded="false">
									<span class="sr-only">Navegação Alterada</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a href="#" class="navbar-brand">
									<div id="logo-brand"></div>
								</a>
						</div>
						<div class="collapse navbar-collapse" id="idcollapse">
							<span class="navbar-text">Hinode Online</span>
							<form method="get" action="" class="navbar-form navbar-left">
								<div class="form-group">
									<label for="busca" class="sr-only">Buscar Produto</label>
									<input type="text" name="busca" class="form-control" placeholder="Buscar Produto">
								</div>
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
								<button type="button" class="btn btn-default carrinho">
										<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> <span class="carrinho-texto">Carrinho</span>
										<span class="carrinho-itens">0</span>
								</button>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li class="log_no"><a href="cadastrar_usuario.php">Criar conta</a></li>
								<li class="log_yes"><a href="">Conta</a></li>
								<li class="log_no"><a href="login.php">Entrar</a></li>
								<li class="log_yes"><a href="sair.php" class="button">Sair</a></li>
							</ul>
						</div>
					</div>
				</nav>
				
			</div>
		</div>
		<div class="row margin-top">

			<div class="col-md-12">
				<h1 class="sr-only">Menu Principal</h1>
				<ul class="nav nav-pills nav-justified">
					<li class="active"><a href="index.php">Página Inicial</a></li>
					<li><a href="categorias.php">Categorias</a></li>
					<li><a href="ofertas.php">Ofertas</a></li>
					<li><a href="blackfriday.php">Black Friday</a></li>
					<li><a href="sac.php">SAC</a></li>
				</ul>
			</div>

		</div>
		<div class="row">
			<div class="col-md-8 margin-top">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel" data-slide-to="0" class="active"></li>
						<li data-target="#carousel" data-slide-to="1"></li>
						<li data-target="#carousel" data-slide-to="2"></li>
						<li data-target="#carousel" data-slide-to="3"></li>
					</ol>

					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="_imagens/destaque00.jpg" alt="">
							<div class="carousel-caption"></div>
						</div>
						<div class="item">
							<img src="_imagens/destaque01.jpg" alt="">
							<div class="carousel-caption"></div>
						</div>
						<div class="item">
							<img src="_imagens/destaque02.jpg" alt="">
							<div class="carousel-caption"></div>
						</div>
						<div class="item">
							<img src="_imagens/destaque03.jpg" alt="">
							<div class="carousel-caption"></div>
						</div>
					</div>
					<a href="#carousel" class="left carousel-control" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
					<a href="#carousel" class="right carousel-control" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
			</div>
			<div class="col-md-4 margin-top">
				
				<div>
					<a href="#">
						<img src="_imagens/produto-destaque.jpg" class="img-responsive">
					</a>
				</div>

			</div>
		</div>
		<div class="row margin-top">
			<div class="col-md-3">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="panel-title">Categorias</h1>
					</div>
					<ul class="list-unstyled nav nav-stacked">
						<li><a href="">Abelha</a></li>
						<li><a href="">Bola</a></li>
						<li><a href="">Coração</a></li>
						<li><a href="">Dado</a></li>
						<li><a href="">Elefante</a></li>
						<li><a href="">Faca, foca e fardamentos</a></li>
					</ul>
				</div>

			</div>
			<div class="col-md-9">
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="panel-title">Destaques</h1>
					</div>
					<div class="panel-body">
						<!-- Produto -->
						<div id="produto" class="produto">
							<img src="_imagens/_produtos/empire.png">
							<h1>Perfume Empire 100ml</h1>
							<p>Até 10 x R$ 13,50 sem juros</p>
							<label>R$ 130,00</label>
							<label><del>R$ 135,00</del></label>
							<a href="#" class="btn btn-default btn-block">Detalhes</a>
							<a href="#" class="btn btn-default btn-block">Add <i class="glyphicon glyphicon-shopping-cart"></i></a>
						</div>
						<!-- Produto -->
						<div id="produto" class="produto">
							<img src="_imagens/_produtos/Eterna.png">
							<h1>Perfume Eterna 100ml</h1>
							<p>Até 10 x R$ 13,50 sem juros</p>
							<label>R$ 130,00</label>
							<label><del>R$ 135,00</del></label>
							<a href="#" class="btn btn-default btn-block">Detalhes</a>
							<a href="#" class="btn btn-default btn-block">Add <i class="glyphicon glyphicon-shopping-cart"></i></a>
						</div>
						<!-- Produto -->
						<div id="produto" class="produto">
							<img src="_imagens/_produtos/eterna-blue.png">
							<h1>Perfume Eterna Blue 100ml</h1>
							<p>Até 10 x R$ 13,50 sem juros</p>
							<label>R$ 13,00</label>
							<label><del>R$ 135,00</del></label>
							<a href="#" class="btn btn-default btn-block">Detalhes</a>
							<a href="#" class="btn btn-default btn-block">Add <i class="glyphicon glyphicon-shopping-cart"></i></a>
						</div>
						<!-- Produto -->
						<div id="produto" class="produto">
							<img src="_imagens/_produtos/grace.png">
							<h1>Perfume Grace 100ml</h1>
							<p>Até 10 x R$ 13,50 sem juros</p>
							<label>R$ 130,00</label>
							<label><del>R$ 135,00</del></label>
							<a href="#" class="btn btn-default btn-block">Detalhes</a>
							<a href="#" class="btn btn-default btn-block">Add <i class="glyphicon glyphicon-shopping-cart"></i></a>
						</div>
						<!-- Produto -->
						<div id="produto" class="produto">
							<img src="_imagens/_produtos/grand.png">
							<h1>Perfume Grand 100ml</h1>
							<p>Até 10 x R$ 13,50 sem juros</p>
							<label>R$ 130,00</label>
							<label><del>R$ 135,00</del></label>
							<a href="#" class="btn btn-default btn-block">Detalhes</a>
							<a href="#" class="btn btn-default btn-block">Add <i class="glyphicon glyphicon-shopping-cart"></i></a>
						</div>
						<!-- Produto -->
						<div id="produto" class="produto">
							<img src="_imagens/_produtos/traducoes-fem.png">
							<h1>Perfume Traduções Gold 100ml</h1>
							<p>Até 10 x R$ 12,00 sem juros</p>
							<label>R$ 110,00</label>
							<label><del>R$ 120,00</del></label>
							<a href="#" class="btn btn-default btn-block">Detalhes</a>
							<a href="#" class="btn btn-default btn-block">Add <i class="glyphicon glyphicon-shopping-cart"></i></a>
						</div>
						<!-- Produto -->
						<div id="produto" class="produto">
							<img src="_imagens/_produtos/traducoes-masc.png">
							<h1>Perfume Traduções Gold 100ml</h1>
							<p>Até 10 x R$ 12,00 sem juros</p>
							<label>R$ 110,00</label>
							<label><del>R$ 120,00</del></label>
							<a href="#" class="btn btn-default btn-block">Detalhes</a>
							<a href="#" class="btn btn-default btn-block">Add <i class="glyphicon glyphicon-shopping-cart"></i></a>
						</div>
						<!-- Produto -->
						<div id="produto" class="produto">
							<img src="_imagens/_produtos/hidratante-sensacoes-e-hot-gel.png">
							<h1>Kit Hidratante Sensações + Hot Gel</h1>
							<p>Até 4 x R$ 11,50 sem juros</p>
							<label>R$ 41,00</label>
							<label><del>R$ 56,00</del></label>
							<a href="#" class="btn btn-default btn-block">Detalhes</a>
							<a href="#" class="btn btn-default btn-block">Add <i class="glyphicon glyphicon-shopping-cart"></i></a>
						</div>
						<!-- Produto todos -->
						<div id="ver-todos" class="produto">
							<a href="">Ver Todos</a>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-sm-3 col-xs-6">
							<ul class="list-unstyled text-center">
								<li><a href="">Home</a></li>
								<li><a href="">Destaques</a></li>
								<li><a href="">Ofertas</a></li>
								<li><a href="">Black Friday</a></li>
								<li><a href="">Parceiros</a></li>
								<li><a href="">SAC</a></li>
							</ul>
						</div>
						<div class="col-sm-3 col-xs-6">
							<ul class="list-unstyled text-center">
								<li><a href="">Atendimento Online</a></li>
								<li><a href="">Busca Avançada</a></li>
								<li><a href="">Criar Conta</a></li>
								<li><a href="">Entrar</a></li>
								<li><a href="cadastrar_produto.php">Acesso Restrito</a></li>
							</ul>
						</div>
						<div class="col-sm-3 col-xs-6">
							<ul class="list-unstyled text-center">
								<li><a href="http://www.facebook.com"><i></i> Facebook</a></li>
								<li><a href="http://www.twitter.com"><i></i> Twitter</a></li>
								<li><a href="https://plus.google.com/"><i></i> Google+</a></li>
								<li><a href="http://www.linkedin.com"><i></i> Linkedin</a></li>
								<li><a href="http://www.youtube.com"><i></i> You Tube</a></li>
							</ul>
						</div>
						<div class="col-sm-3 col-xs-6">
							<ul class="list-unstyled text-center">
								<li>Rua dos Parlamentos, 4321,</li>
								<li> Cristovo Colombo, 60.132-570</li>
								<li>Tel: (85) 9 3242-1234</li>
								<li>E-mail: hinode@hinode.com</li>
							</ul>
						</div>
					</div>
					<div class="panel-footer">
						<a href="#">
							<i class="glyphicon glyphicon-chevron-up"></i>
						</a>
						<p class="pull-right">Copyright <i class="glyphicon glyphicon-registration-mark"></i> 2017 E-commerce HINODE | Politica de Privacidade | Condições de Uso</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>