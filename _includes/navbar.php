		<div class="row"><!-- row -->
			<div class="col-md-12"><!-- navbar fixed-top -->
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
						</div><!-- fim navbar-header -->
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
								<?php if (isset($_SESSION['login'])): ?>
									<li><a href="">Conta</a></li>
									<li><a href="_funcoes/sair.php">Sair</a></li>
								<?php else: ?>
									<li><a href="#" data-toggle="modal" data-target="#modal-login">Login</a></li>
									<li><a href="#" data-toggle="modal" data-target="#modal-criar-conta">Criar conta</a></li>
								<?php endif; ?>
							</ul>
						</div><!-- fim collapse navbar -->
					</div><!-- fim container navbar -->
				</nav><!-- fim nav -->
			</div><!-- fim navbar -->
		</div><!--  fim row -->