
</div>

<div class="container mt-5 mb-5">
    <h3><strong>Categoria:</strong></h3>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>Nome:</strong><?php echo "  ".$categoria->nome ; ?></p>
            <p class="card-text"><strong>Descrição:</strong> <?php echo "  ".$categoria->descricao ; ?></p>
            
        </div>
        <div class="card-footer">
            <a href="<?php echo URL_BASE."categoria/editar/".$categoria->id; ?>" class="btn btn-info">Editar</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluirCategoria" >Excluir</button>
                <div class="modal fade" id="excluirCategoria" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close fechar" data-dismiss="modal">&#9747;</button>
                                <h3>Aviso</h3>
                            </div>
                            <div class="modal-body">
                                <div class="mt-2 mb-2">
                                    <p>Realmente deseja excluir essa categoria permanentemente?</p>
                                </div>
                                <a href="<?php echo URL_BASE."categoria" ; ?>" class="btn btn-info">Cancelar</a>
                                <a href="<?php echo URL_BASE."categoria/excluir/".$categoria->id; ?>" class="btn btn-danger" type="submit">Excluir</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </br>
    <a href="<?php echo URL_BASE."categoria"; ?>" class="btn btn-info" >Voltar</a>
</div>