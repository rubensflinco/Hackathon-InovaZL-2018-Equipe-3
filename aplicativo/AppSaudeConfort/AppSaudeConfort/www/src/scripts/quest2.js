function submitForm() {
    var localDor = parseInt($("#localDor:checked").val());
    var intensidadeDor = parseInt($("#intensidadeDor:checked").val());
    var tempoSentindo = parseInt($("#tempoSentindo:checked").val());
    var pancadaCabeca = parseInt($("#pancadaCabeca:checked").val());
    var desmaio = parseInt($("#desmaio:checked").val()); 

    var somaNivel = localDor + intensidadeDor + tempoSentindo + pancadaCabeca + desmaio;

    if (somaNivel >= 43) {
        console.log("Maximo");

    } else
        if (somaNivel >= 19) {
            console.log("Medio");
        } else
            if (somaNivel >= 4) {
                console.log("Minimo");
            } 
        

    console.log(somaNivel);
}
