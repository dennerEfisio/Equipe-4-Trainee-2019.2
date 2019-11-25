
<div class="base-home">
		<div class="row">
            <h3 class="col-md-12 tituloSis">Editar Usuário</h3>
        </div>	
			<div class="formularioEsp">	
			<form action="<?php echo URL_BASE."usuario/salvar"?>" method="POST">
  					<div class="row">
    					<div class="col-md-5">
							<label>Nome</label>
							<input class="form-control" name="txt_nome" value="<?php echo $usuario->nome ?>" type="text" placeholder="Insira o nome">
    					</div>
    					<div class="col-md-5">
							<label>Email</label>
							<input class="form-control" name="txt_email" value="<?php echo $usuario->email ?>" type="email" placeholder="Insira o email">	
   						</div>
    					<div class="col-md-8">
							<label>Senha</label>
							<input class="form-control" name="txt_senha" value="<?php echo $usuario->senha?>" type="password" placeholder="Insira a senha">	
						</div>
						<div class="col-md-8">
							<label>Url_imagem</label>
							<input class="form-control" name="txt_url_imagem" value="<?php echo $usuario->url_imagem ?>" type="text" placeholder="Insira a url da imagem">
						</div>			
						<div class="form-inline col-md-12 formBotoes mt-4">
							<input class="form-control" type="hidden" name="acao" value="Cadastrar">
							<input type="hidden" name="id_usuario" value="<?php echo $usuario->id_usuario?>">
							<input type="submit" value="Salvar" class="btn btn-primary">
						</div>
					</div>
			</form>
		</div>
</div>