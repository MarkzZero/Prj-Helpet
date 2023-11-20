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
        <div id="div-logo"><img src="images/logo-azul.png" id="logo" /></div>
        <ul>
            <li><a href="index.php" id="atual"><img class="img_menu" src="images/home.png"></a></li>
            <li><a href="notificacoes.php"><img class="img_menu" src="images/noti.png"></a></li>
            <li><a href="#"><img class="img_menu" src="images/chat.png"></a></li>
            <li><a href="perfil.php"><img class="img_menu" src="images/perfil.png"></a></li>
        </ul>
    </nav>
    <div id="container1">
        <div id="topo">

            <div id="barra-pesquisa">
                <input type="text" id="pesquisa" placeholder="Pesquisar..." />
                <button id="btn-pesq"><i class="fi fi-br-search"></i></button>
            </div>
            <div class="icone-config">
                <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
            </div>
        </div>

        <div class="banner">
            <img src="images/banner1.png">
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


    

        
        <div class="area-conteudo">
            <div class="post">
                <div class="info-post">
                    <img class='img-post' src="images/pet-gato.png"/>
                    <h2 class="nome-ong">Ampara Animal</h2>
                    
                    <div class="icon-fav">
                        <i class="fi fi-rr-heart"></i>
                        
                    </div>
                </div>
                <div class="desc-camp">
                    <h2 class="nome-camp">Nome campanha</h2>
                    <img class='img-camp' src="images/foto-camp.png"/>
                </div>
                <div class="desc-post">
                    <p>Descrição</p>
                    
                    <div class="icon-fav">
                    <i class="bi bi-chat-right-dots-fill"></i>
                        
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="info-post">
                    <img class='img-post' src="images/pet-gato.png"/>
                    <h2 class="nome-ong">Ampara Animal</h2>
                    
                    <div class="icon-fav">
                        <i class="fi fi-rr-heart"></i>
                        
                    </div>
                </div>
                <div class="desc-camp">
                    <h2 class="nome-camp">Nome campanha</h2>
                    <img class='img-camp' src="images/foto-camp.png"/>
                </div>
                <div class="desc-post">
                    <p>Descrição</p>
                    
                    <div class="icon-fav">
                    <i class="bi bi-chat-right-dots-fill"></i>
                        
                    </div>
                </div>
            </div>

            
        </div>


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

    <div id="container2">
        <div id="sugestões">
            <h2 class="titulo2">Sugestões</h2>

            <div id=bloco-sug>
                <div class=sug>
                    <img class='img-sug' src="images/pet-gato.png"/>
                    <div class=desc-sug>
                        <h3>Lily</h3>
                        <i class="fi fi-rr-venus"></i>
                    </div>
                    <button class="open-modal botao-modal"> 
                        <p>Saiba Mais</p> 
                        <i class="fi fi-br-angle-small-right"></i>
                    </button>  
                </div>
                <div class=sug>
                    <img class='img-sug' src="images/pet-gato.png"/>
                    <div class=desc-sug>
                        <h3>Lily</h3>
                        <i class="fi fi-rr-venus"></i>
                    </div>
                    <button class="open-modal botao-modal"> 
                        <p>Saiba Mais</p> 
                        <i class="fi fi-br-angle-small-right"></i>
                    </button>  
                </div>
                <div class=sug>
                    <img class='img-sug' src="images/pet-gato.png"/>
                    <div class=desc-sug>
                        <h3>Lily</h3>
                        <i class="fi fi-rr-venus"></i>
                    </div>
                    <button class="open-modal botao-modal"> 
                        <p>Saiba Mais</p> 
                        <i class="fi fi-br-angle-small-right"></i>
                    </button>  
                </div>
                <div class=sug>
                    <img class='img-sug' src="images/pet-gato.png"/>
                    <div class=desc-sug>
                        <h3>Lily</h3>
                        <i class="fi fi-rr-venus"></i>
                    </div>
                    <button class="open-modal botao-modal"> 
                        <p>Saiba Mais</p> 
                        <i class="fi fi-br-angle-small-right"></i>
                    </button>  
                </div>
                
            </div>
            <div class="open-modalAdocao mostrar-tudo">
                <p>Mostrar tudo</p>
                <i class="fi fi-br-angle-small-right"></i>
            </div>
        </div>

        <div id="categoria">
            <h2 class="titulo2">Categoria</h2>
            <div id="contet-op">
                <div class="item-nome">
                    <div class="item-procura azul">
                        <img class="img-op" src="images/campanha.png">
                    </div>
                    <p class="desc">Campanhas</p>
                </div>

                <div class="item-nome">
                    <div class="open-modalOngs item-procura azulClaro">
                        <img class="img-op" src="images/ong.png">
                    </div>
                    <p class="desc">ONGs</p>
                </div>

                <div class="item-nome">
                    <div class="item-procura verde">
                        <img class="img-op" src="images/petshop.png">
                    </div>
                    <p class="desc">Anunciantes</p>
                </div>

                <div class="item-nome">
                    <div class="item-procura lilas">
                        <img class="img-op" src="images/pets.png">
                    </div>
                    <p class="desc">Pets</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Links JS -->

    <script src="js/script.js"></script>

</body>

</html>