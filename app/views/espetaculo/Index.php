
</div>
<div class="base-home">
			
		<div class="row">
            <h3 class="col-md-12 tituloSis">Espetáculos</h3>
        </div>
			<div class="row linhacb mt-3">
				<div class="col-md-4">
					<a  class="btn btn-info" href="<?php echo URL_BASE."espetaculo/novo" ?>">Cadastrar Novo</a>
				</div>
				<div class="col-md-4 mt-3"></div>
				<div class="col-md-4">
					<form class="form-inline" action="<?php echo URL_BASE."espetaculo/buscar"; ?>" method="GET">
						<input class="col-md-8 form-control mr-1" type="text" placeholder="Buscar" name="pesquisa"/>
						<input class="col-md-3 btn btn-info" type="submit" value="Buscar" />
					</form>
				</div>
			</div>

				<div class="table-responsive-xl mt-5">
  				<table class="table table-bordered table-hover tabelaIndex">
				  <thead class="thead-dark">
					   <tr>
						<th>Nome</th>
						<th>Local id</th>
						<th>Categoria id</th>
						<th colspan="2" align="center">Alterar</th>
					  </tr>
				  </thead>
				  <tbody>
				  	<?php foreach($espetaculos as $espetaculo){ ?>
					 <tr class="cor1">
						<td><?php echo $espetaculo->nome?></td>
						<td><?php echo $espetaculo->local_id?></td>
						<td><?php echo $espetaculo->categoria_id?></td>
						<td align="center">
							<a class="btn btn-info" href="<?php echo URL_BASE."espetaculo/delete/".$espetaculo->id ?>">Ver mais</a>
						</td>

					 </tr>
					  <?php } ?>
						
				  										  
				  </tbody>
				</table>
		</div>					
				
	
</div>	