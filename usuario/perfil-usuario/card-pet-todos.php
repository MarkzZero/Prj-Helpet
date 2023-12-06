<?php 

while ($pet_data = mysqli_fetch_assoc($AnimalResult)) {


    $favoritos = $mysqli->query("SELECT count(idAnimal) as 'favoritoAnimal' FROM tbFavorito where idusuario = $id AND idanimal = '$pet_data[idAnimal]'");
    $resultFavoritos = mysqli_fetch_assoc($favoritos);
$numLocalPet = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.numLogOng as 'numLocal' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

$localPet = mysqli_fetch_assoc($numLocalPet);

$logradouroPet = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.logradouroOng as 'rua' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

$ruaPet = mysqli_fetch_assoc($logradouroPet);

$cidadePet_ = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.cidadeOng as 'cidade' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

$cidadePet = mysqli_fetch_assoc($cidadePet_);

$resultRaca = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbRaca.nomeRaca as 'nome_raca' FROM tbAnimal INNER JOIN tbRaca ON tbAnimal.idRaca = tbRaca.idRaca WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'") or die($mysqli->error);

$raca_data = mysqli_fetch_assoc($resultRaca);

$resultVac = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbVacina.tipoVacina as 'vacina' FROM tbAnimal INNER JOIN tbVacina ON tbAnimal.idVacina = tbVacina.idVacina WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'") or die($mysqli->error);

$vacina_data = mysqli_fetch_assoc($resultVac);

$resultDoenca = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbDoenca.tipoDoenca as 'doenca' FROM tbAnimal INNER JOIN tbDoenca ON tbAnimal.idDoenca = tbDoenca.idDoenca WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'") or die($mysqli->error);

$doenca_data = mysqli_fetch_assoc($resultDoenca);

$fotoOng = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.fotoOng as 'fotoOng' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng  WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

$foto_data = mysqli_fetch_assoc($fotoOng);

$nomeOng = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.nomeOng as 'ong' FROM tbanimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

$nome_ong = mysqli_fetch_assoc($nomeOng);

$idOng = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.idOng as 'idOng' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

$id_ong = mysqli_fetch_assoc($idOng);

?>
<div class="card" style="list-style: none;">
    <div class="area-foto">
 
            
            
    <?php if ($resultFavoritos['favoritoAnimal'] == '0') { ?>
    <div class="icon-fav">
        <i id="heartIcon1" data-animal-id="<?php echo $pet_data['idAnimal'] ?>" class="fi-rr-heart icon favoritar-animal"></i>
    </div>
<?php } else { ?>
    <div class="icon-fav">
        <i id="heartIcon1" data-animal-id="<?php echo $pet_data['idAnimal'] ?>" class="fi-sr-heart icon favoritar-animal"></i>
    </div>
<?php } ?>
        <div class="foto">
            <img src="<?php echo "../../ong/dashboard-ong/Cadastro/" . $pet_data['fotoPerfilAnimal'] ?>">
        </div>
    </div>

    <div class="area-conteudo">
        <div class="info">
            <div class="nome">
                <h3><?php echo $pet_data['nomeAnimal'] ?></h3>
            </div>
            <?php if ($pet_data['generoAnimal'] == 'Fêmea') { ?>
                <div class="icon-femea">
                    <i class="fi fi-rr-venus"></i>
                </div>
            <?php } elseif ($pet_data['generoAnimal'] == 'Macho') { ?>
                <div class="icon-macho">
                    <i class="fi fi-rr-mars"></i>
                </div>
            <?php } ?>
        </div>

        <div class="local">
            <i class="fi fi-sr-marker"></i>
            <p><?php echo $localPet['numLocal'] . " " . $ruaPet['rua'] . ", " . $cidadePet['cidade']  ?></p>
        </div>

        <div class="area-btn-modal">
            <button class="open-modal botao-modal">
                <p>Saiba Mais</p>
                <i class="fi fi-br-angle-small-right"></i>
            </button>
        </div>
    </div>

    <!-- Modal Saiba Mais -->
    <div class="fade hide"></div>
    <div class="modal hide">
        <div class="modal-header">
            <div class="icon-fav"></div>

            <div class="fechar-modal">
                <i class="fechar fi fi-br-cross close-modal"></i>
                <i class="seta fi fi-br-angle-small-left close-modal"></i>
            </div>
        </div>

        <div class="modal-info">
            <div class="info-pet">
                <div class="modal-nome">
                    <div class="foto-modal">
                        <img src="<?php echo "../../ong/dashboard-ong/Cadastro/" . $pet_data['fotoPerfilAnimal']; ?>">
                    </div>
                    <div class="nome-pet">
                        <h3><?php echo $pet_data['nomeAnimal'] ?></h3>
                        <?php if ($pet_data['generoAnimal'] == 'Fêmea') { ?>
                            <div class="icon-femea">
                                <i class="fi fi-rr-venus"></i>
                            </div>
                        <?php } elseif ($pet_data['generoAnimal'] == 'Macho') { ?>
                            <div class="icon-macho">
                                <i class="fi fi-rr-mars"></i>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="area-itens">
                    <div class="item">
                        <h4>Raça</h4>
                        <p id="raca"><?php echo $raca_data['nome_raca'] ?></p>
                        <div class="icon-patinha">
                            <i class="fi fi-sr-paw"></i>
                        </div>
                    </div>

                    <div class="item" id="idade">
                        <h4>Idade</h4>
                        <p><?php echo $pet_data['idadeAnimal'] ?></p>
                        <div class="icon-patinha">
                            <i class="fi fi-sr-paw"></i>
                        </div>
                    </div>

                    <div class="item">
                        <h4>Porte</h4>
                        <p id="porte"><?php echo $pet_data['porteAnimal'] ?></p>
                        <div class="icon-patinha">
                            <i class="fi fi-sr-paw"></i>
                        </div>
                    </div>

                    <div class="item">
                        <h4>Espécie</h4>
                        <p id="especie"><?php echo $pet_data['especieAnimal'] ?></p>
                        <div class="icon-patinha">
                            <i class="fi fi-sr-paw"></i>
                        </div>
                    </div>
                </div>

                <div class="listas">
                    <div class="vacinas">
                        <span>Vacinas</span>
                        <ul>
                            <li><?php echo $vacina_data['vacina'] ?></li>
                        </ul>
                    </div>
                    <div class="doencas">
                        <span>Doenças</span>
                        <ul>
                            <li><?php echo $doenca_data['doenca'] ?></li>
                        </ul>
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
                        <img src="images/pet-gato.png">
                        <img src="images/pet-gato.png">
                        <img src="images/pet-gato.png">
                        <img src="images/pet-gato.png">
                        <img src="images/pet-gato.png">
                        <img src="images/pet-gato.png">
                    </div>
                </div>

                <div class="info-ong">
                    <img src="<?php echo "../../ong/Cadastro/" . $foto_data['fotoOng'] ?>">

                    <div class="item-ong">
                        <div class="nome-ong">
                            <h3><?php echo $nome_ong['ong'] ?></h3>
                            <div class="icons icon-chat">
                               <a href="Chat.php?o=<?php echo $id_ong['idOng']?>"><i class="fi fi-rr-messages icon-chat"></i></a>
                            </div>
                        </div>

                        <div class="local">
                            <i class="fi fi-sr-marker"></i>
                            <p><?php echo $localPet['numLocal'] . " " . $ruaPet['rua'] . ", " . $cidadePet['cidade']  ?></p>
                        </div>
                    </div>
                </div>

                <div class="area-descricao">
                    <div class="post-body">
                        <span class="short-text">
                            <p>
                                <?php echo $pet_data['descAnimal'] ?>
                            </p>
                            <a class="read-more">Ler mais</a>
                        </span>
                        <span class="full-text">
                            <p>
                                <?php echo $pet_data['descAnimal'] ?>
                                <a class="read-less">Ler menos</a>
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="area-botoes">
            <button class="btn-apadrinhar" name="apadrinhar">
                Apadrinhar
                <img src="images/icon-apadrinhar.png">
            </button>

            <form action="./adocao/adotar.php" method="post">
                <input type="hidden" name="idAnimal" id="" value="<?php echo $pet_data['idAnimal'] ?>">
                <input type="hidden" name="idUsuario" id="" value="<?php echo $_SESSION['id'] ?>">
                <input type="hidden" name="idOng" id="" value="<?php echo $id_ong['idOng'] ?>">
                <button class="btn-adotar" name="adotar">
                    Adotar
                    <img src="images/icon-adotar.png">
                </button>
            </form>

            <button class="open-modalAjudar btn-ajudar" name="ajudar">
                Ajudar
                <img src="images/icon-ajudar.png">
            </button>

            <!-- Modal Ajudar Pet -->
            <div class="fadeAjudar hide"></div>
            <div class="modalAjudar hide">
                <div class="modal-header">
                    <div></div>
                    <div class="fechar-modal">
                        <i class="fechar fi fi-br-cross close-modalAjudar"></i>
                        <i class="seta fi fi-br-angle-small-left close-modalAjudar"></i>
                    </div>
                </div>
                <div class="conteudo-ajudar"> 
                    <span>Ajude este pet</span>
                    <img src="images/pix-ajudar-pet.png">
                    <p class="titulo-pix">Chave PIX</p>
                    <p class="chave-pix">23456789010</p>
                </div>
            </div>
        </div>
    </div>

</div>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
