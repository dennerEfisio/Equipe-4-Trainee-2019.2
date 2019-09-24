document.getElementById("conteudo1").className += " acao";

document.addEventListener("scroll", function() {

    var cont2 = document.getElementById("conteudo2");
    var cont3 = document.getElementById("conteudo3");


    var ALTURA = window.innerHeight;
    var LARGURA = window.innerWidth;

    // Tela de smartphone 360px

    if (LARGURA < 450) {
        if (scrollY > ALTURA * 0.8)
            cont2.className += " acao";
        if (scrollY > ALTURA * 1.2)
            cont3.className += " acao";
    }
    // Tela de tablet 720px
    else if (LARGURA < 900) {
        if (scrollY > ALTURA * 0.6)
            cont2.className += " acao";
        if (scrollY > ALTURA)
            cont3.className += " acao";
    }
    // Tela de notebook
    else if (LARGURA < 1050) {
        if (scrollY > ALTURA * 0.8)
            cont2.className += " acao";
        if (scrollY > ALTURA * 1.2)
            cont3.className += " acao";
    }
    // Tela de Computador
    else if (LARGURA > 1050) {
        if (scrollY > ALTURA * 0.8)
            cont2.className += " acao";
        if (scrollY > ALTURA * 1.8)
            cont3.className += " acao";
    }

})