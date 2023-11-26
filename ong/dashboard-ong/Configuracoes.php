<?php 
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Configurações</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link rel="stylesheet" type="text/css" href="css/style-config.css">
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
                    <img style="border-radius: 100%;" src="<?php echo "../Cadastro/" . $_SESSION['foto-ong']; ?>">

                    <!-- Conectar o nome das ongs com o banco -->
                    <span class="title-ong">Bem-Vindo <br> <?php echo $_SESSION['nome-ong'];?></span>
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
                        <a href="configuracoes.php">
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

            <!-- Configurações -->
            <div class="main">

                <div class="menu-config">
                        
                    <div class="titulo-config">
                        <span>Configurações</span>
                    </div>
                        
                    <div class="area-botao">

                        <hr>

                        <div class="botao">
                            <i class="fi fi-rs-arrows-repeat"></i>
                            <a href="edit-ong.php">
                                Alterar Perfil
                            </a>
                        </div>

                        <hr>
                            
                        <div class="botao open-modalExc">
                            <i class="fi fi-rs-trash"></i>
                            <a>
                                Excluir Perfil
                            </a>
                        </div>

                        <hr>
                            
                        <div class="botao">
                            <i class="fi fi-sr-headset"></i>
                            <a href="#">
                                Suporte
                            </a>
                        </div>

                        <hr>

                    </div>

                    <!-- MODO ESCURO E CLARO -->
                    <div class="btn-modo">
                        <i class="fi fi-rs-moon-stars"></i>
                        <p>Modo Escuro</p>
                        <input type="checkbox" id="switch"/><label for="switch"></label>
                    </div> 
    
                </div>

                <?php require "excluir-ong.php"; ?>
                
            </div>
        </div>


        <!-- Links JS -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script src="js/app.js"></script>
        <script src="js/graficos.js"></script>
        <script src="js/modal.js"></script>

    </body>
</html>
