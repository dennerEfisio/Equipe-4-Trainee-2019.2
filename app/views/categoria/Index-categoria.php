
</div>
    <div class=" container mt-5 mb-5">
        <div class="row">
            <h3> Categorias</h3>
        </div>
        <div class="row">
            <a href="<?php echo URL_BASE."categoria/adicionar";?>" class="btn btn-secondary"> + Adicionar Categoria</a>
        </div>
        <div class="row justify-content-between mt-3">
            <div>
                <a href="<?php echo URL_BASE."categoria"; ?>" class="btn btn-secondary">Ver Todos</a>
            </div>
            <div>
                <form class="form-inline" action="<?php echo URL_BASE."categoria/buscar"; ?>" method="POST">
                    <input class="form-control mr-1" type="text" placeholder="Buscar" id="buscarCategoria" name="buscaCategoria"/>
                    <input class="btn btn-secondary" type="submit" value="Buscar" />
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <table class="tabela">
                <thead>
                    <tr class="linha">
                        <th class="tituloTabela">Nome</th>
                        
                        <th class="tituloTabela">Editar / Excluir</th>


                    </tr>
                </thead>

                <tbody>
                    <?php foreach($categorias as $categoria){ ?>
                            <tr class="linha">
                                <td class="conteudoTabela"><?php echo $categoria->nome ; ?></td>
                                <td class="conteudoTabela botoes">
                                    <a href="<?php echo URL_BASE."categoria/mostrar/".$categoria->id; ?>" class="btn btn-secondary">Ver mais</a>
                                </td>
                            </tr>

                        
                    <?php }?>
                </tbody>
                    

            </table>
            <?php if(count($categorias) == 0 ){  ?>
                <br/>
                <p><strong>Categoria não encontrada!</strong></p>
                <br/>
            <?php } ?>
        </div>
        <div class="row mt-3">
            <a href="<?php echo URL_BASE."administrador" ; ?>" class="btn btn-secondary">Voltar</a>
        </div>
    </div>

    

   