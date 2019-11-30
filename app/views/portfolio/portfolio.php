

<body class="portBody">

<div class="container portCarrossel">
  <div class="row">
   <div class="col-sm-3 portCarrosselLado">
    <div class="portCarrosselTexto">
     <h2>Destaque:</h2>
     <h3>Nome da Peça</h3>
   </div>
   <button type="button" class="btn portCarrosselBotao" data-toggle="modal" data-target="#portModal">Saiba
   Mais</button>
 </div>
 <div id="portCarrossel" class="carousel slide col-sm-9" data-ride="carousel">
  <div class="carousel-inner">
   <div class="carousel-item active ">
    <img class="portCarrosselImg" src="<?php echo URL_BASE."assets/img/imgCar.png";?> " alt="First slide">
  </div>
  <div class="carousel-item">
    <img class="portCarrosselImg" src="<?php echo URL_BASE."assets/img/imgCar2.png";?>" alt="Second slide">
  </div>
  <div class="carousel-item">
    <img class="portCarrosselImg" src="<?php echo URL_BASE."assets/img/imgCar3.png";?>" alt="Third slide">
  </div>
</div>
<a class="carousel-control-prev" href="#portCarrossel" role="button" data-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#portCarrossel" role="button" data-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="sr-only">Next</span>
</a>
</div>
</div>



<!-- -------------------------------------Div Pesquisa--------------------------------------------------------------------- -->
<div class="portPesquisa row">
 <div class="col-sm-4">
  <form class="form-inline my-2 my-lg-0">
   <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar..." name="pesquisa">
   <input class="col-md-3 btn btn-info btn portPesquisaBotao" type="submit" value="Buscar" />
  </form>
</div>
</div>

<!-- ------------------------------------Div Cards---------------------------------------------------------------------------- -->

<div class="portVariosCards row">
  <?php foreach($espetaculos as $espetaculo){ ?>
		<div class="portCard col-sm-4">
      <div class="portSpan">
        <img src="<?php echo $espetaculo->url_imagem?>" alt="Peça de teatro" class="portCardImg">
        <div class="portCardNomePeca"><?php echo $espetaculo->nome?></div>
        <button type="button" class="portCardBotao btn" data-toggle="modal" data-target="#portModal<?php echo $espetaculo->id?>">Saiba Mais</button>
      </div>
    </div>
      <!-- Modal -->
      <div class="modal fade" id="portModal<?php echo $espetaculo->id?>" role="dialog">
          <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header portModalHead">
                      <button type="button" class="close fechar" data-dismiss="modal">&#9747;</button>
                      <div class="modal-title portModalTitulo">Nome da Peça :<?php echo "  ".$espetaculo->nome ; ?></div>
                      <hr>
                    </div>
                    <div class="modal-body portModalBody">
                          <strong>Valor Ingresso:</strong> <?php echo "  ".$espetaculo->ingresso ; ?><br/>
                          <strong>Sinopse:</strong><?php echo "  ".$espetaculo->sinopse; ?><br/>
                          <strong>Local:</strong><?php echo "  ".$espetaculo->local_id ; ?><br/>
                          <strong>Categoria:</strong><?php echo "  ".$espetaculo->categoria_id; ?><br/>
                        <div class="portModalBotao" tabindex="0">
                          <button type="button" class="btn btn-danger botaoCancelar" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
          </div>
      </div>


    <?php } ?>
</div>


</body>

