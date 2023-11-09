    

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home</title>
        <link rel="icon" href="images/logo-azul.png">

        <link rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/home.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php" id="atual"><img class="img_menu" src="images/home.png"></a></li>
                <li><a href="notificacoes.php"><img class="img_menu" src="images/noti.png"></a></li>
                <li><a href="#"><img class="img_menu" src="images/chat.png"></a></li>
                <li><a href="perfil.php"><img class="img_menu" src="images/perfil.png"></a></li>
            </ul>
        </nav>
        <div id=container>
            <div id="topo">
                <img src="images/logo-azul.png" id="logo"/>
                <div id="barra-pesquisa">
                    <input type="text" id="pesquisa" placeholder="Pesquisar..."/>
                    <button id="btn-pesq"><i class="fi fi-br-search"></i></button>
                </div>
                <div class="icone-config">
                    <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
                </div>
            </div>

            <div class="banner">
                <img src="images/banner1.png">
            </div>

            <div  id="area-opções">
                <h5 class="titulo">Está procurando por?</h5>
                <div id="contet-op">
                    <div class="item-nome">
                        <div class="item-procura azul">
                            <img class="img-op" src="images/campanha.png">
                        </div>
                        <p>Campanhas</p>
                    </div>

                    <div class="item-nome">
                        <div class="open-modalOngs item-procura azulClaro">
                            <img class="img-op" src="images/ong.png">
                        </div>
                        <p>ONGs</p>
                    </div>

                    <div class="item-nome">
                        <div class="item-procura verde">
                            <img class="img-op" src="images/petshop.png">
                        </div>
                        <p>Anunciantes</p>
                    </div>
                  
                </div>
            </div>

            <br><br>


        <div class="fadeOngs hide"></div>
        <div class="tela-ongs hide">
            <div class="modal-topo">
                <div class="fechar-modal">
                    <i class="seta fi fi-br-angle-small-left close-modalOngs"></i>
                </div>

                <h2>ONGs</h2>

                <div class="icone-config">
                    <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
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


        <div class="area-pets-home">
            <p>Pets disponíveis para adoção ou apadrinhamento</p>
            <div class="open-modalAdocao mostrar-tudo">
                <p>Mostrar tudo</p>
                <i class="fi fi-br-angle-small-right"></i>
            </div>
        </div>

        <?php require "card-pet.php"; ?>


        <!-- Tela de Adoção e Apadrinhamento -->
        <div class="fadeAdocao hide"></div>
        <div class="tela-adocao hide">
            <div class="modal-topo">
                <div class="fechar-modal">
                    <i class="seta fi fi-br-angle-small-left close-modalAdocao"></i>
                </div>

                <h2>Adoção e Apadrinhamento</h2>

                <div class="icone-config">
                    <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
                </div>
            </div>

            <div class="area-pesquisa">
                <div class="search">
                    <i class="fi fi-br-search"></i>
                    <input type="text" placeholder="Pesquisar">
                    <i class="fi fi-rr-settings-sliders"></i>
                </div>

                <div class="filtros">
                    <div class="item-filtro">
                        <img src="images/pet-todos.png">
                        <p>Todos</p>
                    </div>
                    <div class="item-filtro">
                        <img src="images/pet-gato.png">
                        <p>Gatos</p>
                    </div>
                    <div class="item-filtro">
                        <img src="images/pet-cao.png">
                        <p>Cães</p>
                    </div>
                </div>
            </div>

            <?php require "card-pet.php"; ?>
        </div>

        </div>

        <!-- Links JS -->
        
        <script src="js/script.js"></script>

    </body>
</html>