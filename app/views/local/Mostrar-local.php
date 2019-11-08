</div>

<div class="container mt-5 mb-5">
    
    <h3><strong>Local:</strong></h3>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>Nome:</strong><?php echo "  ".$local->nomeResponsavel ; ?></p>
            <p class="card-text"><strong>Sobrenome:</strong> <?php echo "  ".$local->sobrenomeResponsavel ; ?></p>
            <p class="card-text"><strong>CPF:</strong><?php echo "  ".$local->cpf ; ?></p>
            <p class="card-text"><strong>Cidade:</strong><?php echo "  ".$local->cidade ; ?></p>
            <p class="card-text"><strong>Bairro:</strong><?php echo "  ".$local->bairro ; ?></p>
            <p class="card-text"><strong>Rua:</strong><?php echo "  ".$local->rua ; ?></p>
            <p class="card-text"><strong>Número:</strong><?php echo "  ".$local->numero ; ?></p>
            <p class="card-text"><strong>Anotações:</strong><?php echo "  ".$local->anotacoes ; ?></p>
        </div>
        <div class="card-footer">
            <a href="<?php echo URL_BASE."local/editar/".$local->id; ?>" class="btn btn-secondary">Editar</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluirLocal" >Excluir</button>
                <div class="modal fade" id="excluirLocal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close fechar" data-dismiss="modal">&#9747;</button>
                                <h3>Aviso</h3>
                            </div>
                            <div class="modal-body">
                                <div  class="mt-2 mb-2">
                                    <p>Realmente deseja excluir esse local permanentemente?</p>
                                </div>
                                <a href="<?php echo URL_BASE."local" ; ?>" class="btn btn-secondary">Cancelar</a>
                                <a href="<?php echo URL_BASE."local/excluir/".$local->id; ?>" class="btn btn-danger" type="submit">Excluir</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </br>
    <a href="<?php echo URL_BASE."local" ; ?>" class="btn btn-secondary" >Voltar</a>
</div>