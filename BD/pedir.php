<?php
include_once('./conexao.php');

$NOME = $_POST['NOME'];
$PECA  = $_POST['PECA'];
$COR  = $_POST['COR'];
$MARCA  = $_POST['MARCA'];
$MODELO  = $_POST['MODELO'];
$NUMERACAO  = $_POST['NUMERACAO'];
$PRECO  = $_POST['PRECO'];
$CONSTSISTEM  = $_POST['CONSTSISTEM'];
$DATA  = $_POST['DATA'];
$HORA  = $_POST['HORA'];
$LOJA  = $_POST['LOJA'];

$sql = mysqli_query($conexao, "INSERT INTO `pedidosbd`( `NOME`, `PECA`, `COR`, `MARCA`, `MODELO`, `NUMERACAO`, `PRECO`, `CONSTSISTEM`, `DATA`, `HORA`, `LOJA`) VALUES ('$NOME','$PECA','$COR','$MARCA','$MODELO','$NUMERACAO','$PRECO','$CONSTSISTEM','$DATA','$HORA','$LOJA')");

header('Location: https://api.whatsapp.com/send?phone=5551984743961&text=O tecnico '.$NOME.' da loja '.$LOJA.', Pediu a peça '.$PECA.', da cor '.$cor.', de um '.$MARCA.' '.$MODELO.', na numeração '.$NUMERACAO.', cobrou do cliente '.$PRECO.', ele esta fazendo o pedido no dia '.$DATA.' as '.$HORA.'.');
?>