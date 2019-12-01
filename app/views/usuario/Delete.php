</div>
<div class="base-home">
		<div class="row">
            <h3 class="col-md-12 tituloSis">Informações do Usuário</h3>
		</div>
		
		<div class="divImgSis mr-2">
				<img src="<?php echo $usuario->url_imagem ?>" class="imgSis" alt="Usuário">
		</div>	
		 <div class="formularioEsp">
			 <form>
  					<div class="row">
    					<div class="col-md-5">
							<label>Nome</label>
							<input readonly="readonly" class="form-control" name="txt_nome" value="<?php echo $usuario->nome ?>" type="text" placeholder="Insira o nome">
    					</div>
    					<div class="col-md-5">
							<label>Email</label>
							<input readonly="readonly" class="form-control" name="txt_email" value="<?php echo $usuario->email ?>" type="email" placeholder="Insira o email">	
   						</div>
    					<div class="col-md-8">
							<label>Senha</label>
							<input readonly="readonly" class="form-control" name="txt_senha" value="<?php echo $usuario->senha?>" type="password" placeholder="Insira a senha">	
						</div>		
						<div class="form-inline col-md-12 formBotoes mt-4">
							<div>
								<input class="form-control" type="hidden" name="acao" value="Cadastrar">
								<input class="form-control" type="hidden" name="id" value="<?php echo $usuario->id_usuario ?>">
								<a class="btn btn-primary" href="<?php echo URL_BASE."usuario/edit/".$usuario->id_usuario ?>">Editar</a>	
							</div>
							<div class="ml-4">
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluirModal">Excluir</button>
							</div>
						</div>
					</div>
			</form> 
		</div> 
</div>



<div class="modal fade" id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Deseja mesmo excluir esse usuário?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a href="<?php echo URL_BASE."usuario/delete/".$usuario->id_usuario."/S" ?>" class="btn btn-danger">Excluir</a>
			</div>
		</div>
	</div>
</div>

