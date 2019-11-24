
<div class="container pb-2 portCarrossel">
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
    <img class="portCarrosselImg" src="<?php echo URL_BASE."assets/"; ?>img/imgCar.png" alt="First slide">
  </div>
  <div class="carousel-item">
    <img class="portCarrosselImg" src="<?php echo URL_BASE."assets/"; ?>img/imgCar2.png" alt="Second slide">
  </div>
  <div class="carousel-item">
    <img class="portCarrosselImg" src="<?php echo URL_BASE."assets/"; ?>img/imgCar3.png" alt="Third slide">
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
   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
   <button class="btn portPesquisaBotao" type="button">Pesquisa</button>
 </form>
</div>
</div>
</div>
</div>
<!-- ------------------------------------Div Cards---------------------------------------------------------------------------- -->
<div class="container">
<div class="portVariosCards row">
 <div class="portCard col-sm-4">
  <div class="portSpan">
    <img src="<?php echo URL_BASE."assets/"; ?>img/img1.jpg" alt="Peça de teatro" class="portCardImg">
    <div class="portCardNomePeca">Nome da Peça</div>
    <button type="button" class="portCardBotao btn" data-toggle="modal" data-target="#portModal">Saiba
    Mais</button>
  </div>
</div>
<div class="portCard col-sm-4">
  <div class="portSpan">
    <img src="<?php echo URL_BASE."assets/"; ?>img/img2.jpg" alt="Peça de teatro" class="portCardImg">
    <div class="portCardNomePeca">Nome da Peça</div>
    <button type="button" class="portCardBotao btn" data-toggle="modal" data-target="#portModal">Saiba
    Mais</button>
  </div>
</div>
<div class="portCard col-sm-4">
  <div class="portSpan">
    <img src="<?php echo URL_BASE."assets/"; ?>img/img3.jpg" alt="Peça de teatro" class="portCardImg">
    <div class="portCardNomePeca">Nome da Peça</div>
    <button type="button" class="portCardBotao btn" data-toggle="modal" data-target="#portModal">Saiba
    Mais</button>
  </div>
</div>
<div class="portCard col-sm-4">
  <div class="portSpan">
    <img src="<?php echo URL_BASE."assets/"; ?>img/img4.jpg" alt="Peça de teatro" class="portCardImg">
    <div class="portCardNomePeca">Nome da Peça</div>
    <button type="button" class="portCardBotao btn" data-toggle="modal" data-target="#portModal">Saiba
    Mais</button>
  </div>
</div>
<div class=" portCard col-sm-4">
  <div class="portSpan">
    <img src="<?php echo URL_BASE."assets/"; ?>img/img5.jpg" alt="Peça de teatro" class="portCardImg">
    <div class="portCardNomePeca">Nome da Peça</div>
    <button type="button" class="portCardBotao btn" data-toggle="modal" data-target="#portModal">Saiba
    Mais</button>
  </div>
</div>
<div class=" portCard col-sm-4">
  <div class="portSpan">
    <img src="<?php echo URL_BASE."assets/"; ?>img/img6.jpg" alt="Peça de teatro" class="portCardImg">
    <div class="portCardNomePeca">Nome da Peça</div>
    <button type="button" class="portCardBotao btn" data-toggle="modal" data-target="#portModal">Saiba
    Mais</button>
  </div>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="portModal" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header portModalHead">
        <button type="button" class="close fechar" data-dismiss="modal">&#9747;</button>
        <div class="modal-title portModalTitulo">Nome da Peça :</div>
        <hr>
      </div>
      <div class="modal-body portModalBody">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id tristique urna. Donec gravida tincidunt sapien sit amet vehicula. Nam lobortis lacus in pretium feugiat. Nam et fringilla orci. Aenean gravida, lorem sit amet ornare lacinia, lacus sapien vulputate massa, non ultrices nunc erat eget odio. Fusce ac augue eu neque rhoncus cursus sed a est. Nunc eu ipsum tortor. Etiam quis eros hendrerit purus congue volutpat. Duis lobortis, velit et luctus porttitor, arcu ligula tincidunt mauris, commodo tincidunt dui tortor ac tellus. Curabitur quis turpis egestas, lobortis risus non, cursus massa. Sed a porta dui.</p>
          <div class="portModalBotao" tabindex="0">
            <button type="button" class="btn btn-danger botaoCancelar" data-dismiss="modal">Fechar</button>
          </div>
      </div>
    </div>
  </div>
</div>

