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

$id = $_GET['id'];
if ($id == null){
    $json = array(
        'st_status' => "ERRO", 
        'st_motivo' => mb_convert_encoding("Gets faltando ou incorretos.", 'HTML-ENTITIES','UTF-8'));
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
    exit;
}


$getUser = mysqli_fetch_array( mysqli_query($connect, "SELECT * FROM `usuarios` WHERE `id` = '".$id."'"));

if ($getUser){
    $json = array(
        'st_status' => "OK", 
        'st_motivo' => mb_convert_encoding("Conseguimos acessar consultar o banco de dados.", 'HTML-ENTITIES','UTF-8'),
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
        'st_motivo' => mb_convert_encoding("Não conseguimos consultar o banco de dados.", 'HTML-ENTITIES','UTF-8'));
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
    exit;
  }

?>