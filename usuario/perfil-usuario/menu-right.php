<div class="container2">
    <div class="categorias">
        <h2>Categorias</h2>

        <div class="itens-categorias">
            <div class="item open-modalCampanhas">
                <div class="item-campanhas">
                    <img src="images/campanhas.png">
                </div>
                <p>Campanhas</p>
            </div>

            <div class="item open-modalOngs">
                <div class="item-ongs">
                    <img src="images/ongs.png">
                </div>
                <p>ONGs</p>
            </div>

            <div class="item open-modalAdocao">
                <div class="item-pets">
                    <img src="images/pets.png">
                </div>
                <p>Pets</p>
            </div>
            
            <div class="item open-modalAnunciantes">
                <div class="item-anunciantes">
                    <img src="images/anunciantes.png">
                </div>
                <p>Anunciantes</p>
            </div>
            
            <div class="item open-modalAnuncios">
                <div class="item-anuncios">
                    <img src="images/anuncios.png">
                </div>
                <p>Anúncios</p>
            </div>
        </div>
    </div>
</div>

    
<!-- Tela de Adoção e Apadrinhamento -->
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
    </div>


    <div class="area-cards">
        <?php require "card-pet.php"; ?>
    </div>

</div>

<!-- Tela de Campanhas -->
<div class="tela-campanhas hide">
    <div class="modal-topo">
        <div class="fechar-modal">
            <i class="seta fi fi-br-angle-small-left close-modalCampanhas"></i>
        </div>

        <div class="area-pesquisa">
            <h2>Campanhas</h2>
            <div class="search">
                <i class="fi fi-br-search"></i>
                <input type="text" placeholder="Pesquisar">
            </div>
        </div>

        <div class="icone-config">
            <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
        </div>
    </div>

    <div class="area-tela-posts">
        <?php require "post-campanha.php"; ?>
    </div>

</div>

<!-- Tela de ONGs -->
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

    <div class="area-cards-ongs">
        <?php require "card-ong.php"; ?>
    </div>
</div>

<!-- Tela de Anunciantes -->
<div class="tela-anunciantes hide">
    <div class="modal-topo">
        <div class="fechar-modal">
            <i class="seta fi fi-br-angle-small-left close-modalAnunciantes"></i>
        </div>

        <div class="area-pesquisa">
            <h2>Anunciantes</h2>
            <div class="search">
                <i class="fi fi-br-search"></i>
                <input type="text" placeholder="Pesquisar">
            </div>
        </div>

        <div class="icone-config">
            <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
        </div>
    </div>

    <div class="area-cards-ongs">
        <?php require "card-anunciante.php"; ?>
    </div>

</div>

<!-- Tela de Anúncios -->
<div class="tela-anuncios hide">
    <div class="modal-topo">
        <div class="fechar-modal">
            <i class="seta fi fi-br-angle-small-left close-modalAnuncios"></i>
        </div>

        <div class="area-pesquisa">
            <h2>Anúncios</h2>
            <div class="search">
                <i class="fi fi-br-search"></i>
                <input type="text" placeholder="Pesquisar">
            </div>
        </div>

        <div class="icone-config">
            <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
        </div>
    </div>

    <div class="area-tela-posts">
        <?php require "post-anuncio.php"; ?>
    </div>

</div>
