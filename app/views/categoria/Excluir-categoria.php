<div class="container mt-5 mb-5">
    <h3>Excluir Categoria</h3>
    <form action="<?php echo URL_BASE . "categoria/salvar"; ?>" method="POST">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" value="<?php echo $categoria->nome ?>" required>


                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricao" value="<?php echo $categoria->descricao ?>" required>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $categoria->id; ?>">
            <a href="<?php echo URL_BASE . "categoria/excluir/".$categoria->id ; ?>" class="btn btn-info" type="submit">Excluir</a>
        </div>
    </form>
    <a href="<?php echo URL_BASE . "categoria"; ?>" class="btn btn-info">Voltar</a>
</div>