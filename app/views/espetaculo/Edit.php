
<div class="base-home">
		<div class="row">
            <h3 class="col-md-12 tituloSis">Editar Espetáculo</h3>
        </div>
	<div class="formularioEsp">		
			<form action="<?php echo URL_BASE."espetaculo/salvar"?>" method="POST">
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
					<select class="form-control" name="txt_localId">
						<?php foreach($locais as $local){ ?>
						<option value="<?php echo $local->id?>"><?php echo $local->nomeResponsavel?></option>	
						<?php } ?>
					</select>		
				</div>	
				<div class="col-md-5">
					<label>Categoria</label>
					<select class="form-control" name="txt_categoriaId">	
					<?php foreach($categorias as $categoria){ ?>
						<option value="<?php echo $categoria->id?>"><?php echo $categoria->nome?></option>	
					<?php } ?>
					</select>
				</div>
				<div class="form-inline col-md-12 formBotoes mt-4">
					<div>
						<input class="form-control" type="hidden" name="acao" value="Cadastrar">
						<input type="hidden" name="id" value="<?php echo $espetaculo->id?>">
						<input type="submit" value="Salvar" class="btn btn-primary">
					</div>
				
				</div>	
				</div>	
			</form>
		</div>	
</div>	