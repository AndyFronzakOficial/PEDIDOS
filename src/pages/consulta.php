<?php
include_once('../../BD/conexao.php');
?>
<?php
session_start();
include('../../../../control/login/verification.php');

?>
<?php
$sql = "SELECT `id`, `NOME`, `PECA`, `COR`, `MARCA`, `MODELO`, `NUMERACAO`, `PRECO`, `CONSTSISTEM`, `DATA`, `HORA`, `LOJA` FROM `pedidosbd`  ORDER BY `id` DESC";
$result = $conexao->query($sql);


?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="CONSULTA DE PEDIDO">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>consulta</title>
    <link rel="stylesheet" href="../../nicepage.css" media="screen">
    <link rel="stylesheet" href="consulta.css" media="screen">
    <script class="u-script" type="text/javascript" src="../../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "../../images/CORELLOGOpSK-Cpia2.png"
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="consulta">
    <meta property="og:type" content="website">
</head>

<body class="u-body">
    <header class="u-clearfix u-header u-header" id="sec-9c11">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="6225" data-image-height="6024">
                <img src="../../images/CORELLOGOpSK-Cpia2.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="consulta.php" style="padding: 10px 20px;">consulta</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="pedir.php" style="padding: 10px 20px;">pedir</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="../../control/login/logout.php" style="padding: 10px 20px;">sair</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="consulta.php" style="padding: 10px 20px;">consulta</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="pedir.php" style="padding: 10px 20px;">pedir</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../../control/login/logout.php" style="padding: 10px 20px;">sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-53f1">
        <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
            <h2 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xs u-text-1">CONSULTA DE PEDIDO</h2>
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
                <table class="u-table-entity u-table-entity-1">
                    <colgroup>
                        <col width="4.9%">
                        <col width="12.7%">
                        <col width="6.7%">
                        <col width="7%">
                        <col width="14.4%">
                        <col width="13.6%">
                        <col width="9.5%">
                        <col width="6.9%">
                        <col width="8.1%">
                        <col width="7.7%">
                        <col width="8.5%">
                    </colgroup>
                    <thead class="u-black u-table-header u-table-header-1">
                        <tr style="height: 77px;">
                        <th class="u-border-1 u-border-black u-table-cell">ID</th>
                            <th class="u-border-1 u-border-black u-table-cell">LOJA</th>
                            <th class="u-border-1 u-border-black u-table-cell">PEÇA</th>
                            <th class="u-border-1 u-border-black u-table-cell">COR</th>
                            <th class="u-border-1 u-border-black u-table-cell">MARCA</th>
                            <th class="u-border-1 u-border-black u-table-cell">MODELO</th>
                            <th class="u-border-1 u-border-black u-table-cell">NUMERAÇÃO</th>
                            <th class="u-border-1 u-border-black u-table-cell">PREÇO</th>
                            <th class="u-border-1 u-border-black u-table-cell">CONSTA SISTEMA</th>
                            <th class="u-border-1 u-border-black u-table-cell">DATA</th>
                            <th class="u-border-1 u-border-black u-table-cell">HORA</th>
                            <th class="u-border-1 u-border-black u-table-cell">TECNICO</th>
                            <th class="u-border-1 u-border-black u-table-cell">Excluir</th>
                        </tr>
                    </thead>
                    <tbody class="u-table-body  ">
                    <?php while ($user_data = mysqli_fetch_assoc($result)) { ?>
                       <form action="../../BD/exluir.php" method="GET">
                        <tr style="height: 57px;">
                
                        <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell "> <?= $user_data['id']?></td>

                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell"> <?= $user_data['LOJA']?></td>
                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell"> <?= $user_data['PECA']?></td>
                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell"><?= $user_data['COR']?></td>
                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell"><?= $user_data['MARCA']?></td>
                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell"><?= $user_data['MODELO']?></td>
                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell"><?= $user_data['NUMERACAO']?></td>
                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell"><?= $user_data['PRECO']?></td>
                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell u-table-cell-19"><?= $user_data['CONSTSISTEM']?><br>
                            </td>
                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell"><?= $user_data['DATA']?></td>
                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell"><?= $user_data['HORA']?></td>
                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell"><?= $user_data['NOME']?></td>
                            <td class="u-border-2 u-border-black u-border-no-left u-border-no-right u-table-cell"> <?php   echo "<span><a href='consulta.php?id=".$user_data['id']."'>Delete</a></span>"  ?></td>
                        </tr>
                   
                        <?php }?>
                    </form>
                    </tbody>
                        
                </table>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-e89e">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">DESENVOLVIDO POR ANDERSON NUNES&nbsp;</p>
        </div>
    </footer>

</body>

</html>