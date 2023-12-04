<?php
include('protect.php');
include('./config/config.php')
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
                    <div class="card">
                        <div class="card-conteudo">
                            <img src="images/icon-adocoes.png">
                            <span class="card-name">Adoções</span>
                            <p class="number"><?php echo $adocaoResult ?></p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-conteudo">
                            <img src="images/icon-apadrinhar.png">
                            <span class="card-name">Apadrinhamentos</span>
                            <p class="number"><?php echo $padrinResult ?></p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-conteudo">
                            <img src="images/icon-pets.png">
                            <span class="card-name">Pets</span>
                            <p class="number"><?php echo $petsResult ?></p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-conteudo">
                            <img src="images/icon-campanhas.png">
                            <span class="card-name">Campanhas</span>
                            <p class="number"><?php echo $campanhasResult ?></p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-conteudo">
                            <img src="images/icon-anuncios.png">
                            <span class="card-name">Anúncios</span>
                            <p class="number"><?php echo $anuncioResult ?></p>
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
    <script>

        const ctx = document.getElementById('myChart');

        Chart.defaults.font.size = 16;

        const userResult = <?php echo $userResult;?>;
        const ongsResult = <?php echo $ongsResult;?>;
        const anuncianteResult = <?php echo $anuncianteResult;?>;

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'Usuários',
                    'ONGs',
                    'Anunciantes'
                ],
                datasets: [{
                    label: 'Quantidade',
                    data: [userResult, ongsResult, anuncianteResult],
                    backgroundColor: [
                        '#72B0FF',
                        '#377DE2',
                        '#054bc5'
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


        const ctx2 = document.getElementById('myChart2');

        Chart.defaults.font.size = 16;

        const countGatos = <?php echo $countGatos;?>;
        const countCachorro = <?php echo $countCachorro;?>;

        new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: [
                    'Gatos',
                    'Cachorros',
                ],
                datasets: [{
                    label: 'Quantidade',
                    data: [countGatos, countCachorro],
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


    </script>

</body>

</html>