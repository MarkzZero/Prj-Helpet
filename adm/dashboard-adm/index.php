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
        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    </head>
    <body>
        <div class="container">

            <!-- Menu Fixo Lateral -->
            <?php require "menu-lateral.php"; ?>

            <div class="main">
                <div class="conteudo">
                    <!-- Gráficos -->
                    <div class="area">
                        <div class="titulo-pagina">
                            <span>Dashboard</span>
                        </div>
                        <div class="conteudo-graficos">
                            <div class="area-grafico">
                                <div class="sub-titulo">
                                    <span class="titulo1">Cadastrados no Sistema</span>
                                </div>
                                <div class="grafico">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>

                            <div class="area-grafico">
                                <div class="sub-titulo">
                                    <span class="titulo2">Pets Cadastrados</span>
                                </div>
                                <div class="grafico">
                                    <canvas id="myChart2"></canvas>
                                </div>
                            </div>
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

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script src="js/script.js"></script>
        <script src="js/graficos.js"></script>

    </body>
</html>
