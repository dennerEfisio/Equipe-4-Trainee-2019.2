<div class="base-home">
			<a href="<?php echo URL_BASE."usuario/novo" ?>" class="btn" style="width:17%">Cadastrar Novo</a>
			<h1 class="titulo"><span class="cor">Lista de</span> Usuários</h1>
		<div class="base-lista">

				<form class="form-inline" action="<?php echo URL_BASE."usuario/buscar"; ?>" method="GET">
                    <input class="form-control mr-1" type="text" placeholder="Buscar" id="pesquisa" name="pesquisa"/>
                    <input class="btn btn-secondary" style="width:17%" type="submit" value="Buscar" />
				</form>
				
			<div class="tabela">	
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <thead>
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
							<a href="<?= URL_BASE."usuario/delete/".$usuario->id_usuario ?>" class="btn">Ver mais</a>
						</td>

					 </tr>
					  <?php } ?>
						
				  										  
				  </tbody>
				</table>
		</div>					
				
		</div>	
</div>	