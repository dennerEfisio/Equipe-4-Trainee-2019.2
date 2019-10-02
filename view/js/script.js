document.getElementById("conteudo1").className += " acao";

document.addEventListener("scroll", function() {
    var cont2 = document.getElementById("conteudo2")
    var ALTURA = window.innerHeight;

    if (scrollY + ALTURA > cont2.offsetTop) {
        cont2.className += " acao";
    }
})


function descricaoSlide() {


    var botaoSlide1 = document.getElementById("botaoSlide1");
    var botaoSlide2 = document.getElementById("botaoSlide2");
    var botaoSlide3 = document.getElementById("botaoSlide3");
    var botaoSlide4 = document.getElementById("botaoSlide4");

    botaoSlide1.addEventListener("mouseenter", function() {

        document.getElementById("descricao1").className += " mostraTexto";
        document.getElementById("slide1").style.filter = "blur(5px)";
        botaoSlide1.innerHTML = " - Detalhes ";

    })
    botaoSlide1.addEventListener("mouseout", function() {

        document.getElementById("descricao1").className = "descricao";
        document.getElementById("slide1").style.filter = "blur(0)";
        botaoSlide1.innerHTML = " + Detalhes ";

    })

    botaoSlide2.addEventListener("mouseenter", function() {

        document.getElementById("descricao2").className += " mostraTexto";
        document.getElementById("slide2").style.filter = "blur(5px)";
        botaoSlide2.innerHTML = " - Detalhes ";

    })

    botaoSlide2.addEventListener("mouseout", function() {

        document.getElementById("descricao2").className = "descricao";
        document.getElementById("slide2").style.filter = "blur(0)";
        botaoSlide2.innerHTML = " + Detalhes ";

    })

    botaoSlide3.addEventListener("mouseenter", function() {

        document.getElementById("descricao3").className += " mostraTexto";
        document.getElementById("slide3").style.filter = "blur(5px)";
        botaoSlide3.innerHTML = " - Detalhes ";

    })

    botaoSlide3.addEventListener("mouseout", function() {

        document.getElementById("descricao3").className = "descricao";
        document.getElementById("slide3").style.filter = "blur(0)";
        botaoSlide3.innerHTML = " + Detalhes ";

    })

    botaoSlide4.addEventListener("mouseenter", function() {

        document.getElementById("descricao4").className += " mostraTexto";
        document.getElementById("slide4").style.filter = "blur(5px)";
        botaoSlide4.innerHTML = " - Detalhes ";

    })

    botaoSlide4.addEventListener("mouseout", function() {

        document.getElementById("descricao4").className = "descricao";
        document.getElementById("slide4").style.filter = "blur(0)";
        botaoSlide4.innerHTML = " + Detalhes ";


    })

}

descricaoSlide();