<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
		<div class="base-formulario">	
				<label>Nome</label>
					<input name="txt_nome" value="<?php echo $usuario->nome ?>" type="text" placeholder="Insira o nome">
				<label>Email</label>
					<input name="txt_email" value="<?php echo $usuario->email ?>" type="email" placeholder="Insira o email">
				<label>Senha</label>
					<input name="txt_senha" value="<?php echo $usuario->senha?>" type="password" placeholder="Insira a senha">	
				<div class="col">
					<label>url_imagem</label>
					<input name="txt_url_imagem" value="<?php echo $usuario->url_imagem?>" type="text" placeholder="Insira a url da imagem">
				</div>	
				 
                
				<a href="<?php echo URL_BASE."usuario/edit/".$usuario->id_usuario ?>" class="btn">Editar</a>	
                <a href="<?php echo URL_BASE."usuario/delete/".$usuario->id_usuario."/S" ?>" class="btn">Excluir</a>
				
				
		</div>	


</div>	