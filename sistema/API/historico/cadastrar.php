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
$sintoma = $_GET['sintoma'];
$JSON_perguntas = $_GET['JSON_perguntas'];
$nivel = $_GET['nivel'];
$P_nivel = $_GET['P_nivel'];
$C_nivel = $_GET['C_nivel'];   
$data = date("Y-m-d");   
if (($usuario == null) || ($sintoma == null) || ($JSON_perguntas == null) || ($nivel == null) || ($P_nivel == null) || ($C_nivel == null)){
    $json = array(
        'st_status' => "ERRO", 
        'st_motivo' => mb_convert_encoding("Gets faltando ou incorretos.", 'HTML-ENTITIES','UTF-8'));
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
    exit;
}

$getHistorico = mysqli_fetch_array( mysqli_query($connect, "SELECT * FROM `historico` WHERE `usuario` = '".$usuario."' AND `data` = '".$data."' ORDER BY id DESC LIMIT 1"));
$posicao = $getHistorico['posicao']+1;

$addHistorico = mysqli_query($connect, "INSERT INTO `historico`(`usuario`, `sintoma`, `JSON_perguntas`, `nivel`, `P_nivel`, `C_nivel`, `data`, `posicao`) VALUES ('".$usuario."','".$sintoma."','".$JSON_perguntas."','".$nivel."','".$P_nivel."','".$C_nivel."','".$data."','".$posicao."')");

if ($addHistorico){

    $json = array(
        'st_status' => "OK", 
        'st_motivo' => mb_convert_encoding("Historico cadastrado com sucesso.", 'HTML-ENTITIES','UTF-8'),
        'usuario' => mb_convert_encoding($usuario, 'HTML-ENTITIES','UTF-8'), 
        'sintoma' => mb_convert_encoding($sintoma, 'HTML-ENTITIES','UTF-8'), 
        'JSON_perguntas' => mb_convert_encoding(base64_encode($JSON_perguntas), 'HTML-ENTITIES','UTF-8'), 
        'nivel' => mb_convert_encoding($nivel, 'HTML-ENTITIES','UTF-8'), 
        'P_nivel' => mb_convert_encoding($P_nivel, 'HTML-ENTITIES','UTF-8'), 
        'C_nivel' => mb_convert_encoding($C_nivel, 'HTML-ENTITIES','UTF-8'),
        'data' => mb_convert_encoding($data, 'HTML-ENTITIES','UTF-8'),
        'posicao' => mb_convert_encoding($posicao, 'HTML-ENTITIES','UTF-8')
    );
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
    exit;
  } else {
    $json = array(
        'st_status' => "ERRO", 
        'st_motivo' => mb_convert_encoding("Não conseguimos historico o usuario no banco de dados.", 'HTML-ENTITIES','UTF-8'));
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    return;
    exit;
  }

?>