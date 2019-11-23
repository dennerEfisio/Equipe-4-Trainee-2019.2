</div>
<div class="container mt-5 mb-5">
    <h2>Editar Home</h2>
    <br/>
    <form action="<?php echo URL_BASE . "home/editar"; ?>" method="POST">
        <div class="form-group">
            <div class="border border-dark p-3 rounded">
                <h3><strong>Primeiro Texto:</strong></h3>
                <div class="row mt-3">
                    <div class="col border p-3 rounded">
                        <h2><?php $this->ler(PATH_TXT."home/titulop1.txt") ?></h2>
                        <p><?php $this->ler(PATH_TXT."home/textop1.txt") ?></p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="titulop1">Título Primeiro Parágrafo:</label>
                        <textarea type="text" class="form-control" id="titulop1" placeholder="Novo Título" name="titulop1"></textarea>
                        <label for="textop1">Conteúdo Primeiro Parágrafo:</label>
                        <textarea type="text" class="form-control" id="textop1" placeholder="Novo paragrafo" name="textop1"></textarea>
                    </div>
                </div>
            </div>
            <br/>
            <div class="border border-dark p-3 rounded">
                <h3><strong>Segundo Texto:</strong></h3>
                <div class="row mt-3">
                    <div class="col border p-3 rounded">
                        <h2><?php $this->ler(PATH_TXT."home/titulop2.txt") ?></h2>
                        <p><?php $this->ler(PATH_TXT."home/textop2.txt") ?></p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="titulop2">Título Segundo Parágrafo:</label>
                        <textarea type="text" class="form-control" id="titulop2" placeholder="Novo Título" name="titulop2"></textarea>
                        <label for="textop2">Conteúdo Segundo Parágrafo:</label>
                        <textarea type="text" class="form-control" id="textop2" placeholder="Novo paragrafo" name="textop2"></textarea>
                    </div>
                </div>
            </div>
            <br />
            <button class="btn btn-secondary" type="submit">Salvar</button>
        </div>
    </form>
    <a href="<?php echo URL_BASE."home/" ; ?>" class="btn btn-secondary">Voltar</a>
</div>
