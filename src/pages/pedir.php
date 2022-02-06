<?php
session_start();
include('../../../../control/login/verification.php');
include_once('../../BD/conexao.php');


?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="FAZER PEDIDO">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>pedir</title>
    <link rel="stylesheet" href="../../nicepage.css" media="screen">
    <link rel="stylesheet" href="pedir.css" media="screen">
    <script class="u-script" type="text/javascript" src="../../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "../../images/CORELLOGOpSK-Cpia2.png"
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="pedir">
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
    <section class="u-clearfix u-section-1 " id="sec-a516">
        <div class="u-clearfix u-sheet  u-sheet-1">
            <h2 class="u-text u-text-default u-text-1">FAZER PEDIDO</h2>
            <div class="u-expanded-width-xs  u-form u-form-1">
                <form action="../../BD/pedir.php" method="POST" >
                    <div class="u-form-group u-form-name u-form-group-1">
                        <label for="name-2cac" class="u-label">NOME DO TÉCNICO</label>
                        <input type="text" placeholder="NOME" id="name-2cac" name="NOME" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-select u-form-group-2">
                        <label for="select-ffdd" class="u-label">PEÇA</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-ffdd" name="PECA" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                <option value="COMBO">COMBO</option>
                                <option value="CONECTOR DE CARGA">CONECTOR DE CARGA</option>
                                <option value="VIDRO FRONTAL">VIDRO FRONTAL</option>
                                <option value="VIDRO TRASEIRO">VIDRO TRASEIRO</option>
                                <option value="MICROFONE">MICROFONE</option>
                                <option value="ALTOFALANTE">ALTOFALANTE</option>
                                <option value="LENTE CAMERA">LENTE CAMERA</option>
                                <option value="CAMERA">CAMERA</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-form-group u-form-select u-form-group-3">
                        <label for="select-c847" class="u-label">COR</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-c847" name="COR" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                <option value="BRANCO">BRANCO</option>
                                <option value="PRETO">PRETO</option>
                                <option value="DOURADO">DOURADO</option>
                                <option value="AZUL">AZUL</option>
                                <option value="VERMELHO">VERMELHO</option>
                                <option value="ROXO">ROXO</option>
                                <option value="ROSA">ROSA</option>
                                <option value="MARROM">MARROM</option>
                                <option value="AMARELO">AMARELO</option>
                                <option value="LARANJA">LARANJA</option>
                                <option value="SEM COR">SEM COR</option>
                                <option value="OUTRA COR">OUTRA COR</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-form-group u-form-select u-form-group-4">
                        <label for="select-f4f5" class="u-label">MARCA</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-f4f5" name="MARCA" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                <option value="SAMSUNG">SAMSUNG</option>
                                <option value="MOTOROLA">MOTOROLA</option>
                                <option value="XIAOMI">XIAOMI</option>
                                <option value="IPHONE">IPHONE</option>
                                <option value="LG">LG</option>
                                <option value="ZENFONE">ZENFONE</option>
                                <option value="NOKIA">NOKIA</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-form-group u-form-group-5">
                        <label for="text-61be" class="u-label">MODELO</label>
                        <input type="text" id="text-61be" name="MODELO" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" placeholder="PODE ENCONTRAR EM CONFIGURAÇÕES OU ATRÁS DO APARELHO" required="required">
                    </div>
                    <div class="u-form-group u-form-group-6">
                        <label for="text-38ce" class="u-label">NUMERAÇÃO</label>
                        <input type="text" placeholder="ESTA ATRÁS DO APARELHO, OU TIRE A CAPA TRASEIRA." id="text-38ce" name="NUMERACAO" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                    </div>
                    <div class="u-form-group u-form-group-7">
                        <label for="text-2b69" class="u-label">PREÇO</label>
                        <input type="text" placeholder="VALOR COBRADO PARA O CLIENTE" id="text-2b69" name="PRECO" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                    </div>
                    <div class="u-form-group u-form-select u-form-group-8">
                        <label for="select-02a4" class="u-label">CONSTA SISTEMA</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-02a4" name="CONSTSISTEM" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-form-date u-form-group u-form-group-9">
                        <label for="date-14ee" class="u-label">DATA</label>
                        <input type="date" placeholder="MM/DD/YYYY" id="date-14ee" name="DATA" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-group-10">
                        <label for="text-c3b9" class="u-label">HORA</label>
                        <input type="text" placeholder="DIGITE A HORA DE AGORA" id="text-c3b9" name="HORA" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                    </div>
                    <div class="u-form-group u-form-select u-form-group-11">
                        <label for="select-0a0f" class="u-label">NUMERO DA LOJA</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-0a0f" name="LOJA" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-btn u-btn-submit u-button-style">Enviar</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Obrigado! A sua mensagem foi enviada. </div>
                    <div class="u-form-send-error u-form-send-message"> Não foi possível enviar a sua mensagem. Por favor, corrija os erros e tente novamente. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                </form>
            </div>
        </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-e89e">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">DESENVOLVIDO POR ANDERSON NUNES&nbsp;</p>
        </div>
    </footer>

</body>

</html>