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


?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Faltou peça?, consultar pedidos">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="../nicepage.css" media="screen">
    <link rel="stylesheet" href="Página-Inicial.css" media="screen">
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black:400">


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": ""
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
</head>

<body class="u-body">
    <section class="u-clearfix u-section-1" id="carousel_0a5d">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-align-center u-container-style u-layout-cell u-palette-1-base u-size-30 u-layout-cell-1">
                        <div class="u-container-layout u-valign-top u-container-layout-1">
                            <h2 class="u-custom-font u-text u-text-1">ENVIADO COM SUCESSO!</h2>
                            <p class="u-text u-text-2">Enviar para Whatsapp da central de compras?</p>
                            <a href="https://api.whatsapp.com/send?phone=5551984743961&text=O tecnico <?php echo $NOME; ?> da loja '<?php echo $LOJA; ?>', Pediu a peça '<?php echo $PECA; ?>', da cor '<?php echo $COR; ?>', de um '.<?php echo $MARCA; ?>.' '.<?php echo $MODELO; ?>.', na numeração '.<?php echo $NUMERACAO; ?>.', cobrou do cliente '.<?php echo $PRECO; ?>.', ele esta fazendo o pedido no dia '.<?php echo $DATA; ?>.' as '.<?php echo $HORA; ?>.'.'" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-3 u-palette-3-base u-radius-50 u-text-palette-1-base u-btn-1">pedir</a>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-layout-cell u-palette-3-base u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-top u-container-layout-2">
                            <h2 class="u-custom-font u-text u-text-3">consultar pedidos</h2>
                            <p class="u-text u-text-4">consulte pedidos</p>
                            <a href="../src/pages/consulta.php" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-3 u-palette-1-base u-radius-50 u-text-palette-3-base u-btn-2">consultar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>