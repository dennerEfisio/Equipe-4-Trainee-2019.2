</div>
<div class="container mt-5 mb-5">
    <h3>Adicionar Categoria</h3>
    <form action="<?php echo URL_BASE . "categoria/salvar"; ?>" method="POST">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required>


                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="descricao">Descrição:</label>
                    <textarea type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao" required></textarea>
                </div>
            </div>

            <button class="btn btn-info" type="submit">Adicionar</button>
        </div>
    </form>
    <a href="<?php echo URL_BASE . "categoria"; ?>" class="btn btn-info">Voltar</a>
</div>