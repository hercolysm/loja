	<div class="modal fade" id="modal-criar-conta" tabindex="-1" role="dialog" aria-labelledby="modal-label">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modal-label">Criar Conta</h4>
				</div>
				<div class="modal-body">
					<form id="criar-conta-form" method="post" action="_funcoes/criar-conta.php">
						<div class="row">
							<div class="form-group col-md-8">
								<label for="nome" class="control-label">Nome</label>
								<input class="form-control" type="text" name="nome" minlength="5" maxlength="50" pattern="[A-Za-z\s]+$" title="Somente Letras, sem acentos ou caracteres especiais" placeholder="Nome Completo" required="required">
							</div>
							<div class="form-group col-md-4">
								<label for="cpf" class="control-label">CPF</label>
								<input class="form-control" type="text" name="cpf" minlength="14" maxlength="14" pattern="[0-9]{3}[.]{1}[0-9]{3}[.]{1}[0-9]{3}[-]{1}[0-9]{2}" title="999.999.999-99" placeholder="999.999.999-99" required="required" autofocus>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label class="control-label">Data de Nascimento</label>
								<input class="form-control" type="date" name="dt_nasc" minlength="10" maxlength="10" min="1900-01-01" max="2010-01-01" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" title="dd/mm/aaaa" placeholder="dd/mm/aaaa" required="required">
							</div>
							<div class="form-group col-md-6">
								<label for="telefone" class="control-label">Telefone</label>
								<input class="form-control" type="text" name="telefone" minlength="15" maxlength="15" pattern="\([0-9]{2}\) [0-9]{5}\-[0-9]{4}" title="(99) 99999-9999" placeholder="(99) 99999-9999" required="required">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-10">
								<label for="rua" class="control-label">Rua</label>
								<input class="form-control" type="text" name="rua" minlength="1" maxlength="60" required="required">
							</div>
							<div class="form-group col-md-2">
								<label for="numero" class="control-label">Número</label>
								<input class="form-control" type="text" name="numero" pattern="[A-Za-z0-9,-]{1,10}" required="required">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-3">
								<label for="bairro" class="control-label">Bairro</label>
								<input class="form-control" type="text" name="bairro" minlength="1" maxlength="20" required="required">
							</div>
							<div class="form-group col-md-2">
								<label for="cep" class="control-label">CEP</label>
								<input class="form-control" type="text" name="cep" pattern="[0-9]{2}[.]{1}[0-9]{3}[-]{1}[0-9]{3}" placeholder="99.999-999" required="required">
							</div>
							<div class="form-group col-md-3">
								<label for="cidade" class="control-label">Cidade</label>
								<input class="form-control" type="text" name="cidade" minlength="1" maxlength="20" required="required">
							</div>
							<div class="form-group col-md-2">
								<label for="estado" class="control-label">Estado</label>
								<input class="form-control" type="text" name="estado" size="2" required="required">
							</div>
							<div class="form-group col-md-2">
								<label for="nacionalidade" class="control-label">Nacionalidade</label>
								<input class="form-control" type="text" name="nacionalidade" minlength="1" maxlength="20" required="required">
							</div>
						</div>
						<div class="form-group">
							<label for="e_mail" class="control-label">E_mail</label>
							<input class="form-control" type="email" name="e_mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" title="exemplo@mail.com" placeholder="exemplo@mail.com" required="required">
						</div>
						<div class="form-group">
							<label for="senha" class="control-label">Senha</label>
							<input class="form-control" type="password" id="senha" name="senha"  minlength="4" maxlength="20" pattern=".{4,}" title="Minimo 4 caracteres" required="required" onkeypress="checar_caps_lock(event,1)">
						</div>
						<div class="form-group">
							<label for="csenha" class="control-label">Confirmar Senha</label>
							<input class="form-control" type="password" id="csenha" name="csenha" required="required" onkeypress="checar_caps_lock(event,2)" onblur="compararSenha()">
						</div>
						<div class="form-group">
							<button type="submit" class=" btn btn-primary btn-block">Cadastrar</button>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</div>