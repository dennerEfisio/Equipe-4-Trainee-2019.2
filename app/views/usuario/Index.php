<div class="base-home">
			<a href="<?php echo URL_BASE."usuario/novo" ?>" class="btn" style="width:17%">Cadastrar Novo</a>
			<h1 class="titulo"><span class="cor">Lista de</span> contatos</h1>
		<div class="base-lista">
			<span class="qtde"><b><?php echo count($usuarios)?></b> clientes cadastrados</span>
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
						<td><?php echo $usuario->nome?></td>
						<td><?php echo $usuario->email?></td>
						<td align="center">
							<a href="<?php echo URL_BASE."usuario/delete/".$usuario->id_usuario ?>" class="btn">Ver mais</a>
						</td>

					 </tr>
					  <?php } ?>
						
				  										  
				  </tbody>
				</table>
		</div>					
				
		</div>	
</div>	