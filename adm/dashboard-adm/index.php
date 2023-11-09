<?php 
    include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Dashboard do ADM</title>
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
                    <img src="images/logo-branca.png">
                    <span class="title-adm">ADM</span>
                </div>

                <ul>
                    <li>
                        <a href="index.php">
                            <span class="icon"><i class="fi fi-sr-chart-line-up"></i></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="Ongs.php">
                            <span class="icon"><i class="fi fi-rr-house-building"></i></span>
                            <span class="title">ONGs</span>
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
                    <div class="titulo-pagina">
                        <span>Dashboard</span>
                    </div>
                </div>


                <div class="conteudo">

                    <!-- Gráficos -->
                    <div class="area-grafico">
                        <div class="titulo-graficos">
                            <span>Visualizações do Sistema</span>
                        </div>

                        <div class="grafico">
                            <div id="chartdiv2"></div>
                        </div>
                    </div>
                

                    <!-- Cards Box -->
                    <div class="card-box"> 
                        <div class="card-claro">
                            <div class="card-conteudo">
                                <img src="images/icon-adocoes.png">
                                <span class="card-name">Adoções</span>
                                <p class="number">110</p>
                            </div>
                        </div>

                        <div class="card-azul">
                            <div class="card-conteudo">
                                <img src="images/icon-pets.png">
                                <span class="card-name">Pets</span>
                                <p class="number">200</p>
                            </div>
                        </div>

                        <div class="card-azul-medio">
                            <div class="card-conteudo">
                                <img src="images/icon-apadrinhar.png">
                                <span class="card-name">Apadrinhamento</span>
                                <p class="number">20</p>
                            </div>
                        </div>

                        <div class="card-escuro">
                            <div class="card-conteudo">
                                <img src="images/icon-ongs.png">
                                <span class="card-name">ONGs</span>
                                <p class="number">40</p>
                            </div>
                        </div>
                    </div>

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