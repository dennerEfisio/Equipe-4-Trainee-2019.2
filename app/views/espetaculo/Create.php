<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
		<div class="base-formulario">	
			<form action="<?php echo URL_BASE."espetaculo/salvar"?>" method="POST">
				<label>Nome</label>
					<input name="txt_nome" value="" type="text" placeholder="Insira o nome">
				<label>Ingresso</label>
					<input name="txt_ingresso" value="" type="number" placeholder="Valor do ingresso">
				<label>Sinopse</label>
					<input name="txt_sinopse" value="" type="text" placeholder="Insira a sinopse">	
				<div class="col">
					<label>url_imagem</label>
					<input name="txt_url_imagem" value="" type="text" placeholder="Insira a url da imagem">
				</div>	
				<div class="col">
					<label>Local</label>
						<select name="txt_localId">
						<?php foreach($locais as $local){ ?>
							<option value="<?php echo $local->id?>"><?php echo $local->nomeResponsavel?></option>	
						<?php } ?>
						</select>
				</div>	
				
				<div class="col">
					<label>Categoria</label>
						<select name="txt_categoriaId">
						<?php foreach($categorias as $categoria){ ?>
							<option value="<?php echo $categoria->id?>"><?php echo $categoria->nome?></option>	
						<?php } ?>
					</select>
				</div>
				
				<input type="hidden" name="acao" value="Cadastrar">
				<input type="hidden" name="id" value="">
				<input type="submit" value="Cadastrar" class="btn">
				<input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
			</form>
		</div>	
</div>	