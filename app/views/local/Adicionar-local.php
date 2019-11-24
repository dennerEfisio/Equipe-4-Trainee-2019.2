</div>
    <div class="container mt-5 mb-5">
        <h3>Adicionar Local</h3>
        <form action="<?php echo URL_BASE . "local/salvar"; ?>" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="nomeResponsavel">Nome:</label>
                        <input type="text" class="form-control" id="nomeResponsavel" placeholder="Nome" name="nomeResponsavel" required>


                    </div>
                    <div class="col">
                        <label for="sobrenomeResponsavel">Sobrenome:</label>
                        <input type="text" class="form-control" id="sobrenomeResponsavel" placeholder="Sobrenome" name="sobrenomeResponsavel" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" required>
                    </div>
                    <div class="col">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade" required>
                    </div>
                    <div class="col">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro" required>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label for="rua">Rua:</label>
                        <input type="text" class="form-control" id="rua" placeholder="Rua" name="rua" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="numero">Número:</label>
                        <input type="number" class="form-control" id="numero" placeholder="Número" name="numero" required>
                    </div>
                    <div class="col">
                        <label for="complemento">Complemento:</label>
                        <input type="text" class="form-control" id="complemento" placeholder="Complemento" name="complemento" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="anotacoes">Anotações:</label>
                        <textarea type="text" class="form-control" id="anotacoes" placeholder="Anotações" name="anotacoes"></textarea>
                    </div>
                </div>
                <br />
                <button class="btn btn-secondary" type="submit">Adicionar</button>
            </div>
        </form>
        <a href="<?php echo URL_BASE."local" ; ?>" class="btn btn-secondary">Voltar</a>
    </div>
