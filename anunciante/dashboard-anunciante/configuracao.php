<?php 
    include('protect.php');
    include('./config/config.php');

    if(isset($_GET[1]))
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Configurações do Anunciante</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="css/modais.css">
        <link rel="stylesheet" href="css/configuracao.css">
    </head>
    <body>
        
        <!-- Menu Fixo Lateral -->
        <?php require "menu-lateral.php"; ?>

        <div class="main">
            <div class="topbar">
                <div class="toggle"></div>  

                <div class="img-logo">
                    <a href="../../index.php"><img src="images/logo-azul.png" alt=""></a>
                </div>
            </div>

            <div class="menu-config">
                <div class="titulo-config">
                    <span>Configurações</span>
                </div>

                <div class="area-botao">
                    <hr>
                    
                    <a href="edit-anunciante.php">
                        <div class="botao">
                            <i class="fi fi-br-arrows-repeat"></i>
                            <p>Alterar Perfil</p>
                        </div>
                    </a>

                    <hr>

                    <div class="botao open-modalExc">
                        <i class="fi fi-br-trash"></i>
                        <p>Excluir Perfil</p>
                    </div>

                    <!-- Excluir Anunciante -->
                    <?php require "excluir-anunciante.php"; ?>
                    <hr>
                </div>
            </div>
        </div>

        <!-- Links JS -->
        <script src="js/script.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
