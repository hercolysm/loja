<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Loja Virtual da Hinode">
	<title>Página Inicial</title>
	<link rel="stylesheet" href="_css/folha_de_estilo.css">
	<link rel="stylesheet" href="_css/bootstrap.css">
	<script src="_script/jquery.js"></script>
	<script src="_script/bootstrap.js"></script>
<?php require_once "_funcoes/codigoPHP.php"; ?>
</head>
<body>
	<div class="container">

<?php require_once "_includes/navbar.php"; // inclui o navbar ?>

<?php require_once "_includes/menu-principal.php"; // inclui o menu principal ?>

		<div class="row"><!-- row  -->
			<div class="col-md-8 margin-top"><!-- carousel  -->
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
				</div><!-- fim carousel -->
			</div>
			<div class="col-md-4 margin-top"><!-- produto destaque -->
				<div>
					<a href="#">
						<img src="_imagens/produto-destaque.jpg" class="img-responsive">
					</a>
				</div>
			</div><!-- fim produto destaque -->
		</div><!-- fim row  -->

		<div class="row margin-top"><!-- row -->

<?php require_once "_includes/panel-categorias.php"; // inclui o panel categorias ?>

			<div class="col-md-9"><!-- panel produtos -->
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
					</div><!-- fim panel body -->
				</div><!-- fim panel default -->
			</div><!-- fim panel produtos -->
		</div><!-- fim row -->

<?php require_once "_includes/footer.php"; // inclui o footer ?>

<?php require_once "_includes/modal-login.php"; // inclui o modal login ?>

<?php require_once "_includes/modal-criar-conta.php"; // inclui o modal criar conta ?>

	</div><!-- fim container -->
</body>
</html>