document.getElementById("conteudo1").className += " acao";

document.addEventListener("scroll", function() {

    var cont2 = document.getElementById("conteudo2");
    var cont3 = document.getElementById("conteudo3");

    var ALTURA = window.innerHeight;
    var LARGURA = window.innerWidth;

    if (scrollY + ALTURA > cont2.offsetTop)
        cont2.className += " acao";
    if (scrollY + ALTURA > cont3.offsetTop)
        cont3.className += " acao";

})