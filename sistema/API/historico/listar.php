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


$usuario = $_GET['usuario'];
if ($usuario == null){
    $json = array(
        'st_status' => "ERRO", 
        'st_motivo' => mb_convert_encoding("Gets faltando ou incorretos.", 'HTML-ENTITIES','UTF-8'));
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
    exit;
}

$getHistoricoUserS = mysqli_query($connect, "SELECT * FROM `historico` WHERE `usuario` = '".$usuario."'");
$JSONs = array();
while($getHistoricoUser = mysqli_fetch_array( $getHistoricoUserS )){
    $JSON['id'] = mb_convert_encoding($getHistoricoUser['id'], 'HTML-ENTITIES','UTF-8');
    $JSON['usuario'] = mb_convert_encoding($getHistoricoUser['usuario'], 'HTML-ENTITIES','UTF-8');
    $JSON['sintoma'] = mb_convert_encoding($getHistoricoUser['sintoma'], 'HTML-ENTITIES','UTF-8');
    $JSON['JSON_perguntas'] = mb_convert_encoding($getHistoricoUser['JSON_perguntas'], 'HTML-ENTITIES','UTF-8');
    $JSON['nivel'] = mb_convert_encoding($getHistoricoUser['nivel'], 'HTML-ENTITIES','UTF-8');
    $JSON['P_nivel'] = mb_convert_encoding($getHistoricoUser['P_nivel'], 'HTML-ENTITIES','UTF-8'); 
    $JSON['C_nivel'] = mb_convert_encoding($getHistoricoUser['C_nivel'], 'HTML-ENTITIES','UTF-8'); 
    $JSON['data'] = mb_convert_encoding($getHistoricoUser['data'], 'HTML-ENTITIES','UTF-8'); 
    $JSON['posicao'] = mb_convert_encoding($getHistoricoUser['posicao'], 'HTML-ENTITIES','UTF-8'); 
    array_push($JSONs, $JSON);
}

echo json_encode($JSONs, JSON_UNESCAPED_UNICODE);
    return;
    exit;

?>