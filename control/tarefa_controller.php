<?php
session_start();
ob_start();
include_once('../../BD/conexao.php');

$id = $_GET['id'];

if(empty($id)){
    header("Location: consulta.php?acao=remover&id=1");
}

$query_usuario = "DELETE FROM pedidosbd WHERE id = $id LIMIT 1";
$result_usuario = $conexao->prepare($query_usuario);
$result_usuario->execute();



?>