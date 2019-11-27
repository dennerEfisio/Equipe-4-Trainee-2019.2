

        <div class="conteudo" id="conteudo1">
            <h1 id="titulo1"><strong>
                <?php 
                    $this->ler(PATH_TXT."home/titulop1.txt","r");
                ?>
            </strong></h1>
            <p id="texto1">
                <?php 
                    $this->ler(PATH_TXT."home/textop1.txt","r");
                ?>
            </p>

        </div>
    </div>
    <div class="produtosHome">
        <div class="carousel slide carousel-fade" id="carouselProdutos" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselProdutos" data-slide-to="0" class="active"></li>
                <li data-target="#carouselProdutos" data-slide-to="1"></li>
                <li data-target="#carouselProdutos" data-slide-to="2"></li>
                <li data-target="#carouselProdutos" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo URL_BASE."assets/img/peca-teatro6.1.jpg" ;?>" class="d-block w-100" atl="" id="slide1">
                    <div class="carousel-caption d-none d-md-block textoCarousel">

                        <h5><strong>
                            <?php 
                                $this->ler(PATH_TXT."home/slides/titulos1.txt","r");
                            ?>
                        </strong></h5>
                        <p><strong>
                            <?php 
                                $this->ler(PATH_TXT."home/slides/descricaos1.txt","r");
                            ?>
                        </strong></p>
                        <p class="descricao" id="descricao1">
                            <?php 
                                $this->ler(PATH_TXT."home/slides/textos1.txt","r");
                            ?>
                        </p>

                        <a class="btn" id="botaoSlide1"> + Detalhes </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo URL_BASE."assets/img/peca-teatro7.1.jpg";?>" class="d-block w-100" atl="" id="slide2">
                    <div class="carousel-caption d-none d-md-block textoCarousel">
                    <h5><strong>
                            <?php 
                                $this->ler(PATH_TXT."home/slides/titulos2.txt","r");
                            ?>
                        </strong></h5>
                        <p><strong>
                            <?php 
                                $this->ler(PATH_TXT."home/slides/descricaos2.txt","r");
                            ?>
                        </strong></p>
                        <p class="descricao" id="descricao2">
                            <?php 
                                $this->ler(PATH_TXT."home/slides/textos2.txt","r");
                            ?>
                        </p>
                        <a class="btn" id="botaoSlide2"> + Detalhes </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo URL_BASE."assets/img/peca-teatro5.1.jpg";?>" class="d-block w-100" atl="" id="slide3">
                    <div class="carousel-caption d-none d-md-block textoCarousel">
                    <h5><strong>
                            <?php 
                                $this->ler(PATH_TXT."home/slides/titulos3.txt","r");
                            ?>
                        </strong></h5>
                        <p><strong>
                            <?php 
                                $this->ler(PATH_TXT."home/slides/descricaos3.txt","r");
                            ?>
                        </strong></p>
                        <p class="descricao" id="descricao3">
                            <?php 
                                $this->ler(PATH_TXT."home/slides/textos3.txt","r");
                            ?>
                        </p>
                        <a class="btn" id="botaoSlide3"> + Detalhes </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo URL_BASE."assets/img/peca-teatro10.1.jpg";?>" class="d-block w-100" atl="" id="slide4">
                    <div class="carousel-caption d-none d-md-block textoCarousel">
                    <h5><strong>
                            <?php 
                                $this->ler(PATH_TXT."home/slides/titulos4.txt","r");
                            ?>
                        </strong></h5>
                        <p><strong>
                            <?php 
                                $this->ler(PATH_TXT."home/slides/descricaos4.txt","r");
                            ?>
                        </strong></p>
                        <p class="descricao" id="descricao4">
                            <?php 
                                $this->ler(PATH_TXT."home/slides/textos4.txt","r");
                            ?>
                        </p>
                        <a class="btn" id="botaoSlide4"> + Detalhes </a>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselProdutos" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselProdutos" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <div class="parallax1" id="parallax2">
        <div class="conteudo" id="conteudo2">
            <h1 id="titulo2"><strong>
                <?php 
                    $this->ler(PATH_TXT."home/titulop2.txt","r");
                ?>
            </strong></h1>
            <p id="texto2">
                <?php 
                    $this->ler(PATH_TXT."home/textop2.txt","r");
                ?>
            </p>
        </div>

    </div>
    <?php if($confirmacao != ""){
        echo "<script>alert('$confirmacao');</script>";
        $confirmacao = "";

    }
     ?>