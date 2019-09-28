document.getElementById("tituloProdutosHome").className += " acao";

document.addEventListener("scroll", function() {

    var cont1 = document.getElementById("conteudo1");
    var cont2 = document.getElementById("conteudo2");
    var cont3 = document.getElementById("conteudo3");

    var ALTURA = window.innerHeight;
    var LARGURA = window.innerWidth;


    if (scrollY + ALTURA > cont1.offsetTop)
        cont1.className += " acao";
    if (scrollY + ALTURA > cont2.offsetTop)
        cont2.className += " acao";
    if (scrollY + ALTURA > cont3.offsetTop)
        cont3.className += " acao";

})

var botaoSlide1 = document.getElementById("botaoSlide1");
var botaoSlide2 = document.getElementById("botaoSlide2");
var botaoSlide3 = document.getElementById("botaoSlide3");
var botaoSlide4 = document.getElementById("botaoSlide4");

botaoSlide1.addEventListener("mouseenter", function() {

    document.getElementById("descricao1").className += " mostraTexto";
    botaoSlide1.innerHTML = " - Detalhes ";

})
botaoSlide1.addEventListener("mouseout", function() {

    document.getElementById("descricao1").className = "descricao";
    botaoSlide1.innerHTML = " + Detalhes ";

})

botaoSlide2.addEventListener("mouseenter", function() {

    document.getElementById("descricao2").className += " mostraTexto";
    botaoSlide2.innerHTML = " - Detalhes ";

})

botaoSlide2.addEventListener("mouseout", function() {

    document.getElementById("descricao2").className = "descricao";
    botaoSlide2.innerHTML = " + Detalhes ";

})

botaoSlide3.addEventListener("mouseenter", function() {

    document.getElementById("descricao3").className += " mostraTexto";
    botaoSlide3.innerHTML = " - Detalhes ";

})

botaoSlide3.addEventListener("mouseout", function() {

    document.getElementById("descricao3").className = "descricao";
    botaoSlide3.innerHTML = " + Detalhes ";

})

botaoSlide4.addEventListener("mouseenter", function() {

    document.getElementById("descricao4").className += " mostraTexto";
    botaoSlide4.innerHTML = " - Detalhes ";

})

botaoSlide4.addEventListener("mouseout", function() {

    document.getElementById("descricao4").className = "descricao";
    botaoSlide4.innerHTML = " + Detalhes ";


})