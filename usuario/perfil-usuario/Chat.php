<?php
    include('../config/config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chat</title>
    <link rel="icon" href="images/logo-azul.png">

    <!-- Links CSS -->
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" type="text/css" href="css/style-chat.css">
</head>

<body>
    <nav>
        <div class="logo">
            <img src="images/logo-azul.png">
        </div>
        <ul>
            <li><a href="index.php"><i class="fi fi-br-home"></i></a></li>
            <li><a href="notificacoes.php"><i class="fi fi-br-bell"></i></a></li>
            <li><a href="Chat.php" id="atual"><i class="fi fi-br-messages"></i></a></li>
            <li><a href="perfil.php"><i class="fi fi-br-circle-user"></i></a></li>
        </ul>
    </nav>
    <div class="container1">
        <div class="main">
            <div class="wrapper">
                <section class="users">
                    <header>
                        <div class="content">
                            <img src="images/foto-ong.png" alt="">
                            <div class="details">
                                <span>Eu</span>
                            </div>
                        </div>
                    </header>
                    <div class="search">
                        <span class="text"></span>
                        <input type="text" placeholder="Pesquisar ou começar uma nova conversa">

                    </div>

                    <!-- CONVERSAS JA SALVAS -->
                    <div class="users-list">



                    </div>
                </section>
            </div>

            <!-- AREA DO CHAT DE CONVERSA -->
            <div class="wrapper-chat">
                <section class="chat-area">
                    <header>
                        <img src="images/foto-ong.png" alt="" class="hide">
                        <div class="details-chat">
                            <span class="hide">Bruna</span>
                            <p class="hide">Online</p>
                        </div>
                    </header>
                    <div class="chat-box">
                        <div class="chat outgoing">
                            <div class="details">
                                <p>Oi cliente!! Vcs ainda tem este pet disponivel?</p>
                            </div>
                        </div>

                        <div class="chat incoming">
                            <img src="images/foto-ong.png" alt="">
                            <div class="details">
                                <p>Oi cliente!! kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
                            </div>
                        </div>

                        <br>

                        <div class="chat outgoing">
                            <div class="details">
                                <p>Oi cliente!! Vcs ainda tem este pet disponivel?</p>
                            </div>
                        </div>

                        <div class="chat incoming">
                            <img src="images/foto-ong.png" alt="">
                            <div class="details">
                                <p>Oi cliente!! kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
                            </div>
                        </div>
                    </div>

                    <div action="#" class="typing-area">
                        <input type="text" id="input-mensagem" placeholder="Digite uma mensagem...">
                        <button id="send" value="enviar" type="button">
                            <i class="fi fi-sr-paper-plane"></i>
                        </button>
                    </div>
                </section>
            </div>

        </div>
    </div>


    <!-- Links JS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="js/script.js"></script>
    <script src="js/graficos.js"></script>
    <script src="js/chat.js"></script>

    <?php
    $id_ong_msg = $_GET['o'];

    if (isset($_GET['o'])) {
        $query = $mysqli->query("SELECT * FROM tbOng where idOng = $id_ong_msg") or die($mysqli->error);
        $dados = mysqli_fetch_assoc($query);

        if (!empty($dados)) {
            ?>
            <script>
                displayMessages('<?php echo $dados['idOng'] ?>', '../<?php echo $dados['fotoOng'] ?>', '<?php echo $dados['nomeOng'] ?>')
            </script>
            <?php
        }
    }
    ?>
</body>

</html>