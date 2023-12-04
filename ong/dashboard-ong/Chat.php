<?php 
    include('protect.php');
    include('config/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard da ONG</title>
    <link rel="icon" href="images/logo-azul.png">

    <!-- Links CSS -->
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" type="text/css" href="css/style-chat.css">
</head>
<body>
    <div class="container">
        <!-- Menu Fixo Lateral -->
        <?php require "menu-lateral.php"; ?>

        <div class="main">
            <div class="wrapper">
                <section class="users">
                    <header>
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                                <span>Eu</span>
                            </div>
                        </div>
                    </header>
                    <div class="search">
                        <span class="text"></span>
                        <input type="text" placeholder="Pesquisar uma conversa">
                    </div>

                    <!-- CONVERSAS JA SALVAS -->
                    <div class="users-list">
                        <a href="#">
                            <div class="content">
                                <img src="images/img-chat/chat-perfil2.png" alt="">
                                <div class="details">
                                    <span>Bruna</span>
                                    <p>Vcs ainda tem esse gato disponível?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
            </div>

            <!-- AREA DO CHAT DE CONVERSA -->
            <div class="wrapper-chat">
                <section class="chat-area">
                    <header>
                        <img src="images/img-chat/chat-perfil2.png" alt="" class="hide">
                        <div class="details-chat">
                            <span class="hide">Bruna</span>
                            <p class="hide">Online</p>
                        </div>
                    </header>

                    <div class="chat-box">
                        
                    </div>

                    <div action="#" class="typing-area">
                        <input type="text" id="input-mensagem" placeholder="Digite uma mensagem...">
                        <button id="send" type="button">
                            <i class="fi fi-sr-paper-plane-top"></i>
                        </button>
                    </div>
                </section>
            </div>

        </div>
    </div>

    <!-- Links JS -->
    <script src="js/script.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/chat.js"></script>
</body>

</html>
