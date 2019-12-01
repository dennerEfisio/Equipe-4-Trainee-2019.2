<div class="parallax1">
	<nav class="navbar navbar-expand-xl navbar-dark navbar-colo">
		<a class="navbar-brand">
			<img src="<?php echo URL_BASE."assets/img/Felipe_Pecas.png";?>" alt="Logo" width="200">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-back" aria-controls="menu-back" aria-expanded="false" aria-label="Toggle navigation">
            <spam class="navbar-toggler-icon"></spam>
		</button>
		
		<div class="collapse navbar-collapse" id="menu-back">
			<ul class="navbar-nav navFont">
				<li class="nav-item mr-3 ml-3"><a class="nav-link text-center" href="<?php echo URL_BASE."administrador" ?>">Menu</a></li>
				<li class="nav-item mr-3 ml-3"><a class="nav-link text-center" href="<?php echo URL_BASE."local" ?>">Local</a></li>
				<li class="nav-item mr-3 ml-3"><a class="nav-link text-center" href="<?php echo URL_BASE."categoria" ?>">Categoria</a></li>
				<li class="nav-item mr-3 ml-3"><a class="nav-link text-center" href="<?php echo URL_BASE."espetaculo" ?>">Espetáculo</a></li>
				<li class="nav-item mr-3 ml-3"><a class="nav-link text-center" href="<?php echo URL_BASE."usuario" ?>">Usuário</a></li>
			</ul>
			<div class="navbar-nav ml-auto">
				<a class="nav-link text-center btn linkLogin" href="<?php echo URL_BASE."administrador/logout"?>">Logout</a>
			</div>
		</div>
	</nav>
