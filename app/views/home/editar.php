</div>
<div class="container mt-5 mb-5">
    <h2>Editar Home</h2>
    <br/>
    <form action="<?php echo URL_BASE . "home/editar"; ?>" method="POST">
        <div class="form-group">
            <div class="border border-dark p-5 rounded">
                <h3><strong>Primeiro Texto:</strong></h3>
                <div class="row mt-3">
                    <div class="col border p-3 rounded">
                        <h2><?php $this->ler(PATH_TXT."home/titulop1.txt"); ?></h2>
                        <p><?php $this->ler(PATH_TXT."home/textop1.txt"); ?></p>
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
            <div class="border border-dark p-5 rounded">
                <div class="border border-dark p-3 rounded">
                    <h3><strong>Primeiro Slide:</strong></h3>
                    <div class="row mt-3">
                        <div class="col border p-3 rounded">
                            <h2><?php $this->ler(PATH_TXT."home/slides/titulos1.txt"); ?></h2>
                            <p><?php $this->ler(PATH_TXT."home/slides/descricaos1.txt"); ?></p>                            
                            <p><?php $this->ler(PATH_TXT."home/slides/textos1.txt"); ?></p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="titulos1">Título Primeiro Slide:</label>
                            <textarea type="text" class="form-control" id="titulos1" placeholder="Novo Título" name="titulos1"></textarea>
                            <label for="descricaos1">Descrição Simplificada Primeiro Slide:</label>
                            <textarea type="text" class="form-control" id="descricaos1" placeholder="Nova Descrição Simplificada" name="descricaos1"></textarea>
                            <label for="textos1">Descrição Detalhada Primeiro Slide:</label>
                            <textarea type="text" class="form-control" id="textos1" placeholder="Nova Descrição Detalhada" name="textos1"></textarea>
                        </div>
                    </div>
                </div>
                <div class="border border-dark p-3 rounded">
                    <h3><strong>Segundo Slide:</strong></h3>
                    <div class="row mt-3">
                        <div class="col border p-3 rounded">
                            <h2><?php $this->ler(PATH_TXT."home/slides/titulos2.txt"); ?></h2>
                            <p><?php $this->ler(PATH_TXT."home/slides/descricaos2.txt"); ?></p>                            
                            <p><?php $this->ler(PATH_TXT."home/slides/textos2.txt"); ?></p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="titulos2">Título Segundo Slide:</label>
                            <textarea type="text" class="form-control" id="titulos2" placeholder="Novo Título" name="titulos2"></textarea>
                            <label for="descricaos2">Descrição Simplificada Segundo Slide:</label>
                            <textarea type="text" class="form-control" id="descricaos2" placeholder="Nova Descrição Simplificada" name="descricaos2"></textarea>
                            <label for="textos2">Descrição Detalhada Segundo Slide:</label>
                            <textarea type="text" class="form-control" id="textos2" placeholder="Nova Descrição Detalhada" name="textos2"></textarea>
                        </div>
                    </div>
                </div>
                <div class="border border-dark p-3 rounded">
                    <h3><strong>Terceiro Slide:</strong></h3>
                    <div class="row mt-3">
                        <div class="col border p-3 rounded">
                            <h2><?php $this->ler(PATH_TXT."home/slides/titulos3.txt"); ?></h2>
                            <p><?php $this->ler(PATH_TXT."home/slides/descricaos3.txt"); ?></p>                            
                            <p><?php $this->ler(PATH_TXT."home/slides/textos3.txt"); ?></p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="titulos3">Título Terceiro Slide:</label>
                            <textarea type="text" class="form-control" id="titulos3" placeholder="Novo Título" name="titulos3"></textarea>
                            <label for="descricaos3">Descrição Simplificada Terceiro Slide:</label>
                            <textarea type="text" class="form-control" id="descricaos3" placeholder="Nova Descrição Simplificada" name="descricaos3"></textarea>
                            <label for="textos3">Descrição Detalhada Terceiro Slide:</label>
                            <textarea type="text" class="form-control" id="textos3" placeholder="Nova Descrição Detalhada" name="textos3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="border border-dark p-3 rounded">
                    <h3><strong>Quarto Slide:</strong></h3>
                    <div class="row mt-3">
                        <div class="col border p-3 rounded">
                            <h2><?php $this->ler(PATH_TXT."home/slides/titulos4.txt"); ?></h2>
                            <p><?php $this->ler(PATH_TXT."home/slides/descricaos4.txt"); ?></p>                            
                            <p><?php $this->ler(PATH_TXT."home/slides/textos4.txt"); ?></p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="titulos4">Título Quarto Slide:</label>
                            <textarea type="text" class="form-control" id="titulos4" placeholder="Novo Título" name="titulos4"></textarea>
                            <label for="descricaos4">Descrição Simplificada Quarto Slide:</label>
                            <textarea type="text" class="form-control" id="descricaos4" placeholder="Nova Descrição Simplificada" name="descricaos4"></textarea>
                            <label for="textos4">Descrição Detalhada Quarto Slide:</label>
                            <textarea type="text" class="form-control" id="textos4" placeholder="Nova Descrição Detalhada" name="textos4"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border border-dark p-5 rounded">
                <h3><strong>Segundo Texto:</strong></h3>
                <div class="row mt-3">
                    <div class="col border p-3 rounded">
                        <h2><?php $this->ler(PATH_TXT."home/titulop2.txt"); ?></h2>
                        <p><?php $this->ler(PATH_TXT."home/textop2.txt"); ?></p>
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
