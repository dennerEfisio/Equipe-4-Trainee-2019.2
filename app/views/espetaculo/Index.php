<div class="base-home">
			<a href="<?php echo URL_BASE."espetaculo/novo" ?>" class="btn" style="width:17%">Cadastrar Novo</a>
			<h1 class="titulo"><span class="cor">Lista de</span> contatos</h1>
		<div class="base-lista">
			<span class="qtde"><b><?php echo count($espetaculos)?></b> clientes cadastrados</span>
			<div class="tabela">	
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <thead>
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
						<!-- <td align="center">
							<a href="<?php echo URL_BASE."espetaculo/edit/".$espetaculo->id ?>" class="btn">Editar</a>
						</td>
						<td align="center">
							<a href="<?php echo URL_BASE."espetaculo/delete/".$espetaculo->id ?>" class="btn excluir">excluir</a>
						</td> -->
						<td align="center">
							<a href="<?php echo URL_BASE."espetaculo/delete/".$espetaculo->id ?>" class="btn excluir">Ver mais</a>
						</td>

					 </tr>
					  <?php } ?>
						
				  										  
				  </tbody>
				</table>
		</div>					
				
		</div>	
</div>	