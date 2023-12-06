<?php
    include('../config/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Notificações</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" href="css/notificacoes.css">
        <link rel="stylesheet" href="css/modais.css">
        <link rel="stylesheet" href="css/perfil.css">
        <link rel="stylesheet" href="css/cards.css">
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src="images/logo-azul.png">
            </div>
            <ul>
                <li><a href="index.php"><i class="fi fi-br-home"></i></a></li>
                <li><a href="notificacoes.php" id="atual"><i class="fi fi-br-bell"></i></a></li>
                <li><a href="Chat.php"><i class="fi fi-br-messages"></i></a></li>
                <li><a href="perfil.php"><i class="fi fi-br-circle-user"></i></a></li>
            </ul>
        </nav>

        <div class="container1">
            <div class="titulo-not">
                <h2>Notificações</h2>
            </div>

            <div class="area-not">
                <h3>Hoje</h3>

                <div class="area-item">
                    <div class="bolinha-not">
                        <span></span>
                    </div>
                    <div class="item-not">
                        <div class="area-foto">
                            <img src="images/foto-user.png">
                            <h4>Claudia Alves</h4>
                        </div>
                        <p>Enviou 2 mensagens</p>
                        <span>Há 2 horas</span>
                    </div>
                </div>

                <div class="area-item">
                    <div class="bolinha-not">
                        <span></span>
                    </div>
                    <div class="item-not">
                        <div class="area-foto">
                            <img src="images/foto-user.png">
                            <h4>Claudia Alves</h4>
                        </div>
                        <p>Enviou 2 mensagens</p>
                        <span>Há 2 horas</span>
                    </div>
                </div>

                <div class="area-item lida">
                    <div class="bolinha-not">
                        <span></span>
                    </div>
                    <div class="item-not">
                        <div class="area-foto">
                            <img src="images/foto-user.png">
                            <h4>Claudia Alves</h4>
                        </div>
                        <p>Enviou 2 mensagens</p>
                        <span>Há 2 horas</span>
                    </div>
                </div>

                <br>

                <h3>Nessa Semana</h3>

                <div class="area-item lida">
                    <div class="bolinha-not">
                        <span></span>
                    </div>
                    <div class="item-not">
                        <div class="area-foto">
                            <img src="images/foto-user.png">
                            <h4>Claudia Alves</h4>
                        </div>
                        <p>Enviou 2 mensagens</p>
                        <span>Há 2 horas</span>
                    </div>
                </div>

                <div class="area-item lida">
                    <div class="bolinha-not">
                        <span></span>
                    </div>
                    <div class="item-not">
                        <div class="area-foto">
                            <img src="images/foto-user.png">
                            <h4>Claudia Alves</h4>
                        </div>
                        <p>Enviou 2 mensagens</p>
                        <span>Há 2 horas</span>
                    </div>
                </div>
                
                <div class="area-item lida">
                    <div class="bolinha-not">
                        <span></span>
                    </div>
                    <div class="item-not">
                        <div class="area-foto">
                            <img src="images/foto-user.png">
                            <h4>Claudia Alves</h4>
                        </div>
                        <p>Enviou 2 mensagens</p>
                        <span>Há 2 horas</span>
                    </div>
                </div>

                <br>
            </div>
        </div>


        <!-- Sugestões e Categorias -->
        <?php require "menu-right.php"; ?>


        <!-- Links JS -->
        <script src="js/script.js"></script>
        <script src="js/modais.js"></script>

    </body>
</html>
