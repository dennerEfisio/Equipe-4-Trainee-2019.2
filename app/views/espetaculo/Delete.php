
<div class="base-home">	
		<div class="row">
            <h3 class="col-md-12 tituloSis">Informações do Espetáculo</h3>
        </div>
	<div class="formularioEsp">	
		<form>
		<fieldset disabled>
  			<div class="row">
    			<div class="col-md-5">
					<label>Nome</label>
					<input class="form-control" name="txt_nome" value="<?php echo $espetaculo->nome ?>" type="text" placeholder="Insira o nome">
    			</div>
    			<div class="col-md-5">
					<label>Ingresso</label>
					<input class="form-control" name="txt_ingresso" value="<?php echo $espetaculo->ingresso ?>" type="number" placeholder="Valor do ingresso">
   				</div>
    			<div class="col-md-8">
  					<label>Sinopse</label>
					<input class="form-control" name="txt_sinopse" value="<?php echo $espetaculo->sinopse ?>" type="text">
				</div>
				<div class="col-md-8">
					<label>Url_imagem</label>
					<input class="form-control" name="txt_url_imagem" value="<?php echo $espetaculo->url_imagem ?>" type="text" placeholder="Insira a url da imagem">
				</div>
				<div class="col-md-5">
					<label>Local</label>
					<input class="form-control" name="txt_localId" value="<?php echo $espetaculo->local_id ?>" type="number" placeholder="">		
				</div>
				<div class="col-md-5">
					<label>Categoria</label>
					<input class="form-control" name="txt_categoriaId" value="<?php echo $espetaculo->categoria_id ?>" type="number" placeholder="">
				</div>
		</fieldset>
				<div class="form-inline col-md-12 formBotoes mt-4">
					<div>
						<input class="form-control" type="hidden" name="acao" value="Cadastrar">
						<input class="form-control" type="hidden" name="id" value="<?php echo $espetaculo->id ?>">
						<a href="<?php echo URL_BASE."espetaculo/edit/".$espetaculo->id ?>" class="btn btn-primary">Editar</a>	
				
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
				Deseja mesmo excluir esse espetáculo?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a href="<?php echo URL_BASE."espetaculo/delete/".$espetaculo->id."/S" ?>" class="btn btn-danger">Excluir</a>
			</div>
		</div>
	</div>
</div>