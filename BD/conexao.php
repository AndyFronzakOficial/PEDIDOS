<?php

$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$dbname = "sistematecnica";



$conexao = new mysqli($servidor, $usuario, $senha, $dbname);

/*$sql = mysqli_query($conexao, "INSERT INTO `usuarios`(`nome`, `email`, `senha`, `funcao`) VALUES ('andy','andy@puchalski.com','1234','vendedor')");*/


/*
if($conexao->connect_errno){
    echo "Erro";
}else{
    echo" conexão efetuado com sucesso";
}
*/


?>


