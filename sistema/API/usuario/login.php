<?php
require('../seguranca/connect.php');

require('../seguranca/token.php');
if ($_GET['token'] !== $tokenAPI){
    $json = array(
        'st_status' => "ERRO", 
        'st_motivo' => mb_convert_encoding("Token de acesso incorreto.", 'HTML-ENTITIES','UTF-8'));
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
    exit;
}

$email = $_GET['email'];
$senha = md5($_GET['senha']);
if (($email == null) || ($senha == null)){
    $json = array(
        'st_status' => "ERRO", 
        'st_motivo' => mb_convert_encoding("Gets faltando ou incorretos.", 'HTML-ENTITIES','UTF-8'));
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
    exit;
}

$getUser = mysqli_fetch_array( mysqli_query($connect, "SELECT * FROM `usuarios` WHERE `email` = '".$email."'"));
$mysqlSenha = $getUser['senha'];

if (($getUser['id'] !== null) && ($mysqlSenha == $senha)){
    $json = array(
        'st_status' => "OK", 
        'st_motivo' => mb_convert_encoding("Usuario valido, podemos logar ele no sistema.", 'HTML-ENTITIES','UTF-8'),
        'id' => mb_convert_encoding($getUser['id'], 'HTML-ENTITIES','UTF-8'), 
        'nome' => mb_convert_encoding($getUser['nome'], 'HTML-ENTITIES','UTF-8'), 
        'email' => mb_convert_encoding($getUser['email'], 'HTML-ENTITIES','UTF-8'), 
        'senha' => mb_convert_encoding($getUser['senha'], 'HTML-ENTITIES','UTF-8'));
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
    exit;
  } else {
    $json = array(
        'st_status' => "ERRO", 
        'st_motivo' => mb_convert_encoding("Senha ou e-mail incorreto.", 'HTML-ENTITIES','UTF-8'));
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
    exit;
  }

?>