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
    <link rel="stylesheet" type="text/css" href="css/style-solic.css">
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
                <img src="<?php echo "../Cadastro/" . $ong_data['fotoOng']; ?>">

                <!-- Conectar o nome das ongs com o banco -->
                <span class="title-ong">Bem-Vindo <br> <?php echo $ong_data['nomeOng']; ?></span>
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

        <!-- CADASTRO DE CAMPANHAS -->
        <div class="main">

            <div class="topbar">
                <div class="toggle">

                </div>

                <div class="titulo-pagina">
                    <span>Solicitações Pets</span>
                </div>

                <div class="img-logo">
                    <a href="../../index.php"><img src="images/logo-azul.png" alt=""></a>
                </div>
            </div>

            <div class="input-group">
                <input type="search" placeholder="Pesquisar...">
                <ion-icon name="search-outline"></ion-icon>
            </div>
            <br>
            <br>
            <div class="area-geral-solict">
                <?php while ($solicita = mysqli_fetch_assoc($sqlSolicitacao)) {
                    $data_solicitacao = $solicita['dataSolicitacao'];
                    $tempo_decorrido = calcularTempoDecorrido($data_solicitacao);
                ?>
                    <div class="area-campo">
                        <div class="img-usu">
                            <img src="<?php echo "../../usuario/cadastro/" . $solicita['foto_usuario'] ?>" alt="">
                        </div>
                        <div class="nome-usu">
                            <p><?php echo $solicita['nome_usuario'] ?></p>
                        </div>
                        <div class="data-solict">
                            <p><?php echo $tempo_decorrido .  "ago" ?></p>
                        </div>
                        <div class="tipo-solict">
                            <p>Adotar</p>
                        </div>
                        <div class="img-pet">
                            <img src="<?php echo "cadastro/" . $solicita['foto_animal']; ?>" alt="">
                        </div>
                        <div class="nome-pet">
                            <p><?php echo $solicita['nome_animal'] ?></p>
                        </div>
                        <div class="raça-pet">
                            <p><?php echo $solicita['raca'] ?></p>
                        </div>

                        <!-- Botões -->
                        <form action="aprovacao/aprovacao.php" method="post">
                            <input type="hidden" name="idAnimal" value="<?php echo $solicita['id_animal'] ?>">
                            <input type="hidden" name="idAdocao" value="<?php echo $solicita['idAdocao'] ?>" id="">
                            <div class="area-botao-aceitar">
                                <div class="icon-aceitar">
                                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                                </div>
                                <input type="submit" value="Aceitar" class="botao-aceitar" />
                            </div>
                        </form>
                        <form action="aprovacao/recusado.php" method="post">
                            <input type="hidden" name="idAdocao" value="<?php echo $solicita['idAdocao'] ?>" id="">
                            <div class="area-botao-recusar">
                                <div class="icon-recusar">
                                    <ion-icon name="close-circle-outline"></ion-icon>
                                </div>
                                <input type="submit" value="Recusar" class="botao-recusar" />

                            </div>
                        </form>



                        <!-- botão Chat -->
                        <div class="area-botao-chat">
                            <div class="icon-chat">
                                <ion-icon name="chatbubbles-outline"></ion-icon>
                            </div>
                            <p>CHAT</p>
                        </div>
                    </div>
                <?php } ?>
            </div>


        </div>
    </div>

    <?php
    function calcularTempoDecorrido($data_solicitacao)
    {
        $data_solicitação = strtotime($data_solicitacao);
        $agora = strtotime('now');

        $diferenca_segundos = $agora - $data_solicitação;

        $minutos = floor($diferenca_segundos / 60);

        if ($minutos < 60) {
            return "$minutos min ";
        } else {
            $horas = floor($minutos / 60);

            if ($horas < 24) {
                return "$horas h ";
            } else {
                $dias = floor($horas / 24);
                return "$dias d ";
            }
        }
    }
    ?>


    <!-- Links JS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <script src="js/app.js"></script>
    <script src="js/graficos.js"></script>

</body>

</html>