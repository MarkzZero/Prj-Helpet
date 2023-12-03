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
        <link rel="stylesheet" type="text/css" href="css/style-solic.css">
    </head>
    <body>
        <div class="container">

            <!-- Menu Fixo Lateral -->
            <?php require "menu-lateral.php"; ?>

            <!-- CADASTRO DE CAMPANHAS -->
            <div class="main">

                <div class="topbar">
                    <div class="toggle"></div>

                    <div class="titulo-pagina area-pesq">
                        <span>Solicitações de Pets</span>
                        <div class="area-search">
                            <div class="input-group">
                                <input type="search" placeholder="Pesquisar...">
                                <i class="fi fi-rr-search"></i>
                            </div>
                        </div>
                    </div>

                    <div class="img-logo">
                        <a href="../../index.php"><img src="images/logo-azul.png" alt=""></a>
                    </div>
                </div>

                <br>
                
                <div class="area-geral-solict">
                    <?php while ($solicita = mysqli_fetch_assoc($sqlSolicitacao)) {
                        $data_solicitacao = $solicita['dataSolicitacao'];
                        $tempo_decorrido = calcularTempoDecorrido($data_solicitacao);
                    ?>
                    <div class="area-campo">
                        <div class="user">
                            <img src="<?php echo "../../usuario/cadastro/" . $solicita['foto_usuario'] ?>">
                            <div class="dados-user">
                                <h4><?php echo $solicita['nome_usuario'] ?></h4>
                                <p>Adotar</p>
                            </div>
                            <span><?php echo $tempo_decorrido?></span>
                        </div>

                        <div class="pet">
                            <img src="<?php echo "cadastro/" . $solicita['foto_animal']; ?>">
                            <div class="dados-pet">
                                <h4><?php echo $solicita['nome_animal'] ?></h4>
                                <p><?php echo $solicita['raca'] ?></p>
                            </div>
                        </div>

                        <!-- Botões -->
                        <div class="btns">
                            <form action="aprovacao/aprovacao.php" method="post">
                                <input type="hidden" name="idAnimal" value="<?php echo $solicita['id_animal'] ?>">
                                <input type="hidden" name="idAdocao" value="<?php echo $solicita['idAdocao'] ?>" id="">
                                <button type="submit" class="botao-aceitar">
                                    <i class="fi fi-rr-checkbox"></i>
                                    <p>Aceitar</p>
                                </button>
                            </form>
                            <form action="aprovacao/recusado.php" method="post">
                                <input type="hidden" name="idAdocao" value="<?php echo $solicita['idAdocao'] ?>" id="">
                                <button type="submit" class="botao-recusar">
                                    <i class="fi fi-rr-rectangle-xmark"></i>
                                    <p>Recusar</p>
                                </button>
                            </form>
                        </div>

                        <div class="icon-chat">
                            <i class="fi fi-sr-messages"></i>
                            <p>Chat</p>
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
        <script src="js/menu.js"></script>

    </body>
</html>
