<div class="base-home">
  
		<div class="row">
            <h3 class="col-md-12 tituloSis">Usuários</h3>
        </div>
			
		<div class="row linhacb mt-3">
				<div class="col-md-4">
					<a  class="btn btn-info" href="<?php echo URL_BASE."usuario/novo" ?>">Cadastrar Novo</a>
				</div>
				<div class="col-md-4 mt-3"></div>
				<div class="col-md-4">
					<form class="form-inline" action="<?php echo URL_BASE."usuario/buscar"; ?>" method="GET">
						<input class="col-md-8 form-control mr-1" type="text" placeholder="Buscar" id="pesquisa" name="pesquisa"/>
						<input class="col-md-3 btn btn-info" type="submit" value="Buscar" />
					</form>
				</div>
			</div>

			<div class="table-responsive-xl">
  				<table class="table table-bordered table-hover tabelaIndex">
				  <thead class="thead-dark">
					   <tr>
					   <tr>
						<th>Nome</th>
						<th>Email</th>
						<th colspan="2" align="center">Alterar</th>
					  </tr>
				  </thead>
				  <tbody>
				  <?php foreach($usuarios as $usuario){ ?>
					 <tr class="cor1">
						<td><?= $usuario->nome?></td>
						<td><?= $usuario->email?></td>
						<td align="center">
							<a class="btn btn-info" href="<?= URL_BASE."usuario/delete/".$usuario->id_usuario ?>">Ver mais</a>
						</td>

					 </tr>
					  <?php } ?>
						
				  										  
				  </tbody>
				</table>
		</div>
 </div>