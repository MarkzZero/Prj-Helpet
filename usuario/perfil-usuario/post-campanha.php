<div class="post">
<?php
    while ($campanha_Data = mysqli_fetch_assoc($resultCampanha)) {
            $ong_Data = mysqli_fetch_assoc($resultOng);
            $foto_Data = mysqli_fetch_assoc($fotoOng);
?>
    <div class="area-top">
        <div class="ong">
            <img src="<?php echo "../../ong/cadastro/" . $foto_Data['foto']?>">
            <h4><?php echo $ong_Data['ong']?></h4>
        </div>
        <div class="icon-fav">
            <i id="heartIcon1" class="fi-rr-heart icon"></i>
        </div>
    </div>

    <div class="campanha">
        <h4><?php echo $campanha_Data['nomeCampanha']?></h4>
        <img src="<?php echo "../../ong/dashboard-ong/Cadastro/"  .   $campanha_Data['fotoPerfilCampanha']; ?>">
    </div>

    <div class="area-bottom">
        <p class="p-desc"><?php echo $campanha_Data['informacaoCampanha']?></p>
        <button class="open-modalPerfilCamp botao-modal"> 
            <p>Saiba Mais</p> 
            <i class="fi fi-br-angle-small-right"></i>
        </button> 
    </div>

    <!-- Modal Saiba Mais -->
    <div class="fadePerfilCamp hide"></div>
    <div class="modalPerfilCamp hide">
        <div class="modal-header">
            <div class="icon-fav">
                <i id="heartIcon1" class="fi-rr-heart icon"></i>
            </div>

            <div class="fechar-modal">
                <i class="fechar fi fi-br-cross close-modalPerfilCamp"></i>
                <i class="seta fi fi-br-angle-small-left close-modalPerfilCamp"></i>
            </div>
        </div>

        <div class="area-modal">
            <div class="modal-info">
                <div class="info-pet">  
                    <div class="modal-nome">
                        <div class="foto-modal">
                            <img src="images/foto-ong.png">
                        </div>
                        <div class="nome-pet">
                            <h3>Campanha</h3>
                        </div>
                    </div>
                    
                    <div class="area-itens">
                        <div class="item">
                            <h4>Data</h4>
                            <p>11/05/2023</p>
                            <div class="icon-patinha">
                                <i class="fi fi-sr-calendar-clock"></i>
                            </div>
                        </div>

                        <div class="item">
                            <h4>Horário</h4>
                            <p>A partir das 13:00</p>
                            <div class="icon-patinha">
                                <i class="fi fi-sr-calendar-clock"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="area-local">
                        <div class="area-mapa">
                            <div class="local">
                                <i class="fi fi-rr-marker"></i>
                                <p>123 Anywhere St., Any City</p>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7314.867832910044!2d-46.63305022111003!3d-23.552854412933524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1695764301953!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="area-ong">
                    <div class="galeria">
                        <div class="titulo-galeria">
                            <p>Galeria</p>
                            <i class="fi fi-br-gallery"></i>
                        </div>
                        <div class="fotos">
                            <img src="images/foto-ong.png">
                            <img src="images/foto-ong.png">
                            <img src="images/foto-ong.png">
                            <img src="images/foto-ong.png">
                            <img src="images/foto-ong.png">
                            <img src="images/foto-ong.png">
                        </div>
                    </div>

                    <div class="info-ong">
                        <img src="images/foto-ong.png">

                        <div class="item-ong">
                            <div class="nome-ong">
                                <h3>Nome da ONG</h3>
                                <div class="icons icon-chat">
                                    <i class="fi fi-rr-messages icon-chat"></i>
                                </div>
                            </div>

                            <div class="local">
                                <i class="fi fi-sr-marker"></i>
                                <p>123 Anywhere St., Any City</p>
                            </div>
                        </div>
                    </div>

                    <div class="area-descricao">
                        <div class="post-body">
                            <span class="short-text">
                                <p>
                                    A campanha ProAnima tem o objetivo de ajudar todos os animais a tomar
                                    todos as vacinas para evitar alguns problemas de saúde.
                                </p>
                                <a class="read-more">Ler mais</a>
                            </span>
                            <span class="full-text">
                                <p>
                                    A campanha ProAnima tem o objetivo de ajudar todos os animais a tomar
                                    todos as vacinas para evitar alguns problemas de saúde.
                                    <a class="read-less">Ler menos</a>
                                </p>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <?php } ?>
</div>
<br>br
