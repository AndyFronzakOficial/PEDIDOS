<?php
session_start();
include('../../BD/conexao.php');

if(empty($_POST['Email']) || empty($_POST['senha'])){
    header('Location: ../../public/index.php');
    exit();
}
$usuario = mysqli_real_escape_string($conexao, $_POST['Email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id, nome, email from usuarios where email = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: ../../src/pages/home/homes/Página-Inicial.php');
    exit();
}else{
    header('Location: ../../public/index.php');
    exit();
}
?>