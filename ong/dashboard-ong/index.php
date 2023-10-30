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
        <link rel="stylesheet" type="text/css" href="css/style.css">
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

                <!-- Área Topo -->
                <div class="topbar">
                    <div class="img-pag">
                        <img src="images/pag-dashboard.png">
                    </div>

                    <div class="titulo-pagina">
                        <span>Dashboard</span>
                    </div>

                    <div class="img-logo">
                        <a href="../../index.php"><img src="images/logo-azul.png" alt=""></a>
                    </div>
                </div>

                <!-- Gráficos -->
                <div class="area">
                    <div class="area-grafico">
                        <div class="sub-titulo">
                            <span>Adoção de Pets</span>
                        </div>
                        <div class="grafico">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>

                    <!-- Notificações -->
                    <div class="area-notificacoes">

                        <div class="topo">
                            <p>Notificações</p>
                            <i class="fi fi-ss-bell"></i>
                        </div>

                        <div class="not">
                            <div class="area-perfil">
                                <div class="conteudo-mens">
                                    <div class="foto-not">
                                        <img src="images/pessoa-not.jpg">
                                    </div>

                                    <div class="area-mens">
                                        <p class="nome-not">Luiz Martins</p>
                                        <p class="mens-not">Ok</p>
                                    </div>
                                </div>

                                <div class="hora-not">
                                    <p>5m ago</p>
                                </div>
                            </div>

                            <hr class="hr-div">

                            <div class="area-perfil">
                                <div class="conteudo-mens">
                                    <div class="foto-not">
                                        <img src="images/pessoa-not.jpg">
                                    </div>

                                    <div class="area-mens">
                                        <p class="nome-not">Luiz Martins</p>
                                        <p class="mens-not">Ok</p>
                                    </div>
                                </div>

                                <div class="hora-not">
                                    <p>5m ago</p>
                                </div>
                            </div>

                            <hr class="hr-div">

                            <div class="area-perfil">
                                <div class="conteudo-mens">
                                    <div class="foto-not">
                                        <img src="images/pessoa-not.jpg">
                                    </div>

                                    <div class="area-mens">
                                        <p class="nome-not">Luiz Martins</p>
                                        <p class="mens-not">Ok</p>
                                    </div>
                                </div>

                                <div class="hora-not">
                                    <p>5m ago</p>
                                </div>
                            </div>

                            <hr class="hr-div">

                            <div class="area-perfil">
                                <div class="conteudo-mens">
                                    <div class="foto-not">
                                        <img src="images/pessoa-not.jpg">
                                    </div>

                                    <div class="area-mens">
                                        <p class="nome-not">Luiz Martins</p>
                                        <p class="mens-not">Ok</p>
                                    </div>
                                </div>

                                <div class="hora-not">
                                    <p>5m ago</p>
                                </div>
                            </div>

                            <hr class="hr-div">

                            <div class="area-perfil">
                                <div class="conteudo-mens">
                                    <div class="foto-not">
                                        <img src="images/pessoa-not.jpg">
                                    </div>

                                    <div class="area-mens">
                                        <p class="nome-not">Luiz Martins</p>
                                        <p class="mens-not">Ok</p>
                                    </div>
                                </div>

                                <div class="hora-not">
                                    <p>5m ago</p>
                                </div>
                            </div>

                            <hr class="hr-div">

                            <div class="area-perfil">
                                <div class="conteudo-mens">
                                    <div class="foto-not">
                                        <img src="images/pessoa-not.jpg">
                                    </div>

                                    <div class="area-mens">
                                        <p class="nome-not">Luiz Martins</p>
                                        <p class="mens-not">Ok</p>
                                    </div>
                                </div>

                                <div class="hora-not">
                                    <p>5m ago</p>
                                </div>
                            </div>

                        </div>

                        <div class="mostra-not">
                            <div id="read_button">
                                <p>Mostrar Mais</p>
                                <i class="fi fi-rr-caret-down"></i>
                            </div>
                        </div>

                    </div>

                </div>

                <br>

                <!-- Cards Box -->
                <div class="card-box"> 
                    <div class="card-laranja">
                        <div class="card-conteudo">
                            <img src="images/icon-adocoes.png">
                            <div class="card-name">Adoções</div>
                            <div class="number"><?php echo $adocaoResult ?></div>
                        </div>
                    </div>

                    <div class="card-azul">
                        <div class="card-conteudo">
                            <img src="images/icon-pets.png">
                            <div class="card-name">Pets</div>
                            <div class="number"><?php echo $petsResult ?></div>
                        </div>
                    </div>

                    <div class="card-laranja">
                        <div class="card-conteudo">
                            <img src="images/icon-apadrinhar.png">
                            <div class="card-name">Apadrinhamentos</div>
                            <div class="number"><?php echo $padrinResult ?></div>
                        </div>
                    </div>

                    <div class="card-azul">
                        <div class="card-conteudo">
                            <img src="images/icon-seguidores.png">
                            <div class="card-name">Seguidores</div>
                            <div class="number">180</div>
                        </div>
                    </div>
                </div>

                <br>
                
            </div>
        </div>


        <!-- Links JS -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script src="js/script.js"></script>
        <script src="js/graficos.js"></script>
        <script src="js/botao-ver-mais.js"></script>

    </body>
</html>