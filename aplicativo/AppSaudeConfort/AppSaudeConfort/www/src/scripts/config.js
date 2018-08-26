    var url = "https://projeto.planetsweb.com.br/InovaZL/sistema/API/usuario/get.php";
    var valid = getCookie("id");
    
    $.get(url, { token: "123", id: valid}).done(function (data) {
        var dataJSON = JSON.parse(data);

        if (dataJSON.st_status == "OK") {

            $("#nome").val( dataJSON.nome );
            $("#email").val( dataJSON.email );

        } else {
            alert(dataJSON.st_motivo);
        }

        console.log(dataJSON);
    });


function submitForm() {
    var url = "https://projeto.planetsweb.com.br/InovaZL/sistema/API/usuario/editar.php";
    var valid = getCookie("id");
    var valNome = $("#nome").val();
    var valEmail = $("#email").val();
    var valSenha = $("#senha").val();

    $.get(url, { token: "123", id: valid, nome: valNome, email: valEmail, senha: valSenha }).done(function (data) {
        var dataJSON = JSON.parse(data);

        if (dataJSON.st_status == "OK") {
            alert(dataJSON.st_motivo);
            window.location.reload();
        } else {
            alert(dataJSON.st_motivo);
        }

        console.log(dataJSON);
    });
}