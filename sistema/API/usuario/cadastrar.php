<?php
require('../seguranca/connect.php');

require('../seguranca/token.php');
if ($_GET['token'] !== $tokenAPI){
    echo 'ERRO: Token invalido.';
    return;
    exit;
}

$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = md5($_GET['senha']);
if (($nome == null) || ($email == null) || ($senha == null)){
    echo 'ERRO: Gets vazio.';
    return;
    exit;
}

$getUser = mysqli_fetch_array( mysqli_query($connect, "SELECT * FROM `usuarios` WHERE `email` = '".$email."'"));

if ($getUser['id'] !== null){
    echo 'ERRO: E-mail já cadastrado.';
    return;
    exit;
}

$addUser = mysqli_query($connect, "INSERT INTO `usuarios`(`nome`, `email`, `senha`) VALUES ('".$nome."','".$email."','".$senha."')");

if ($addUser){
    echo 'OK: Cadastrado no banco.';
    return;
    exit;
  } else {
    echo 'ERRO: Não conseguimos cadastrar no banco.';
    return;
    exit;
  }

?>