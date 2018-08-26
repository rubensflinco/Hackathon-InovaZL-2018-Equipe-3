<?php
require('../seguranca/connect.php');

require('../seguranca/token.php');
if ($_GET['token'] !== $tokenAPI){
    echo 'ERRO: Token invalido.';
    return;
    exit;
}

$email = $_GET['email'];
$senha = md5($_GET['senha']);
if (($email == null) || ($senha == null)){
    echo 'ERRO: Gets vazio.';
    return;
    exit;
}

$getUser = mysqli_fetch_array( mysqli_query($connect, "SELECT * FROM `usuarios` WHERE `email` = '".$email."'"));
$mysqlSenha = $getUser['senha'];

if (($getUser['id'] !== null) && ($mysqlSenha == $senha)){
    echo 'OK: Logado.';
    return;
    exit;
  } else {
    echo 'ERRO: Senha ou e-mail errado.';
    return;
    exit;
  }

?>