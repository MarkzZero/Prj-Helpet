<?php
$resultAnuncio = $mysqli->query("SELECT *, DATE_FORMAT(dataInicioAnuncio, '%d/%m/%Y') as 'inicio', DATE_FORMAT(dataTerminoAnuncio, '%d/%m/%Y') as 'fim' FROM tbAnuncio ORDER BY RAND()");




while ($anuncio_data = mysqli_fetch_assoc($resultAnuncio)) {
    $resultAnunciante = $mysqli->query("SELECT tbAnuncio.nomeAnuncio as 'anuncio', tbAnunciante.nomeAnunciante as 'anunciante' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '{$anuncio_data['idAnuncio']}'");
    
    $favoritosAnuncio = $mysqli->query("SELECT count(idAnuncio) as 'favoritoAnuncio' FROM tbAnunciofavorito where idusuario = $id AND idanuncio = '$anuncio_data[idAnuncio]'");
    $resultFavoritosAnuncio = mysqli_fetch_assoc($favoritosAnuncio);
   
    $anunciante_data = mysqli_fetch_assoc($resultAnunciante);

    $fotoAnunciante= $mysqli->query("SELECT tbAnuncio.nomeAnuncio as 'anuncio', tbAnunciante.fotoAnunciante as 'fotoAnunciante' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '{$anuncio_data['idAnuncio']}'");

    $foto_anunciante = mysqli_fetch_assoc($fotoAnunciante);

    $numAnunciante = $mysqli->query("SELECT tbAnuncio.idAnuncio as 'anuncio', tbAnunciante.numLocalAnunciante as 'numLocal' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '{$anuncio_data['idAnuncio']}'");

    $num_anunciante = mysqli_fetch_assoc($numAnunciante);

    $ruaAnunciante = $mysqli->query("SELECT tbAnuncio.idAnuncio as 'anuncio', tbAnunciante.logradouroAnunciante as 'rua' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '{$anuncio_data['idAnuncio']}'");

    $rua_anunciante = mysqli_fetch_assoc($ruaAnunciante);

    $bairroAnunciante = $mysqli->query("SELECT tbAnuncio.nomeAnuncio as 'anuncio', tbAnunciante.bairroAnunciante as 'bairro' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '{$anuncio_data['idAnuncio']}'");

    $bairro_anunciante = mysqli_fetch_assoc($bairroAnunciante);

    $cidadeAnunciante = $mysqli->query("SELECT tbAnuncio.nomeAnuncio as 'anuncio', tbAnunciante.cidadeAnunciante as 'cidade' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '{$anuncio_data['idAnuncio']}'");

    $cidade_anunciante = mysqli_fetch_assoc($cidadeAnunciante);


?>
    <div class="post post-anuncio" style="list-style: none;">
        <div class="area-top">
            <div class="ong">
                <img src="<?php echo "../../anunciante/cadastro/" . $foto_anunciante['fotoAnunciante'] ?>">
                <h4><?php echo $anunciante_data['anunciante']  ?></h4>
            </div>
            <?php if ($resultFavoritosAnuncio['favoritoAnuncio'] == '0') { ?>
    <div class="icon-fav">
        <i id="heartIcon1" data-anuncio-id="<?php echo $anuncio_data['idAnuncio'] ?>" class="fi-rr-heart icon favoritar-animal"></i>
    </div>
<?php } else { ?>
    <div class="icon-fav">
        <i id="heartIcon1" data-anuncio-id="<?php echo $anuncio_data['idAnuncio'] ?>" class="fi-sr-heart icon favoritar-animal"></i>
    </div>
<?php } ?>
        </div>

        <div class="campanha">
            <h4><?php echo $anuncio_data['nomeAnuncio'] ?></h4>
            <img src="<?php echo "../../anunciante/dashboard-anunciante/Cadastro/" . $anuncio_data['fotoAnuncio'] ?>">
        </div>

        <div class="area-bottom">
            <p><?php echo $anuncio_data['descAnuncio'] ?></p>
            <button class="open-modalPerfilAnuncio botao-modal">
                <p>Saiba Mais</p>
                <i class="fi fi-br-angle-small-right"></i>
            </button>
        </div>

        <!-- Modal Saiba Mais -->
        <div class="fadePerfilAnuncio hide"></div>
        <div class="modalPerfilAnuncio hide">
            <div class="modal-header">
                <!-- <div class="icon-fav">
                    <i id="heartIcon1" class="fi-rr-heart icon"></i>
                </div> -->

                <div class="fechar-modal">
                    <i class="fechar fi fi-br-cross close-modalPerfilAnuncio"></i>
                    <i class="seta fi fi-br-angle-small-left close-modalPerfilAnuncio"></i>
                </div>
            </div>

            <div class="modal-info">
                <div class="info-pet">
                    <div class="modal-nome">
                        <div class="foto-modal">
                            <img src="<?php echo "../../anunciante/dashboard-anunciante/Cadastro/" . $anuncio_data['fotoAnuncio'] ?>">
                        </div>
                        <div class="nome-pet">
                            <h3><?php echo $anuncio_data['nomeAnuncio'] ?></h3>
                        </div>
                    </div>


                    
                    <div class="area-itens">
                        <div class="item">
                            <h4>Data de Ínicio</h4>
                            <p><?php echo $anuncio_data['inicio'] ?></p>
                            <div class="icon-patinha">
                                <i class="fi fi-sr-calendar-clock"></i>
                            </div>
                        </div>

                        <div class="item">
                            <h4>Data de Término</h4>
                            <p><?php echo $anuncio_data['fim'] ?></p>
                            <div class="icon-patinha">
                                <i class="fi fi-sr-calendar-clock"></i>
                            </div>
                        </div>
                    </div>

                    <div class="area-descricao">
                        <div class="post-body">
                            <span class="short-text">
                                <p>
                                    <?php echo $anuncio_data['descAnuncio'] ?>
                                </p>
                                <a class="read-more">Ler mais</a>
                            </span>
                            <span class="full-text">
                                <p>
                                    <?php echo $anuncio_data['descAnuncio'] ?>
                                    <a class="read-less">Ler menos</a>
                                </p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="area-ong">
                    <!-- <div class="galeria">
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
                    </div> -->

                    <div class="info-ong">
                        <img class="open-modalPerfilAnunciante" src="<?php echo "../../anunciante/cadastro/" . $foto_anunciante['fotoAnunciante'] ?>">

                        <div class="item-ong">
                            <div class="nome-ong">
                                <h3><?php echo $anunciante_data['anunciante']  ?></h3>
                                <div class="icons icon-chat">
                                    <i class="fi fi-rr-messages icon-chat"></i>
                                </div>
                            </div>

                            <div class="local">
                                <i class="fi fi-sr-marker"></i>
                                <p><?php echo $rua_anunciante['rua'] . " N° " . $num_anunciante['numLocal']. ", ". $bairro_anunciante['bairro']. ", ". $cidade_anunciante['cidade'] ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
<?php } ?>