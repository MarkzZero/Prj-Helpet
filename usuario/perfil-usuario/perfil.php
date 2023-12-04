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
        while ($user_data = mysqli_fetch_assoc($sqlUsuario) and $prefe_data = mysqli_fetch_assoc($sqlPreferencia) and $raca_data = mysqli_fetch_assoc($resultRaca)) {

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
                            <img src="<?php echo "../cadastro/" . $user_data['fotoUsuario'] ?>">
                            <h2><?php echo $user_data['nomeUsuario']; ?></h2>
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
                                        <?php if ($prefe_data['preferenciaUsuario'] == 'Apadrinhar') { ?>
                                            <img src="images/preferencias/apadrinhamento.png">
                                            <p>Apadrinhar</p>
                                        <?php } elseif ($prefe_data['preferenciaUsuario'] == 'Adotar') { ?>
                                            <img src="images/preferencias/icon-adocoes.png">
                                            <p>Adotar</p>
                                        <?php } else { ?>
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
                    <span>Pets Favoritos <br> (<?php echo $favoritosResult ?>)</span>
                    <i class="fi fi-br-angle-small-right"></i>
                    <div class="bolinhas"><img src="images/informacoes/bolinhas-fav.png"></div>
                </div>

                <!-- Campanhas Favoritas -->
                <div id="fav-campanhas" class="item open-modalFavCamp">
                    <img class="icon-info" src="images/informacoes/img-camp.png">
                    <span>Campanhas Favoritas <br> (<?php echo $CampanhasResult ?>)</span>
                    <i class="fi fi-br-angle-small-right"></i>
                    <div class="bolinhas"><img src="images/informacoes/bolinhas-camp.png"></div>
                </div>

                <!-- Pets Anúncios Favoritos -->
                <div id="fav-anuncios" class="item open-modalFavAnuncios">
                    <img class="icon-info" src="images/informacoes/img-anuncios.png">
                    <span>Anúncios Favoritos <br> (<?php echo $anunciosResult ?>)</span>
                    <i class="fi fi-br-angle-small-right"></i>
                    <div class="bolinhas"><img src="images/informacoes/bolinhas-apad.png"></div>
                </div>

                <!-- Pets Adotados -->
                <div id="fav-adotados" class="item open-modalAdot">
                    <img class="icon-info" src="images/informacoes/img-adot.png">
                    <span>Pets Adotados e Apadrinhados<br> (<?php echo $adocaoResult ?>)</span>
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
                <input id="searchbar" onkeyup="search_animal()" type="search" placeholder="Pesquisar nome do pet...">
            </div>
        </div>

        <div class="area-cards-user">
            <?php while ($pet_data = mysqli_fetch_assoc($resultAnimalFavorito)) {
                $resultRaca = $mysqli->query("SELECT tbanimal.idAnimal as 'animal', tbraca.nomeRaca as 'raca' FROM tbanimal INNER JOIN tbRaca ON tbAnimal.idRaca = tbRaca.idRaca WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

                $raca = mysqli_fetch_assoc($resultRaca);

                $resultVacina = $mysqli->query("SELECT tbanimal.nomeanimal as 'animal', tbvacina.tipovacina as 'vacina' FROM tbAnimal INNER JOIN tbVacina ON tbAnimal.idVacina = tbVacina.idVacina WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

                $vacina = mysqli_fetch_assoc($resultVacina);

                $resultDoenca = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbDoenca.tipoDoenca as 'doenca' FROM tbAnimal INNER JOIN tbDoenca ON tbAnimal.idDoenca = tbDoenca.idDoenca WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

                $doenca = mysqli_fetch_assoc($resultDoenca);

                $fotoOng = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.fotoOng as 'fotoOng' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

                $foto_ong = mysqli_fetch_assoc($fotoOng);

                $nomeOng = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.nomeOng as 'nomeOng' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

                $nome_ong = mysqli_fetch_assoc($nomeOng);

                $ruaOng = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.logradouroOng as 'rua' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

                $rua_ong = mysqli_fetch_assoc($ruaOng);

                $bairroOng = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.bairroOng as 'bairro' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

                $bairro_ong = mysqli_fetch_assoc($bairroOng);

                $numOng = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.numLogOng as 'num' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

                $num_ong = mysqli_fetch_assoc($numOng);

                $cidadeOng = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.cidadeOng as 'cidade' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng WHERE tbAnimal.idAnimal = '$pet_data[idAnimal]'");

                $cidade_ong = mysqli_fetch_assoc($cidadeOng);
            ?>
                <div class="card">
                    <div class="area-foto">

                        <div class="foto">
                            <img src="<?php echo "../../ong/dashboard-ong/Cadastro/" . $pet_data['fotoPerfilAnimal'] ?>">
                        </div>
                    </div>

                    <div class="area-conteudo">
                        <div class="info">
                            <div class="nome">
                                <h3><?php echo $pet_data['nomeAnimal'] ?></h3>
                            </div>
                            <div class="icon-femea">
                                <i class="fi fi-rr-venus"></i>
                            </div>
                        </div>

                        <div class="local">
                            <i class="fi fi-sr-marker"></i>
                            <p><?php echo $rua_ong['rua'] . " N° " . $num_ong['num'] . ", " . $bairro_ong['bairro'] . ", " . $cidade_ong['cidade'] ?></p>
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

                            <div class="fechar-modal">
                                <i class="fechar fi fi-br-cross close-modal"></i>
                                <i class="seta fi fi-br-angle-small-left close-modal"></i>
                            </div>
                        </div>

                        <div class="modal-info">
                            <div class="info-pet">
                                <div class="modal-nome">
                                    <div class="foto-modal">
                                        <img src="<?php echo "../../ong/dashboard-ong/Cadastro/" . $pet_data['fotoPerfilAnimal'] ?>">
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
                                        <p><?php echo $raca['raca'] ?></p>
                                        <div class="icon-patinha">
                                            <i class="fi fi-sr-paw"></i>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <h4>Idade</h4>
                                        <p><?php echo $pet_data['idadeAnimal'] ?></p>
                                        <div class="icon-patinha">
                                            <i class="fi fi-sr-paw"></i>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <h4>Porte</h4>
                                        <p><?php echo $pet_data['porteAnimal'] ?></p>
                                        <div class="icon-patinha">
                                            <i class="fi fi-sr-paw"></i>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <h4>Espécie</h4>
                                        <p><?php echo $pet_data['especieAnimal'] ?></p>
                                        <div class="icon-patinha">
                                            <i class="fi fi-sr-paw"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="listas">
                                    <div class="vacinas">
                                        <span>Vacinas</span>
                                        <ul>
                                            <li><?php echo $vacina['vacina'] ?></li>
                                        </ul>
                                    </div>
                                    <div class="doencas">
                                        <span>Doenças</span>
                                        <ul>
                                            <li><?php echo $doenca['doenca'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="area-ong">

                                <div class="info-ong">
                                    <img src="<?php echo "../../ong/Cadastro/" . $foto_ong['fotoOng'] ?>">

                                    <div class="item-ong">
                                        <div class="nome-ong">
                                            <h3><?php echo $nome_ong['nomeOng'] ?></h3>
                                            <div class="icons icon-chat">
                                                <i class="fi fi-rr-messages icon-chat"></i>
                                            </div>
                                        </div>

                                        <div class="local">
                                            <i class="fi fi-sr-marker"></i>
                                            <p><?php echo $rua_ong['rua'] . " N° " . $num_ong['num'] . ", " . $bairro_ong['bairro'] . ", " . $cidade_ong['cidade'] ?></p>
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

                    </div>


                </div>
            <?php } ?>
        </div>


    </div>

    <!-- Modal da Tela de Pets Adotados -->
    <div class="tela-adot hide">
        <div class="modal-topo">
            <div class="fechar-modal">
                <i class="seta fi fi-br-angle-small-left close-modalAdot"></i>
            </div>

            <div class="area-pesquisa">
                <h2>Adotados e Apadrinhados</h2>
                <div class="search">
                    <i class="fi fi-br-search"></i>
                    <input id="searchbar" onkeyup="search_animal()" type="search" placeholder="Pesquisar nome do pet...">
                </div>
            </div>

            <div class="imgs-telas">
                <img src="images/tela-pets-favoritos.png">
            </div>


        </div>

        <?php while ($adocao_data = mysqli_fetch_assoc($resultPetAdotado)) { 
            $raca = $mysqli->query("SELECT tbanimal.nomeAnimal as 'animal', tbRaca.nomeRaca as 'raca' FROM tbAnimal INNER JOIN tbRaca ON tbAnimal.idRaca = tbRaca.idRaca WHERE tbAnimal.idAnimal = '$adocao_data[idAnimal]'");
            $raca_data = mysqli_fetch_assoc($raca);

            $vacina = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbVacina.tipoVacina as 'vacina' FROM tbAnimal INNER JOIN tbVacina ON tbAnimal.idVacina = tbVacina.idVacina WHERE tbAnimal.idAnimal = '$adocao_data[idAnimal]'");
            $vacina_data = mysqli_fetch_assoc($vacina);

            $doenca = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbDoenca.tipoDoenca as 'doenca' FROM tbAnimal INNER JOIN tbDoenca ON tbAnimal.idDoenca = tbDoenca.idDoenca WHERE tbAnimal.idAnimal = '$adocao_data[idAnimal]'");
            $doenca_data = mysqli_fetch_assoc($doenca);

            $foto = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.fotoOng as 'foto' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng  WHERE tbAnimal.idAnimal = '$adocao_data[idAnimal]'");
            $foto_data = mysqli_fetch_assoc($foto);

            $nome = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.nomeOng as 'nome' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng  WHERE tbAnimal.idAnimal = '$adocao_data[idAnimal]'");
            $nome_data = mysqli_fetch_assoc($nome);

            $rua = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.logradouroOng as 'rua' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng  WHERE tbAnimal.idAnimal = '$adocao_data[idAnimal]'");
            $rua_data = mysqli_fetch_assoc($rua);

            $bairro = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.bairroOng as 'bairro' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng  WHERE tbAnimal.idAnimal = '$adocao_data[idAnimal]'");
            $bairro_data = mysqli_fetch_assoc($bairro);

            $num = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.numLogOng as 'num' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng  WHERE tbAnimal.idAnimal = '$adocao_data[idAnimal]'");
            $num_data = mysqli_fetch_assoc($num);

            $cidade = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbOng.cidadeOng as 'cidade' FROM tbAnimal INNER JOIN tbOng ON tbAnimal.idOng = tbOng.idOng  WHERE tbAnimal.idAnimal = '$adocao_data[idAnimal]'");
            $cidade_data = mysqli_fetch_assoc($cidade);
        ?>
            <div class="card">
                <div class="area-foto">

                    <div class="foto">
                        <img src="<?php echo "../../ong/dashboard-ong/Cadastro/" . $adocao_data['fotoPerfilAnimal'] ?>">
                    </div>
                </div>

                <div class="area-conteudo">
                    <div class="info">
                        <div class="nome">
                            <?php if ($adocao_data['generoAnimal'] == 'Macho') { ?>
                                <h3><?php echo $adocao_data['nomeAnimal']; ?></h3>
                            <?php } elseif ($adocao_data['generoAnimal'] == 'Fêmea') { ?>
                                <h3><?php echo $adocao_data['nomeAnimal']; ?></h3>
                            <?php } ?>

                            <?php if ($adocao_data['generoAnimal'] == 'Macho') { ?>
                                <div class="icon-macho">
                                        <i class="fi fi-rr-mars"></i>
                                </div>
                            <?php } elseif ($adocao_data['generoAnimal'] == 'Fêmea') { ?>
                                <div class="icon-femea">
                                        <i class="fi fi-rr-venus"></i>
                                </div>
                            <?php } ?>
                        </div>

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
                        <div class="icon-fav">
                            <i id="heartIcon1" class="fi-rr-heart icon"></i>
                        </div>

                        <div class="fechar-modal">
                            <i class="fechar fi fi-br-cross close-modal"></i>
                            <i class="seta fi fi-br-angle-small-left close-modal"></i>
                        </div>
                    </div>

                    <div class="modal-info">
                        <div class="info-pet">
                            <div class="modal-nome">
                                <div class="foto-modal">
                                    <img src="<?php echo "../../ong/dashboard-ong/Cadastro/" . $adocao_data['fotoPerfilAnimal'] ?>">
                                </div>
                                <div class="nome-pet">
                                <?php if ($adocao_data['generoAnimal'] == 'Macho') { ?>
                                <h3><?php echo $adocao_data['nomeAnimal']; ?></h3>
                            <?php } elseif ($adocao_data['generoAnimal'] == 'Fêmea') { ?>
                                <h3><?php echo $adocao_data['nomeAnimal']; ?></h3>
                            <?php } ?>

                            <?php if ($adocao_data['generoAnimal'] == 'Macho') { ?>
                                <div class="icon-macho">
                                        <i class="fi fi-rr-mars"></i>
                                </div>
                            <?php } elseif ($adocao_data['generoAnimal'] == 'Fêmea') { ?>
                                <div class="icon-femea">
                                        <i class="fi fi-rr-venus"></i>
                                </div>
                            <?php } ?>
                                </div>
                            </div>

                            <div class="area-itens">
                                <div class="item">
                                    <h4>Raça</h4>
                                    <p><?php echo $raca_data['raca'] ?></p>
                                    <div class="icon-patinha">
                                        <i class="fi fi-sr-paw"></i>
                                    </div>
                                </div>

                                <div class="item">
                                    <h4>Idade</h4>
                                    <p><?php echo $adocao_data['idadeAnimal'] ?></p>
                                    <div class="icon-patinha">
                                        <i class="fi fi-sr-paw"></i>
                                    </div>
                                </div>

                                <div class="item">
                                    <h4>Porte</h4>
                                    <p><?php echo $adocao_data['porteAnimal'] ?></p>
                                    <div class="icon-patinha">
                                        <i class="fi fi-sr-paw"></i>
                                    </div>
                                </div>

                                <div class="item">
                                    <h4>Espécie</h4>
                                    <p><?php echo $adocao_data['especieAnimal'] ?></p>
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

                            <div class="info-ong">
                                <img src="<?php echo "../../ong/Cadastro/" . $foto_data['foto'] ?>">

                                <div class="item-ong">
                                    <div class="nome-ong">
                                        <h3><?php echo $nome_data['nome'] ?></h3>
                                        <div class="icons icon-chat">
                                            <i class="fi fi-rr-messages icon-chat"></i>
                                        </div>
                                    </div>

                                    <div class="local">
                                        <i class="fi fi-sr-marker"></i>
                                        <p><?php echo $rua_data['rua']. " N°". $num_data['num']. ", ". $bairro_data['bairro']. ", ". $cidade_data['cidade'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="area-descricao">
                                <div class="post-body">
                                    <span class="short-text">
                                        <p>
                                            <?php echo $adocao_data['descAnimal'] ?>
                                        </p>
                                        <a class="read-more">Ler mais</a>
                                    </span>
                                    <span class="full-text">
                                        <p>
                                            <?php echo $adocao_data['descAnimal'] ?>
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
                    <input id="searchbar" onkeyup="search_animal()" type="search" placeholder="Pesquisar nome do pet...">
                </div>
            </div>

            <div class="imgs-telas">
                <img src="images/tela-pets-favoritos.png">
            </div>
        </div>

        <?php while ($anuncio_data = mysqli_fetch_assoc($anuncioFavorito)) {
            $resultAnunciante = $mysqli->query("SELECT tbAnuncio.nomeAnuncio as 'anuncio', tbAnunciante.nomeAnunciante as 'nome' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '$anuncio_data[idAnuncio]'");
            $nome_anunciante = mysqli_fetch_assoc($resultAnunciante);

            $resultFoto = $mysqli->query("SELECT tbAnuncio.nomeAnuncio as 'anuncio', tbAnunciante.fotoAnunciante as 'foto' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '$anuncio_data[idAnuncio]'");
            $foto_anunciante = mysqli_fetch_assoc($resultFoto);

            $resultRua = $mysqli->query("SELECT tbAnuncio.nomeAnuncio as 'anuncio', tbAnunciante.logradouroAnunciante as 'rua' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '$anuncio_data[idAnuncio]'");
            $rua_anunciante = mysqli_fetch_assoc($resultRua);

            $resultNum = $mysqli->query("SELECT tbAnuncio.nomeAnuncio as 'anuncio', tbAnunciante.numlocalAnunciante as 'num' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '$anuncio_data[idAnuncio]'");
            $num_anunciante = mysqli_fetch_assoc($resultNum);

            $resultBairro = $mysqli->query("SELECT tbAnuncio.nomeAnuncio as 'anuncio', tbAnunciante.bairroAnunciante as 'bairro' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '$anuncio_data[idAnuncio]'");
            $bairro_anunciante = mysqli_fetch_assoc($resultBairro);

            $resultCidade = $mysqli->query("SELECT tbAnuncio.nomeAnuncio as 'anuncio', tbAnunciante.cidadeAnunciante as 'cidade' FROM tbAnuncio INNER JOIN tbAnunciante ON tbAnuncio.idAnunciante = tbAnunciante.idAnunciante WHERE tbAnuncio.idAnuncio = '$anuncio_data[idAnuncio]'");
            $cidade_anunciante = mysqli_fetch_assoc($resultCidade);

        ?>
            <div class="card">
                <div class="area-foto">
                    <div class="foto">
                        <img src="<?php echo "../../anunciante/dashboard-anunciante/Cadastro/" . $anuncio_data['fotoAnuncio'] ?>">
                    </div>
                </div>

                <div class="area-conteudo">
                    <div class="info">
                        <div class="nome">
                            <h3><?php echo $anuncio_data['nomeAnuncio'] ?> </h3>
                        </div>
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

                        <div class="fechar-modal">
                            <i class="fechar fi fi-br-cross close-modal"></i>
                            <i class="seta fi fi-br-angle-small-left close-modal"></i>
                        </div>
                    </div>

                    <div class="modal-info">
                        <div class="info-pet">
                            <div class="modal-nome">
                                <div class="foto-modal">
                                    <img src="<?php echo "../../anunciante/dashboard-anunciante/Cadastro/" . $anuncio_data['fotoAnuncio'] ?>">
                                </div>
                                <div class="nome-pet">
                                    <h3><?php echo $anuncio_data['nomeAnuncio'] ?> </h3>
                                </div>
                            </div>

                            <div class="area-itens">

                                <div class="item">
                                    <h4>Data de Início</h4>
                                    <p><?php echo $anuncio_data['dataInicioAnuncio'] ?></p>
                                    <div class="icon-patinha">
                                        <i class="fi fi-sr-paw"></i>
                                    </div>
                                </div>

                                <div class="item">
                                    <h4>Data de Termino</h4>
                                    <p><?php echo $anuncio_data['dataTerminoAnuncio'] ?></p>
                                    <div class="icon-patinha">
                                        <i class="fi fi-sr-paw"></i>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="area-ong">

                            <div class="info-ong">
                                <img src="<?php echo "../../anunciante/cadastro/" . $foto_anunciante['foto'] ?>">

                                <div class="item-ong">
                                    <div class="nome-ong">
                                        <h3><?php echo $nome_anunciante['nome'] ?></h3>
                                        <div class="icons icon-chat">
                                            <i class="fi fi-rr-messages icon-chat"></i>
                                        </div>
                                    </div>

                                    <div class="local">
                                        <i class="fi fi-sr-marker"></i>
                                        <p><?php echo $rua_anunciante['rua'] . " N°" .  $num_anunciante['num'] . ", " . $bairro_anunciante['bairro'] . ", " .  $cidade_anunciante['cidade'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        <?php } ?>

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
                    <input id="searchbar" onkeyup="search_animal()" type="search" placeholder="Pesquisar nome do pet...">
                </div>
            </div>

            <div class="imgs-telas">
                <img src="images/tela-pets-favoritos.png">
            </div>
        </div>

        <div class="area-cards-user">
            <?php while ($campanha_data = mysqli_fetch_assoc($resultCampanhaFavorita)) {
                $fotoOng = $mysqli->query("SELECT tbcampanha.nomecampanha as 'campanha', tbOng.fotoOng as 'foto' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '$campanha_data[idCampanha]'");

                $foto = mysqli_fetch_assoc($fotoOng);

                $nomeong = $mysqli->query("SELECT tbcampanha.nomecampanha as 'campanha', tbOng.nomeOng as 'nome' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '$campanha_data[idCampanha]'");

                $nome_ong = mysqli_fetch_assoc($nomeong);

                $ruaOng = $mysqli->query("SELECT tbcampanha.nomecampanha as 'campanha', tbong.logradouroOng as 'rua' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '$campanha_data[idCampanha]'");
                $rua_ong = mysqli_fetch_assoc($ruaOng);

                $numOng = $mysqli->query("SELECT tbcampanha.nomecampanha as 'campanha', tbong.numLogOng as 'num' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '$campanha_data[idCampanha]'");
                $num_ong = mysqli_fetch_assoc($numOng);

                $bairroOng = $mysqli->query("SELECT tbcampanha.nomecampanha as 'campanha', tbong.bairroOng as 'bairro' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '$campanha_data[idCampanha]'");
                $bairro_ong = mysqli_fetch_assoc($bairroOng);

                $cidadeOng = $mysqli->query("SELECT tbcampanha.nomecampanha as 'campanha', tbong.cidadeOng as 'cidade' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbCampanha.idCampanha = '$campanha_data[idCampanha]'");
                $cidade_ong = mysqli_fetch_assoc($cidadeOng);
            ?>
                <div class="card">
                    <div class="area-foto">

                        <div class="foto">
                            <img src="<?php echo "../../ong/dashboard-ong/Cadastro/"  .   $campanha_data['fotoPerfilCampanha']; ?>">

                        </div>
                    </div>

                    <div class="area-conteudo">
                        <div class="info">
                            <div class="nome">
                                <h3><?php echo $campanha_data['nomeCampanha'] ?></h3>
                            </div>

                        </div>

                        <div class="local">
                            <i class="fi fi-sr-marker"></i>
                            <p><?php echo $campanha_data['logradouroCampanha'] . " N° " . $campanha_data['numLocalCampanha'] . ", " . $campanha_data['bairroCampanha'] . ", " . $campanha_data['cidadeCampanha'] ?></p>
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
                            <div class="icon-fav">
                                <i id="heartIcon1" class="fi-rr-heart icon"></i>
                            </div>

                            <div class="fechar-modal">
                                <i class="fechar fi fi-br-cross close-modal"></i>
                                <i class="seta fi fi-br-angle-small-left close-modal"></i>
                            </div>
                        </div>

                        <div class="modal-info">
                            <div class="info-pet">
                                <div class="modal-nome">
                                    <div class="foto-modal">
                                        <img src="<?php echo "../../ong/dashboard-ong/Cadastro/"  .   $campanha_data['fotoPerfilCampanha']; ?>">
                                    </div>
                                    <div class="nome-pet">
                                        <h3><?php echo $campanha_data['nomeCampanha'] ?></h3>
                                    </div>
                                </div>

                                <div class="area-itens">

                                    <div class="item">
                                        <h4>Dia</h4>
                                        <p><?php echo $campanha_data['dataBrasileira'] ?></p>
                                        <div class="icon-patinha">
                                            <i class="fi fi-sr-paw"></i>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <h4>Horário</h4>
                                        <p><?php echo $campanha_data['horarioCampanha'] ?></p>
                                        <div class="icon-patinha">
                                            <i class="fi fi-sr-paw"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="listas">
                                    <div class="vacinas">
                                        <span>Endereço</span>
                                        <ul>
                                            <p><?php echo $campanha_data['logradouroCampanha'] . " N°" . $campanha_data['numLocalCampanha'] . ", " . $campanha_data['bairroCampanha'] . ", " . $campanha_data['cidadeCampanha'] ?></p>
                                        </ul>
                                    </div>
                                    <div class="doencas">
                                        <span>CEP</span>
                                        <ul>
                                            <p><?php echo $campanha_data['cepCampanha'] ?></p>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="area-ong">

                                <div class="info-ong">
                                    <img src="<?php echo "../../ong/Cadastro/" . $foto['foto'] ?>">

                                    <div class="item-ong">
                                        <div class="nome-ong">
                                            <h3><?php echo $nome_ong['nome'] ?></h3>
                                            <div class="icons icon-chat">
                                                <i class="fi fi-rr-messages icon-chat"></i>
                                            </div>
                                        </div>

                                        <div class="local">
                                            <i class="fi fi-sr-marker"></i>
                                            <p><?php echo $rua_ong['rua'] . " N°" . $num_ong['num'] . ", " . $bairro_ong['bairro'] . ", " . $cidade_ong['cidade'] ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="area-descricao">
                                    <div class="post-body">
                                        <span class="short-text">
                                            <p>
                                                <?php echo $campanha_data['informacaoCampanha'] ?>
                                            </p>
                                            <a class="read-more">Ler mais</a>
                                        </span>
                                        <span class="full-text">
                                            <p>
                                                <?php echo $campanha_data['informacaoCampanha'] ?>
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
                    <input id="searchbar" onkeyup="search_animal()" type="search" placeholder="Pesquisar nome do pet...">
                </div>
            </div>

            <div class="imgs-telas">
                <img src="images/tela-pets-favoritos.png">
            </div>
        </div>

    </div>


    <!-- Sugestões e Categorias -->


    <!-- Links JS -->
    <script src="js/script.js"></script>
    <script src="js/modais.js"></script>

</body>

</html>