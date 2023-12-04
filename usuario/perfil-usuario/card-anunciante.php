<?php 
$resultAnuciante= $mysqli->query("SELECT * FROM tbanunciante ORDER BY idAnunciante ASC") or die($mysqli->error);
while($anunciante_data = mysqli_fetch_assoc($resultAnuciante)){ 
    

   

   
    ?>
<div class="card-ong card-anunciante" style="list-style: none;">
    <div class="area-foto">
        <div class="foto">
            <img src="<?php echo "../../anunciante/Cadastro/" . $anunciante_data['fotoAnunciante'] ?>">
        </div>
    </div>

    <div class="area-conteudo">
        <div class="info">
            <div class="nome anunciante" id="anunciante">
                <h3><?php echo $anunciante_data['nomeAnunciante'];?></h3>
            </div>
        </div>

        <div class="area-local">
            <div class="local">
                <i class="fi fi-sr-marker"></i>
                <p><?php echo $anunciante_data['bairroAnunciante'];?></p>
            </div>
            <button class="open-modalPerfilAnunciante btn-visitar"> 
                Visitar 
                <i class="fi fi-br-angle-small-right"></i>
            </button>   
        </div>
    </div>

    <!-- Modal Saiba Mais -->
    <div class="modalPerfilAnunciante hide">
        <div class="topo">
            <div class="papel-parede">
                <img src="images/papel-parede-anunciante.png">
            </div>

            <div class="area-pesquisa-modal">
                <div class="fechar-modalOngPerfil">
                    <i class="seta fi fi-br-angle-small-left close-modalPerfilAnunciante"></i>
                </div>
                <div class="icone-config">
                    <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
                </div>
            </div>

            <div class="dados-perfil">
                <div class="perfil">
                    <div>
                        <div class="user">
                            <img src="images/foto-campanha.png">
                            <h2>Pet Shop</h2>
                            <p>Olá, seja bem-vindo ao nosso perfil!</p>
                        </div>
                        <div class="area-seguir">
                            <div class="seguidores">
                                <div class="icons icons-perfil">
                                    <i class="fi fi-rr-messages icon-chat"></i>
                                </div>
                                <p>100 seguidores</p>
                                <button>
                                    Seguir
                                    <i class="fi fi-sr-user-add"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="area-local-mapa">
                        <div class="area-mapa">
                            <div class="local">
                                <i class="fi fi-rr-marker"></i>
                                <p>123 Anywhere St., Any City</p>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7314.867832910044!2d-46.63305022111003!3d-23.552854412933524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1695764301953!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="campanhas-ong">
            <div class="area-campo">
                <h2>Nossos Anúncios</h2>
            </div>

            <div class="area-campo">
                <div class="search">
                    <i class="fi fi-br-search"></i>
                    <input type="text" placeholder="Pesquisar">
                </div>
            </div>
        </div>
                        
        <div class="area-tela-posts">
            <?php require "post-anuncio.php"; ?>
        </div>
    </div>

</div>
<?php } ?>