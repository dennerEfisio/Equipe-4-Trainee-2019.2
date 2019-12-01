<div class="parallax1">
        <nav class="navbar navbar-expand-xl navbar-dark navbar-color">
            <a class="navbar-brand" href="#">
                <img src="<?php echo URL_BASE."assets/img/Felipe_Pecas.png" ?>" width="200">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <spam class="navbar-toggler-icon"></spam>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav navFont">
                    <li class="nav-item mr-3 ml-3">

                        <a class="nav-link text-center" href="<?php echo URL_BASE; ?>">Início</a>

                    </li>

                    <li class="nav-item mr-3 ml-3">

                        <a class="nav-link text-center" href="<?php echo URL_BASE."portfolio"; ?>">Espetáculos</a>

                    </li>

                    <li class="nav-item mr-3 ml-3">

                        <a class="nav-link text-center" href="<?php echo URL_BASE."quemsomos"; ?>">Quem Somos</a>

                    </li>

                    <li class="nav-item mr-3 ml-3">
                        <div class="navbar-nav mt-2">
                            <button type="button" class="align-self-center contatoBotao" data-toggle="modal" data-target="#contModal">Contato</button>
                        </div>
                    </li>

                </ul>
                <div class="navbar-nav ml-auto">
                    <button type="button" class="ml-4 mr-4 align-self-center linkLogin" data-toggle="modal" data-target="#myModal">Login</button>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header titulo-modal">
                                    <button type="button" class="close fechar" data-dismiss="modal">&#9747;</button>
                                    <h3 class="modal-title">Login</h3>
                                    <hr>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo URL_BASE."administrador/logar"; ?>" method="get">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" class="form-control" id="email" name="login_email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="senha">Senha:</label>
                                            <input type="password" class="form-control" id="senha" name="login_senha" required>
                                        </div>
                                        <div class="botao" tabindex="0">
                                            <button type="submit" class="btn btn-primary botaoModal">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="modal fade" id="contModal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header contHead">
                            <button type="button" class="close fechar" data-dismiss="modal">&#9747;</button>
                            <h3 class="modal-title contTitulo">Entre em contato conosco :</h3>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo URL_BASE."contato"; ?>" method="POST">
                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control inputContModal" id="nome" placeholder="Nome Completo" name="nome" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control inputContModal" id="email" placeholder="nome@exemplo.com" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone:</label>
                                    <input type="text" class="form-control inputContModal" id="telefone" placeholder="(00) 00000-0000" name="telefone" required>
                                </div>
                                <div class="form-group">
                                    <label for="mensagem">Mensagem:</label>
                                    <textarea class="form-control inputContModal" id="mensagem" rows="3" name="mensagem" required></textarea>
                                </div>

                                <div class="botoesContModal" tabindex="0">
                                    <button type="button" class="btn btn-danger botaoCancelar" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn botaoEnviar">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </nav>



