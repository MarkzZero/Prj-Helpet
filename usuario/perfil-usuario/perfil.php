<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Perfil</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <nav>
            <ul>
                <li><a href="index.php"><img class="img_menu" src="images/home.png"></a></li>
                <li><a href="notificacoes.php"><img class="img_menu" src="images/noti.png"></a></li>
                <li><a href="#"><img class="img_menu" src="images/chat.png"></a></li>
                <li><a href="perfil.php" id="atual"><img class="img_menu" src="images/perfil.png"></a></li>
            </ul>
        </nav>

        <!-- TOPO DO PERFIL -->
        <div class="topo">
            <div class="papel-parede">
                <img src="images/papel-parede-user.png">
            </div>

            <div class="area-pesquisa">
                <div class="icone-config">
                    <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
                </div>
            </div>

            <div class="perfil">
                <img src="images/foto-user.png">
                <h2>Camila Martins</h2>
                <p>Olá, bem-vindo ao meu perfil!</p>
                <div class="icons">
                    <i class="fi fi-rr-share icon-comp"></i>
                </div>
            </div>
        </div>


        <!-- PREFERÊNCIAS -->
        <div class="preferencias">
            <h2>Preferências</h2>
            <div class="linha">
                <div class="item">
                    <img src="images/preferencias/tipo-pet.png">
                    <p>Gato</p>
                </div>

                <div class="item">
                    <img src="images/preferencias/apadrinhamento.png">
                    <p>Apadrinhar</p>
                </div>

                <div class="item">
                    <img src="images/preferencias/idade.png">
                    <p>Pets Filhotes</p>
                </div>

                <div class="item">
                    <img src="images/preferencias/porte.png">
                    <p>Porte Médio</p>
                </div>

                <div class="item">
                    <img src="images/preferencias/genero.png">
                    <p>Fêmea</p>
                </div>

                <div class="item">
                    <img src="images/preferencias/raca.png">
                    <p>Sem preferência de raça</p>
                </div>
            </div>
        </div>


        <!-- INFORMAÇÕES DO PERFIL -->
        <div class="informacoes">
            
            <!-- Pets Favoritos -->
            <div id="favoritos" class="item open-modalFav">
                <img class="icon-info" src="images/informacoes/img-fav.png">
                <h3>Pets Favoritos <br> (7)</h3>
                <i class="fi fi-br-angle-small-right"></i>
                <div class="bolinhas"><img src="images/informacoes/bolinhas-fav.png"></div>
            </div>

            <!-- Pets Adotados -->
            <div id="adotados" class="item open-modalAdot">
                <img class="icon-info" src="images/informacoes/img-adot.png">
                <h3>Pets Adotados <br> (2)</h3>
                <i class="fi fi-br-angle-small-right"></i>
                <div class="bolinhas"><img src="images/informacoes/bolinhas-adot.png"></div>
            </div>

            <!-- Seguindos ONGs -->
            <div id="ongs" class="item open-modalSegOng">
                <img class="icon-info" src="images/informacoes/img-ongs.png">
                <h3>Seguindo ONGs <br> (6)</h3>
                <i class="fi fi-br-angle-small-right"></i>
                <div class="bolinhas"><img src="images/informacoes/bolinhas-ongs.png"></div>
            </div>

        </div>

        <!-- Modal da Tela de Favoritos -->
        <div class="fadeFav hide"></div>
        <div class="tela-fav hide">
            <div class="modal-topo">
                <div class="fechar-modal">
                    <i class="seta fi fi-br-angle-small-left close-modalFav"></i>
                </div>

                <h2>Favoritos</h2>

                <div class="imgs-telas">
                    <img src="images/tela-pets-favoritos.png">
                </div>
            </div>

            <div class="area-pesquisa">
                <div class="search">
                    <i class="fi fi-br-search"></i>
                    <input type="text" placeholder="Pesquisar">
                    <i class="fi fi-rr-settings-sliders"></i>
                </div>
            </div>

            <?php require "card-pet.php"; ?>
        </div>

        <!-- Modal da Tela de Pets Adotados -->
        <div class="fadeAdot hide"></div>
        <div class="tela-adot hide">
            <div class="modal-topo">
                <div class="fechar-modal">
                    <i class="seta fi fi-br-angle-small-left close-modalAdot"></i>
                </div>

                <h2>Pets Adotados</h2>

                <div class="imgs-telas">
                    <img src="images/tela-pets-adotados.png">
                </div>
            </div>

            <div class="area-pesquisa">
                <div class="search">
                    <i class="fi fi-br-search"></i>
                    <input type="text" placeholder="Pesquisar">
                    <i class="fi fi-rr-settings-sliders"></i>
                </div>
            </div>

            <?php require "card-pet.php"; ?>
        </div>


        <!-- Modal da Tela de Seguindos ONGs -->
        <div class="fadeSegOng hide"></div>
        <div class="tela-segOng hide">
            <div class="modal-topo">
                <div class="fechar-modal">
                    <i class="seta fi fi-br-angle-small-left close-modalSegOng"></i>
                </div>

                <h2>Seguidos ONGs</h2>

                <div class="imgs-telas">
                    <img src="images/tela-seguindo-ongs.png">
                </div>
            </div>

            <div class="area-pesquisa">
                <div class="search">
                    <i class="fi fi-br-search"></i>
                    <input type="text" placeholder="Pesquisar">
                    <i class="fi fi-rr-settings-sliders"></i>
                </div>
            </div>

            <?php require "card-ong.php"; ?>
        </div>

        <!-- SUGESTÕES -->
        <div class="sugestoes">
            <h2>Sugestões</h2>
            <?php require "card-pet.php"; ?>
        </div>


        <!-- Links JS -->
        <script src="js/script.js"></script>
        
    </body>
</html>