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
        <link rel="shortcut icon" type="imagex/png" href="../../images/logo-azul.ico">

        <!-- Links CSS -->
        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" href="css/dashboard.css">
    </head>
    <body>

        <div class="container">
            <!-- Menu Lateral -->
            <?php require "menu-lateral.php"; ?>

            <div class="main">
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
                <div class="areaGraf">
                    <div class="area">
                        <div class="conteudo-graficos">
                            <div class="area-grafico">
                                <div class="sub-titulo">
                                    <span class="titulo1">Solicitações Aceitas</span>
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
                                        <p class="nome-not">Claudia Rodrigues</p>
                                        <p class="mens-not">Bom dia</p>
                                    </div>
                                </div>

                                <div class="hora-not">
                                    <p>Há 2h</p>
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
                                    <p>Há 5h</p>
                                </div>
                            </div>

                            <hr class="hr-div">

                            <div class="area-perfil">
                                <div class="conteudo-mens">
                                    <div class="foto-not">
                                        <img src="images/pessoa-not.jpg">
                                    </div>

                                    <div class="area-mens">
                                        <p class="nome-not">Luisa Ferreira</p>
                                        <p class="mens-not">Até logo</p>
                                    </div>
                                </div>

                                <div class="hora-not">
                                    <p>Há 15h</p>
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
                            <img src="images/icon-apadrinhar.png">
                            <div class="card-name">Apadrinhamentos</div>
                            <div class="number"><?php echo $padrinResult ?></div>
                        </div>
                    </div>

                    <div class="card-laranja">
                        <div class="card-conteudo">
                            <img src="images/icon-pets.png">
                            <div class="card-name">Pets</div>
                            <div class="number"><?php echo $petsResult ?></div>
                        </div>
                    </div>

                    <div class="card-azul">
                        <div class="card-conteudo">
                            <img src="images/icon-campanhas.png">
                            <div class="card-name">Campanhas</div>
                            <div class="number"><?php echo $campanhasResult ?></div>
                        </div>
                    </div>

                    <div class="card-laranja">
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
        <script src="js/menu.js"></script>
        <script src="js/botao-ver-mais.js"></script>

        <script>
            /* Gráficos */
            const ctx2 = document.getElementById('myChart');

            Chart.defaults.font.size = 16;

            const countAdocao = <?php echo $adocaoResult; ?>;
            const countApadrinhamento = <?php echo $padrinResult; ?>;

            new Chart(ctx2, {
                type: 'pie',
                data: {
                    labels: [
                        'Adoções',
                        'Apadrinhamentos',
                    ],
                    datasets: [{
                        label: 'Quantidade',
                        data: [countAdocao, countApadrinhamento],
                        backgroundColor: [
                            '#FFBD49',
                            '#FF8903',
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    indexAxis: 'x',

                    plugins: {
                        legend: {
                            labels: {
                                font: {
                                    size: 16,
                                }
                            }
                        }
                    },
                }
            });


            const ctx = document.getElementById('myChart2');

            Chart.defaults.font.size = 16;

            const countGatos = <?php echo $countGatos;?>;
            const countCachorro = <?php echo $countCachorro;?>;

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [
                        'Gatos',
                        'Cachorros',
                    ],
                    datasets: [{
                        label: 'Quantidade',
                        data: [countGatos, countCachorro],
                        backgroundColor: [
                            '#72B0FF',
                            '#377DE2',
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    indexAxis: 'x',

                    plugins: {
                        legend: {
                            labels: {
                                font: {
                                    size: 16,
                                }
                            }
                        }
                    },
                }
            });

        </script>
    </body>
</html>
