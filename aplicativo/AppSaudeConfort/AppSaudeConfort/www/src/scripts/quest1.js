function submitForm() {
    var temperatura = parseInt($("#temperatura:checked").val());
    var graus = parseInt($("#graus:checked").val());
    var antibiotico = parseInt($("#antibiotico:checked").val()); 

    var somaNivel = temperatura + graus + antibiotico;
    var nivel;

    if (somaNivel >= 30) {
        nivel = "Laranja";
        console.log(nivel);
    } else
        if (somaNivel >= 20) {
            nivel = "Amarelo";
            console.log(nivel);
        } else
            if (somaNivel >= 13) {
                nivel = "Verde";
                console.log(nivel);
            } else
                if (somaNivel >= 4) {
                    nivel = "Azul";
                    console.log(nivel);
                } 

    var url = "https://projeto.planetsweb.com.br/InovaZL/sistema/API/historico/cadastrar.php";
    var valUsuario = getCookie("id");
    var valSintoma = "Febre";
    var valJSON_perguntas = "{VAZIO}";
    var valNivel = nivel;
    var valP_nivel = somaNivel;
    var valC_nivel = nivel;

    $.get(url, { token: "123", usuario: valUsuario, sintoma: valSintoma, JSON_perguntas: valJSON_perguntas, nivel: valNivel, P_nivel: valP_nivel, C_nivel: valC_nivel }).done(function (data) {
        var dataJSON = JSON.parse(data);

        if (dataJSON.st_status == "OK") {
            $("#removePosicao").html('<div w3-include-html="fila.html"></div>');
            includeHTML();
            setTimeout(function (){
                $("#posicaoFila").html(dataJSON.posicao);
            }, 500);
            
        } else {
            alert(dataJSON.st_motivo);
        }

        console.log(dataJSON);
    });

    console.log(somaNivel);
}
