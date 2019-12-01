</div>


    <div class="container mt-5 mb-5">
        <h3>Excluir Local</h3>
        <form >
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="nomeResponsavel">Nome:</label>
                        <input type="text" class="form-control" id="nomeResponsavel" placeholder="Nome" value="<?php echo $local->nomeResponsavel; ?>" name="nomeResponsavel" required>


                    </div>
                    <div class="col">
                        <label for="sobrenomeResponsavel">Sobrenome:</label>
                        <input type="text" class="form-control" id="sobrenomeResponsavel" placeholder="Sobrenome" value="<?php echo $local->sobrenomeResponsavel; ?>" name="sobrenomeResponsavel" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" id="cpf" placeholder="CPF" value="<?php echo $local->cpf; ?>" name="cpf" required>
                    </div>
                    <div class="col">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Cidade" value="<?php echo $local->cidade; ?>" name="cidade" required>
                    </div>
                    <div class="col">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" placeholder="Bairro" value="<?php echo $local->bairro; ?>" name="bairro" required>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label for="rua">Rua:</label>
                        <input type="text" class="form-control" id="rua" placeholder="Rua" value="<?php echo $local->rua; ?>" name="rua" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="numero">Número:</label>
                        <input type="text" class="form-control" id="numero" placeholder="Número" value="<?php echo $local->numero; ?>" name="numero" required>
                    </div>
                    <div class="col">
                        <label for="complemento">Complemento:</label>
                        <input type="text" class="form-control" id="complemento" placeholder="Complemento" value="<?php echo $local->complemento; ?>" name="complemento" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="anotacoes">Anotações:</label>
                        <textarea type="text" class="form-control" id="anotacoes" placeholder="Anotações" value="<?php echo $local->anotacoes; ?>" name="anotacoes"></textarea>
                    </div>
                </div>
            
                <input type="hidden" name="id" value="<?php echo $local->id; ?>">

                <br />
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#excluirLocal" >teste</button>
                <div class="modal fade" id="excluirLocal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close fechar" data-dismiss="modal">&#9747;</button>
                                <h3>Aviso</h3>
                            </div>
                            <div class="modal-body">

                                <a href="<?php echo URL_BASE."local" ; ?>" class="btn btn-info">Cancelar</a>
                                <a href="<?php echo URL_BASE."local/excluir/".$local->id; ?>" class="btn btn-danger" type="submit">Excluir</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </form>
        <a href="<?php echo URL_BASE."local" ; ?>" class="btn btn-info">Voltar</a>

    </div>
    