<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
		<div class="base-formulario">	
			<form action="<?php echo URL_BASE."espetaculo/salvar"?>" method="POST">
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
				 
				<input type="hidden" name="id" value="<?php echo $espetaculo->id?>">
				<input type="submit" value="Salvar" class="btn">
			</form>
		</div>	
</div>	