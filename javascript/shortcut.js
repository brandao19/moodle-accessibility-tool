function gotoConteudo(){
    $("#conteudo_ref").focus();
    return false;
}

function goMenu(){
    $("#menu_ref").focus();
    return false;
}

function goNavBar(){
    $("#navBar_ref").focus();
    return false;
}

function goBar(){

    $("#bar_ref").focus();
    return false;
}

// Fonte
function configTamanhoPadrao() {
    var tamAtual = parseInt($.cookie("tamFonte"));

    if (!isNaN(tamAtual)) {
        $("body").css("font-size", tamAtual);
    } else {
        var temp = $("body").css("font-size").replace("px", "");
        $.cookie("tamFonte", temp);
    }

}

function atualizarFonte(op) {
    var tamAtual = parseInt($.cookie("tamFonte"));

    if (op === "=") {
        tamAtual = $("html").css("font-size");

        $("body").css("font-size", tamAtual);

        $.cookie("tamFonte", tamAtual.replace("px", ""));
    } else {
        inc = ((op === "+" && 1) || (op === "-" && -1) || 0);
        var tamTemp = tamAtual + inc;

        if (tamTemp >= 13 && tamTemp < 24) {
            $("body").css("font-size", tamTemp);

            $.cookie("tamFonte", tamTemp);
        }
    }
}

// Contraste
function configContrastePadrao() {
    if ($.cookie("contraste") && $.cookie("contraste") !== "") {
        $("body").addClass($.cookie("contraste"));
    }
}

function selecionaContraste() {
    var contraste = $.cookie("contraste") || "";

    if (contraste === "") {
        $("body").addClass("contraste");
        $.cookie("contraste", "contraste");
    } else {
        $('body').removeClass("contraste");
        $.cookie("contraste", "");
    }
}

$(document).ready(function () {
    /* acessibilidade */
    configTamanhoPadrao();
    configContrastePadrao();

    $(".no-overflow").click(function(evt) {
      $(this).zoomTo({targetsize:0.99, duration:600});
      evt.stopPropagation();

      $(".no-overflow").css("font-size","30px");
       $(".no-overflow").css("font-weight","bolder");

    });

    /*$(".text").click(function(){
      $(this).zoomTo({targetsize:0.95,duration:600});
      evt.stopPropagation();
      $(".text").css("font-size","20px");

    });
*/
    $ ( "body" ). click ( function ( evt )  {
      $ ( this ). zoomTo ({ targetsize : 1.0 });
      evt . stopPropagation ();
      //$(".no-overflow").removeAttr('style');
      //$(".text").removeAttr('style');
    });

     $(document).bind("keydown", "Alt+Shift+1", selecionaContraste);
     $(document).bind("keydown", "Alt+1", selecionaContraste);

     $(document).bind("keydown", "Alt+Shift+2", gotoConteudo);
     $(document).bind("keydown", "Alt+2", gotoConteudo);

     $(document).bind("keydown","Alt+Shift+3",goMenu);
     $(document).bind("keydown","Alt+3",goMenu);

     $(document).bind("keydown","Alt+Shift+4",goNavBar);
     $(document).bind("keydown","Alt+4",goNavBar);

     $(document).bind("keydown","Alt+Shift+5",goBar);
     $(document).bind("keydown","Alt+5",goBar);

    $("#aumentar_fonte").click(function () {
        atualizarFonte("+");
        return false;
    });

    $("#diminuir_fonte").click(function () {
        atualizarFonte("-");
        return false;
    });

    $("#tamanho_original").click(function () {
        atualizarFonte("=");
        return false;
    });

    $("#contraste").click(function () {
        selecionaContraste();
        return false;
    });
});
