<?php
    include('protect.php');
    include('config/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Configurações</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" type="text/css" href="css/style-config.css">
    </head>
    <body>
        <div class="container">
            <!-- Menu Fixo Lateral -->
            <?php require "menu-lateral.php"; ?>

            <!-- Configurações -->
            <div class="main">
                <div class="menu-config">
                    <div class="titulo-config">
                        <span>Configurações</span>
                    </div>

                    <div class="area-botao">
                        <hr>
                        
                        <a href="edit-ong.php">
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

                        <hr>
                    </div>
                </div>

                <!-- EXCLUIR PERFIL -->
                <?php require "excluir-ong.php"; ?>

            </div>
        </div>


        <!-- Links JS -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script src="js/menu.js"></script>
        <script src="js/modal.js"></script>

    </body>
</html>
