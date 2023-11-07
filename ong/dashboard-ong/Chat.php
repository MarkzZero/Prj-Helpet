<?php 
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Dashboard da ONG</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link rel="stylesheet" type="text/css" href="css/style-chat.css">
    </head>
    <body>
        <div class="container">

            <!-- Menu Fixo Lateral -->
            <div class="navegation">
                <div class="toggle">
                    <i class="fi fi-br-menu-burger"></i>
                </div>
                
                <div class="logo">
                    <!-- Puxar do banco a imagem da ong aqui -->
                    <img style="border-radius: 100%;" src="<?php echo "../Cadastro/" . $_SESSION['foto']; ?>">

                    <!-- Conectar o nome das ongs com o banco -->
                    <span class="title-ong">Bem-Vindo <br> <?php echo $_SESSION['nome'];?></span>
                </div>

                <ul>
                    <li>
                        <a href="index.php">
                            <span class="icon"><i class="fi fi-sr-chart-line-up"></i></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="Pets.php">
                            <span class="icon"><i class="fi fi-rs-paw"></i></span>
                            <span class="title">Pets</span>
                        </a>
                    </li>
                    <li>
                        <a href="Campanhas.php">
                            <span class="icon"><i class="fi fi-rr-megaphone"></i></span>
                            <span class="title">Campanhas</span>
                        </a>
                    </li>
                    <li>
                        <a href="solicitacoes.php">
                            <span class="icon"><i class="fi fi-rr-assept-document"></i></span>
                            <span class="title">Solicitações</span>
                        </a>
                    </li>
                    <li>
                        <a href="Chat.php">
                            <span class="icon"><i class="fi fi-rr-messages"></i></span>
                            <span class="title">Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fi fi-rr-settings"></i></span>
                            <span class="title">Configurações</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <span class="icon"><i class="fi fi-rr-sign-out-alt"></i></span>
                            <span class="title">Sair</span>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="main">

                <div class="wrapper">
                    <section class="users">
                    <header>
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                            <span>Eu</span>
                            <a class="icon-pontinhos" href="#"><ion-icon name="ellipsis-vertical-outline"></ion-icon></a>
                            </div>
                        </div>
                    </header>
                    <div class="search">
                        <span class="text"></span>
                        <input type="text" placeholder="Pesquisar ou começar uma nova conversa">
                        
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

                        <a href="#">
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                            <span>Deivid</span>
                            <p>This is test message</p>
                            </div>
                        </div>
                        </a>

                        <a href="#">
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                            <span>Deivid</span>
                            <p>This is test message</p>
                            </div>
                        </div>
                        </a>

                        <a href="#">
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                            <span>Deivid</span>
                            <p>This is test message</p>
                            </div>
                        </div>
                        </a>

                        <a href="#">
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                            <span>Deivid</span>
                            <p>This is test message</p>
                            </div>
                        </div>
                        </a>

                        <a href="#">
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                            <span>Deivid</span>
                            <p>This is test message</p>
                            </div>
                        </div>
                        </a>

                        <a href="#">
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                            <span>Deivid</span>
                            <p>This is test message</p>
                            </div>
                        </div>
                        </a>

                        <a href="#">
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                            <span>Deivid</span>
                            <p>This is test message</p>
                            </div>
                        </div>
                        </a>

                        <a href="#">
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                            <span>Deivid</span>
                            <p>This is test message</p>
                            </div>
                        </div>
                        </a>

                        <a href="#">
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                            <span>Deivid</span>
                            <p>This is test message</p>
                            </div>
                        </div>
                        </a>

                        <a href="#">
                        <div class="content">
                            <img src="images/img-chat/chat-perfil.png" alt="">
                            <div class="details">
                            <span>Deivid</span>
                            <p>This is test message</p>
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
                    <img src="images/img-chat/chat-perfil2.png" alt="">
                    <div class="details-chat">
                        <span>Bruna</span>
                        <p>Online</p>
                    </div>
                </header>
                <div class="chat-box">
                    <div class="chat outgoing">
                    <div class="details">
                        <p>Oi cliente!! Vcs ainda tem este pet disponivel?</p>
                    </div>
                    </div>

                    <div class="chat incoming">
                    <img src="images/img-chat/chat-perfil2.png" alt="">
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
                    <img src="images/img-chat/chat-perfil2.png" alt="">
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
                    <img src="images/img-chat/chat-perfil2.png" alt="">
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
                    <img src="images/img-chat/chat-perfil2.png" alt="">
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
                    <img src="images/img-chat/chat-perfil2.png" alt="">
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
                    <img src="images/img-chat/chat-perfil2.png" alt="">
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
                    <img src="images/img-chat/chat-perfil2.png" alt="">
                    <div class="details">
                        <p>Oi cliente!! kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
                    </div>
                    </div>

                    <br>
                </div>

                <form action="#" class="typing-area">
                    <input type="text" placeholder="Digite uma mensagem...">
                    <img src="images/img-chat/enviar.png" alt="" value="enviar">
                </form>
                </section>
                </div> 

            </div>
        </div>


        <!-- Links JS -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

        <script src="js/script.js"></script>
        <script src="js/graficos.js"></script>

    </body>
</html>