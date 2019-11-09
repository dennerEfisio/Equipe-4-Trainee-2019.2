<div class="base-home">
			<h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
		<div class="base-formulario">	
			<form action="<?php echo URL_BASE."usuario/salvar"?>" method="POST">
				<label>Nome</label>
					<input name="txt_nome" value="" type="text" placeholder="Insira o nome">
				<label>Email</label>
					<input name="txt_email" value="" type="email" placeholder="Insira o email">
				<label>Senha</label>
					<input name="txt_senha" value="" type="password" placeholder="Insira a senha">	
				<div class="col">
					<label>url_imagem</label>
					<input name="txt_url_imagem" value="" type="text" placeholder="Insira a url da imagem">
				</div>	
				
				
				<input type="hidden" name="acao" value="Cadastrar">
				<input type="hidden" name="id_cliente" value="">
				<input type="submit" value="Cadastrar" class="btn">
			</form>
		</div>	
</div>	