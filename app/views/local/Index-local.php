</div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <h3>Locais</h3>
        </div>
        <div class="row">
            <a href="<?php echo URL_BASE."local/adicionar";?>" class="btn btn-secondary"> + Adicionar Local</a>
        </div>
        <div class="row justify-content-between mt-3">
            <div>
            <a href="<?php echo URL_BASE."local"; ?>" class="btn btn-secondary">Ver Todos</a>
            </div>
            <div>
                <form class="form-inline" action="<?php echo URL_BASE."local/buscar"; ?>" method="POST">
                    <input class="form-control mr-1" type="text" placeholder="Buscar" id="buscarLocal" name="buscaLocal"/>
                    <input class="btn btn-secondary" type="submit" value="Buscar" />
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <table class="tabela">
                <thead>
                    <tr class="linha">
                        <th class="tituloTabela">Nome</th>
                        <th class="tituloTabela">Sobrenome</th>
                        <th class="tituloTabela">CPF</th>
                        
                        <th class="tituloTabela">Editar / Excluir</th>


                    </tr>
                </thead>

                <tbody>
                    <?php foreach($locais as $local){ ?>
                    <tr class="linha">
                        <td class="conteudoTabela"><?php echo $local->nomeResponsavel ?></td>
                        <td class="conteudoTabela"><?php echo $local->sobrenomeResponsavel ?></td>
                        <td class="conteudoTabela"><?php echo $local->cpf ?></td>
                        


                        <td class="conteudoTabela botoes">
                            <a href="<?php echo URL_BASE."local/mostrar/".$local->id; ?>" class="btn btn-secondary">Ver mais</a>
                        </td>
                    </tr>
                    <?php  } ?>
                </tbody>

            </table>
            <?php if(count($locais) == 0 ){  ?>
                
                <p><strong>Local não encontrado!</strong></p>
                <br/>
            <?php } ?>
        </div>
        <div class="row mt-3">
            <a href="<?php echo URL_BASE."administrador" ; ?>" class="btn btn-secondary">Voltar</a>
        </div>
    </div>

   