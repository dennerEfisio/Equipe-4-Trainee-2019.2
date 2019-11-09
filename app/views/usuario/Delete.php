<div class="base-home">
	<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
	<div class="base-formulario">
		<label>Nome</label>
		<input name="txt_nome" value="<?php echo $usuario->nome ?>" type="text" placeholder="Insira o nome">
		<label>Email</label>
		<input name="txt_email" value="<?php echo $usuario->email ?>" type="email" placeholder="Insira o email">
		<label>Senha</label>
		<input name="txt_senha" value="<?php echo $usuario->senha?>" type="password" placeholder="Insira a senha">
		<div class="col">
			<label>url_imagem</label>
			<input name="txt_url_imagem" value="<?php echo $usuario->url_imagem?>" type="text"
				placeholder="Insira a url da imagem">
		</div>


		<a href="<?php echo URL_BASE."usuario/edit/".$usuario->id_usuario ?>" class="btn">Editar</a>
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluirModal">Excluir</button>
		

	</div>

</div>

<div class="modal fade" id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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

