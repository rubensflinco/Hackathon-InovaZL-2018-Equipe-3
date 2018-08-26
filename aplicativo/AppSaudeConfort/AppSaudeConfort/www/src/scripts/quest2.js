function submitForm() {
    var localDor = parseInt($("#localDor:checked").val());
    var intensidadeDor = parseInt($("#intensidadeDor:checked").val());
    var tempoSentindo = parseInt($("#tempoSentindo:checked").val());
    var pancadaCabeca = parseInt($("#pancadaCabeca:checked").val());
    var desmaio = parseInt($("#desmaio:checked").val()); 

    var somaNivel = localDor + intensidadeDor + tempoSentindo + pancadaCabeca + desmaio;
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
    var valSintoma = "Dor de cabeça";
    var valJSON_perguntas = $("#senha").val();
    var valNivel = nivel;
    var valP_nivel = somaNivel;
    var valC_nivel = nivel;

    $.get(url, { token: "123", usuario: valUsuario, sintoma: valSintoma, JSON_perguntas: valJSON_perguntas, nivel: valNivel, P_nivel: valP_nivel, C_nivel: valC_nivel }).done(function (data) {
        var dataJSON = JSON.parse(data);

        if (dataJSON.st_status == "OK") {
            alert(dataJSON.);
        } else {
            alert(dataJSON.st_motivo);
        }

        console.log(dataJSON);
    });

    console.log(somaNivel);
}
