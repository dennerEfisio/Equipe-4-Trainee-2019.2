<div class="base-home">
		<div class="row">
            <h3 class="col-md-12 tituloSis">Novo Usuário</h3>
		</div>
		<div class="formularioEsp">	
		<form action="<?php echo URL_BASE."usuario/salvar"?>" method="POST">
  			<div class="row">
    			<div class="col-md-5">
					<label>Nome</label>
					<input class="form-control" name="txt_nome" value="" type="text" placeholder="Insira o nome">
				</div>
				<div class="col-md-5">
					<label>Email</label>
					<input class="form-control" name="txt_email" value="" type="email" placeholder="Insira o email">
				</div>
				<div class="col-md-5">
					<label>Senha</label>
					<input class="form-control" name="txt_senha" value="" type="password" placeholder="Insira a senha">
				</div>
				<div class="col-md-8">
					<label>Url_imagem</label>
					<input class="form-control" name="txt_url_imagem" value="" type="text" placeholder="Insira a url da imagem">
				</div>
				<div class="form-inline col-md-12 formBotoes mt-4">
					<div>
						<input class="form-control" type="hidden" name="acao" value="Cadastrar">
						<input class="form-control" type="hidden" name="id" value="">
						<input class="form-control btn btn-info btn-lg" type="submit" value="Cadastrar">
					</div>
					<div class="ml-4">
						<input class="form-control btn btn-danger btn-lg" type="reset" name="Reset" id="button" value="Limpar">
					</div>
				</div>
 	 		</div>
		</form>
	</div>	
</div>


			
				
				
				