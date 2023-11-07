<div id="area-cards-ongs">
    <div class="card-ong">
        <div class="area-foto">
            <div class="foto">
                <img src="images/foto-ong.png">
            </div>
        </div>

        <div class="area-conteudo">
            <div class="info">
                <div class="nome">
                    <h3>Nome da Ong</h3>
                </div>
            </div>

            <div class="area-local">
                <div class="local">
                    <i class="fi fi-sr-marker"></i>
                    <p>123 Anywhere St., Any City</p>
                </div>
                <button class="open-modalOngPerfil btn-visitar"> 
                    Visitar 
                    <i class="fi fi-br-angle-small-right"></i>
                </button>   
            </div>
        </div>

        <!-- Modal Saiba Mais ONG -->
        <div class="fadeOngPerfil hide"></div>
        <div class="modalOngPerfil hide">
            <div class="topo">
                <div class="papel-parede">
                    <img src="images/papel-parede-ong.png">
                </div>

                <div class="area-pesquisa">
                    <div class="fechar-modal">
                        <i class="seta fi fi-br-angle-small-left close-modalOngPerfil"></i>
                    </div>
                    <div class="icone-config">
                        <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
                    </div>
                </div>

                <div class="perfil">
                    <img src="images/foto-ong.png">
                    <h2>Ampara Animal</h2>
                    <p>Olá, seja bem-vindo ao nosso perfil!</p>
                    <div class="icons">
                        <i class="fi fi-rr-phone-call icon-phone"></i>
                        <i class="fi fi-rr-messages icon-chat"></i>
                        <i class="fi fi-rr-share icon-comp"></i>
                    </div>
                </div>

                <div class="area-seguir">
                    <div class="seguidores">
                        <p>100 seguidores</p>
                        <button>
                            Seguir
                            <i class="fi fi-sr-user-add"></i>
                        </button>
                    </div>
                    <div class="icon-doacao">
                        <i class="fi fi-sr-hand-holding-usd"></i>
                    </div>
                </div>

                <div class="pets-ong">
                    <div class="area-campo">
                        <h2>Nossos Pets</h2>
                    </div>

                    <div class="area-campo">
                        <div class="search">
                            <i class="fi fi-br-search"></i>
                            <input type="text" placeholder="Pesquisar">
                            <i class="fi fi-rr-settings-sliders"></i>
                        </div>
                    </div>

                    <div class="area-campo">
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
                </div>

                <?php require "card-pet.php"; ?>

            </div>
        </div>
    </div>
</div>