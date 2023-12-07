<?php
// Resultado da consulta de campanhas
$resultCampanha = $mysqli->query("SELECT *, DATE_FORMAT(diaCampanha, '%d/%m/%Y') as 'dataBrasileira' FROM tbCampanha ORDER BY idCampanha DESC");

while ($campanha_Data = mysqli_fetch_assoc($resultCampanha)) {
    // Consulta para a tabela de ONGs

    $favoritosCampanha = $mysqli->query("SELECT count(idCampanha) as 'favoritoCampanha' FROM tbFavoritoCampanha where idusuario = $id AND idcampanha = '$campanha_Data[idCampanha]'");
    $resultFavoritosCampanha = mysqli_fetch_assoc($favoritosCampanha);



    $resultOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.nomeOng as 'ong' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '{$campanha_Data['idCampanha']}'");
    $ong_Data = mysqli_fetch_assoc($resultOng);

    // Consulta para a tabela de fotos
    $fotoOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.fotoOng as 'foto' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '{$campanha_Data['idCampanha']}'");
    $foto_Data = mysqli_fetch_assoc($fotoOng);

    $numLocalOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.numLogOng as 'numLocal' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '{$campanha_Data['idCampanha']}'");
    $num_Data = mysqli_fetch_assoc($numLocalOng);

    $ruaOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.logradouroOng as 'rua' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '{$campanha_Data['idCampanha']}'");
    $rua_Data = mysqli_fetch_assoc($ruaOng);

    $cidadeOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.cidadeOng as 'cidade' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '{$campanha_Data['idCampanha']}'");
    $cidade_Data = mysqli_fetch_assoc($cidadeOng);

    $bairroOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.bairroOng as 'bairro' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '{$campanha_Data['idCampanha']}'");
    $bairro_data = mysqli_fetch_assoc($bairroOng);

    // Se os resultados estiverem vazios, continue para a próxima iteração
    if (!$ong_Data || !$foto_Data) {
        continue;
    }
?>
    <div class="post"  style="list-style: none;">
        <!-- Seu código HTML dentro do loop -->
        <div class="area-top">
            <div class="ong">
                <img src="<?php echo "../../ong/cadastro/" . $foto_Data['foto'] ?>">
                <h4><?php echo $ong_Data['ong'] ?></h4>
            </div>
            <?php if ($resultFavoritosCampanha['favoritoCampanha'] == '0') { ?>
    <div class="icon-fav">
        <i id="heartIcon2" data-campanha-id="<?php echo $campanha_Data['idCampanha'] ?>" class="fi-rr-heart icon favoritar-animal"></i>
    </div>
<?php } else { ?>
    <div class="icon-fav">
        <i id="heartIcon2" data-campanha-id="<?php echo $campanha_Data['idCampanha'] ?>" class="fi-sr-heart icon favoritar-animal"></i>
    </div>
<?php } ?>
        </div>

        <div class="campanha">
            <h4><?php echo $campanha_Data['nomeCampanha'] ?></h4>
            <img src="<?php echo "../../ong/dashboard-ong/Cadastro/"  .   $campanha_Data['fotoPerfilCampanha']; ?>">
        </div>

        <div class="area-bottom">
            <div class="item-bottom">
                <p class="p-desc"><?php echo $campanha_Data['informacaoCampanha'] ?></p>
            </div>
            
            <div class="item-bottom">
                <button class="open-modalPerfilCamp botao-modal">
                    <p>Saiba Mais</p>
                    <i class="fi fi-br-angle-small-right"></i>
                </button>
            </div>

            <div class="item-bottom">
                <span>Campanha</span>
            </div>
        </div>



        <!-- Modal Saiba Mais -->
        <div class="fadePerfilCamp hide"></div>
        <div class="modalPerfilCamp hide">
            <div class="modal-header">
                <div class="icon-fav"></div>

                <div class="nome-pet">
                    <h3><?php echo $campanha_Data['nomeCampanha'] ?></h3>
                </div>

                <div class="fechar-modal">
                    <i class="fechar fi fi-br-cross close-modalPerfilCamp"></i>
                    <i class="seta fi fi-br-angle-small-left close-modalPerfilCamp"></i>
                </div>
            </div>

            <div class="area-modal-camp">

                <div class="modal-info">
                    <div class="info-pet">
                        <div class="foto-modal">
                            <img src="<?php echo "../../ong/dashboard-ong/Cadastro/"  .   $campanha_Data['fotoPerfilCampanha']; ?>">
                        </div>
                        
                        <div class="conteudo-descricao">
                            <div class="area-itens">
                                <div class="item">
                                    <h4>Data</h4>
                                    <p><?php echo $campanha_Data['dataBrasileira'] ?></p>
                                    <div class="icon-patinha">
                                        <i class="fi fi-sr-calendar-clock"></i>
                                    </div>
                                </div>

                                <div class="item">
                                    <h4>Horário</h4>
                                    <p><?php echo $campanha_Data['horarioCampanha'] ?></p>
                                    <div class="icon-patinha">
                                        <i class="fi fi-sr-calendar-clock"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="area-descricao">
                                <div class="post-body">
                                    <span class="short-text">
                                        <p>
                                            <?php echo $campanha_Data['informacaoCampanha'] ?>
                                        </p>
                                        <a class="read-more">Ler mais</a>
                                    </span>
                                    <span class="full-text">
                                        <p>
                                            <?php echo $campanha_Data['informacaoCampanha']; ?>
                                            <a class="read-less">Ler menos</a>
                                        </p>
                                    </span>
                                </div>
                            </div>
                        </div>
           
                    </div>

                    <div class="area-ong">
                        <div class="info-ong">
                            <img src="<?php echo "../../ong/cadastro/" . $foto_Data['foto'] ?>">

                            <div class="item-ong">
                                <div class="nome-ong">
                                    <h3><?php echo $ong_Data['ong'] ?></h3>
                                    <div class="icons icon-chat">
                                    <a href="Chat.php?o=<?php echo $id_ong['idOng']?>"><i class="fi fi-rr-messages icon-chat"></i></a>
                                    </div>
                                </div>

                                <div class="local">
                                    <i class="fi fi-sr-marker"></i>
                                    <p><?php echo $rua_Data['rua'] . " N° " . $num_Data['numLocal'] . ', ' . $bairro_data['bairro'] . ", " . $cidade_Data['cidade']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <br><br>
    </div>
<?php } ?>
