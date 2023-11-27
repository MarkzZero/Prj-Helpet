<?php
    include('../config/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Perfil</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" href="css/modais.css">
        <link rel="stylesheet" href="css/perfil.css">
        <link rel="stylesheet" href="css/cards.css">
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src="images/logo-azul.png">
            </div>
            <ul>
                <li><a href="index.php"><i class="fi fi-br-home"></i></a></li>
                <li><a href="notificacoes.php"><i class="fi fi-br-bell"></i></a></li>
                <li><a href="Chat.php"><i class="fi fi-br-messages"></i></a></li>
                <li><a href="perfil.php" id="atual"><i class="fi fi-br-circle-user"></i></a></li>
            </ul>
        </nav>

        <div class="container1">
            <?php 
            while($user_data = mysqli_fetch_assoc($sqlUsuario) AND $prefe_data = mysqli_fetch_assoc($sqlPreferencia) and $raca_data = mysqli_fetch_assoc($resultRaca)){

            ?>
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

                <div class="dados-perfil">
                    <div class="perfil">
                        <div class="user">
                            <img src="<?php echo "../cadastro/" . $user_data['fotoUsuario']?>">
                            <h2><?php echo $user_data['nomeUsuario'];?></h2>
                            <p>Olá, bem-vindo ao meu perfil!</p>
                        </div>

                        <div class="user-pref">
                            <h2 class="titulo-pref">Preferências</h2>
                            <div class="preferencias">
                                <div class="coluna">
                                    <div class="item">
                                        <img src="images/preferencias/tipo-pet.png">
                                        <p><?php echo $prefe_data['tipoPet'] ?></p>
                                    </div>
                                    <div class="item">
                                        <img src="images/preferencias/porte.png">
                                        <p><?php echo $prefe_data['portePet'] ?></p>
                                    </div>
                                </div>

                                <div class="coluna">
                                    <div class="item">
                                        <?php if ($prefe_data['preferenciaUsuario'] == 'Apadrinhar'){?>
                                        <img src="images/preferencias/apadrinhamento.png">
                                        <p>Apadrinhar</p>
                                        <?php } elseif($prefe_data['preferenciaUsuario'] == 'Adotar'){ ?>
                                            <img src="images/preferencias/icon-adocoes.png">
                                            <p>Adotar</p>
                                        <?php } else{ ?>
                                            <img src="images/preferencias/icon-adocoes.png">
                                            <p>Sem Preferência</p>
                                        <?php } ?>
                                    </div>
                                    <div class="item">
                                        <img src="images/preferencias/genero.png">
                                        <p><?php echo $prefe_data['generoPet'] ?></p>
                                    </div>
                                </div>

                                <div class="coluna">
                                    <div class="item">
                                        <img src="images/preferencias/idade.png">
                                        <p><?php echo $prefe_data['idadePet'] ?></p>
                                    </div>
                                    <div class="item">
                                        <img src="images/preferencias/raca.png">
                                        <p><?php echo $raca_data['nome_raca'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php } ?>
            </div>


            <!-- INFORMAÇÕES DO PERFIL -->
            <div class="informacoes">
                <!-- Pets Favoritos -->
                <div id="fav-pets" class="item open-modalFav">
                    <img class="icon-info" src="images/informacoes/img-fav.png">
                    <span>Pets Favoritos <br> (7)</span>
                    <i class="fi fi-br-angle-small-right"></i>
                    <div class="bolinhas"><img src="images/informacoes/bolinhas-fav.png"></div>
                </div>

                <!-- Campanhas Favoritas -->
                <div id="fav-campanhas" class="item open-modalFavCamp">
                    <img class="icon-info" src="images/informacoes/img-camp.png">
                    <span>Campanhas Favoritas <br> (4)</span>
                    <i class="fi fi-br-angle-small-right"></i>
                    <div class="bolinhas"><img src="images/informacoes/bolinhas-camp.png"></div>
                </div>

                <!-- Pets Anúncios Favoritos -->
                <div id="fav-anuncios" class="item open-modalFavAnuncios">
                    <img class="icon-info" src="images/informacoes/img-anuncios.png">
                    <span>Anúncios Favoritos <br> (3)</span>
                    <i class="fi fi-br-angle-small-right"></i>
                    <div class="bolinhas"><img src="images/informacoes/bolinhas-apad.png"></div>
                </div>

                <!-- Pets Adotados -->
                <div id="fav-adotados" class="item open-modalAdot">
                    <img class="icon-info" src="images/informacoes/img-adot.png">
                    <span>Pets Adotados e Apadrinhados<br> (2)</span>
                    <i class="fi fi-br-angle-small-right"></i>
                    <div class="bolinhas"><img src="images/informacoes/bolinhas-adot.png"></div>
                </div>

                <!-- Seguindos ONGs -->
                <div id="fav-ongs" class="item open-modalSegOng">
                    <img class="icon-info" src="images/informacoes/img-ongs.png">
                    <span>Seguindo ONGs e Anunciantes<br> (6)</span>
                    <i class="fi fi-br-angle-small-right"></i>
                    <div class="bolinhas"><img src="images/informacoes/bolinhas-ongs.png"></div>
                </div>
            </div>

        </div>

        <!-- Modal da Tela de Favoritos -->
        <div class="tela-fav hide">
            <div class="modal-topo">
                <div class="fechar-modal">
                    <i class="seta fi fi-br-angle-small-left close-modalFav"></i>
                </div>

                <h2>Pets Favoritos</h2>

                <div class="imgs-telas">
                    <img src="images/tela-pets-favoritos.png">
                </div>
            </div>

            <div class="area-pesquisa">
                <div class="search">
                    <i class="fi fi-br-search"></i>
                    <input type="text" placeholder="Pesquisar">
                </div>
            </div>

        </div>

        <!-- Modal da Tela de Pets Adotados -->
        <div class="tela-adot hide">
            <div class="modal-topo">
                <div class="fechar-modal">
                    <i class="seta fi fi-br-angle-small-left close-modalAdot"></i>
                </div>

                <div class="area-pesquisa">
                    <h2>Pets Adotados e Apadrinhados</h2>
                    <div class="search">
                        <i class="fi fi-br-search"></i>
                        <input type="text" placeholder="Pesquisar">
                    </div>
                </div>

                <div class="imgs-telas">
                    <img src="images/tela-pets-adotados.png">
                </div>
            </div>

        </div>

        <!-- Modal da Tela de Anúncios Favoritos -->
        <div class="tela-favAnuncios hide">
            <div class="modal-topo">
                <div class="fechar-modal">
                    <i class="seta fi fi-br-angle-small-left close-modalFavAnuncios"></i>
                </div>

                <div class="area-pesquisa">
                    <h2>Anúncios Favoritos</h2>
                    <div class="search">
                        <i class="fi fi-br-search"></i>
                        <input type="text" placeholder="Pesquisar">
                    </div>
                </div>

                <div class="imgs-telas">
                    <img src="images/tela-pets-favoritos.png">
                </div>
            </div>

        </div>

        <!-- Modal da Tela de Campanhas Favoritas -->
        <div class="tela-favCamp hide">
            <div class="modal-topo">
                <div class="fechar-modal">
                    <i class="seta fi fi-br-angle-small-left close-modalFavCamp"></i>
                </div>

                <div class="area-pesquisa">
                    <h2>Campanhas Favoritas</h2>
                    <div class="search">
                        <i class="fi fi-br-search"></i>
                        <input type="text" placeholder="Pesquisar">
                    </div>
                </div>

                <div class="imgs-telas">
                    <img src="images/tela-pets-favoritos.png">
                </div>
            </div>

        </div>


        <!-- Modal da Tela de Seguindos ONGs -->
        <div class="tela-segOng hide">
            <div class="modal-topo">
                <div class="fechar-modal">
                    <i class="seta fi fi-br-angle-small-left close-modalSegOng"></i>
                </div>
                
                <div class="area-pesquisa">
                    <h2>Seguidos ONGs e Anunciantes</h2>
                    <div class="search">
                        <i class="fi fi-br-search"></i>
                        <input type="text" placeholder="Pesquisar">
                    </div>
                </div>

                <div class="imgs-telas">
                    <img src="images/tela-pets-favoritos.png">
                </div>
            </div>

        </div>

        <div class="area-cards-user">
            <?php require "card-pet.php"; ?>
        </div>
        
        <!-- Sugestões e Categorias -->
        <?php require "menu-right.php"; ?>


        <!-- Links JS -->
        <script src="js/script.js"></script>
        <script src="js/modais.js"></script>

    </body>
</html>
