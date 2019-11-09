<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
		<div class="base-formulario">	
				<label>Nome</label>
					<input name="txt_nome" value="<?php echo $espetaculo->nome ?>" type="text" placeholder="Insira o nome">
				<label>Ingresso</label>
					<input name="txt_ingresso" value="<?php echo $espetaculo->ingresso ?>" type="number" placeholder="Valor do ingresso">
				<label>Sinopse</label>
					<input name="txt_sinopse" value="<?php echo $espetaculo->sinopse ?>" type="text" placeholder="Insira a sinopse">	
				<div class="col">
					<label>url_imagem</label>
					<input name="txt_url_imagem" value="<?php echo $espetaculo->url_imagem ?>" type="text" placeholder="Insira a url da imagem">
				</div>	
				<div class="col">
					<label>Local</label>
					<input name="txt_localId" value="<?php echo $espetaculo->local_id ?>" type="number" placeholder="">
				</div>	
				
				<div class="col">
					<label>Categoria</label>
					<input name="txt_categoriaId" value="<?php echo $espetaculo->categoria_id ?>" type="number" placeholder="">
				</div>
				 
                
				<a href="<?php echo URL_BASE."espetaculo/edit/".$espetaculo->id ?>" class="btn">Editar</a>	
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
				Deseja mesmo excluir esse espetáculo?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a href="<?php echo URL_BASE."espetaculo/delete/".$espetaculo->id."/S" ?>" class="btn btn-danger">Excluir</a>
			</div>
		</div>
	</div>
</div>