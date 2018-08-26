function submitForm() {
    var url = "https://projeto.planetsweb.com.br/InovaZL/sistema/API/usuario/login.php";
    var valEmail = $("#email").val();
    var valSenha = $("#senha").val();
    
    $.get(url, { token: "123", email: valEmail, senha: valSenha }).done(function (data) {
        var dataJSON = JSON.parse(data);

        if (dataJSON.st_status == "OK") {
            document.cookie = "id=" + dataJSON.id +"; path=/";
            window.location.href = "principal.html";
        } else {
            alert(dataJSON.st_motivo);
        }

        console.log(dataJSON);
    });
}