<?php
    include('protect.php');
    include('./config/config.php');

    if (isset($_GET[1]))
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Dashboard da ONG</title>
        <link rel="icon" href="images/logo-azul.png">

        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" href="css/cadastro.css">
        <link rel="stylesheet" href="css/cards.css">
        <link rel="stylesheet" href="css/modais.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <body>     
        <div class="container">
            <!-- Menu Lateral -->
            <?php require "menu-lateral.php"; ?>

            <div class="main">
                <div class="topbar">
                    <div class="img-pag">
                        <img src="images/pag-pets.png">
                    </div>

                    <div class="titulo-pagina">
                        <span>Pets</span>
                    </div>

                    <div class="img-logo">
                        <a href="../../index.php"><img src="images/logo-azul.png" alt=""></a>
                    </div>
                </div>

                <br>

                <form action="./Cadastro/cadastro.php" enctype="multipart/form-data" method="POST">
                    <div class="sub-titulo">
                        <span>Cadastro do Pet</span>
                    </div>

                    <div class="area-cadastro">
                        <div class="area-campos">
                            <div class="campos">
                                <div class="coluna">
                                    <div class="area-campo-radio">
                                        <p class="titulo-campo">Espécie do Pet:</p>
                                        <div class="campos-radio">
                                            <div class="radio-op">
                                                <input type="radio" name="especie" value="opCachorro" id="tipo-dog"/>
                                                <label for="tipo-dog">Cachorro</label>
                                            </div>
                                            <div class="radio-op">
                                                <input type="radio" name="especie" value="opGato" id="tipo-cat"/>
                                                <label for="tipo-cat">Gato</label>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="campo">
                                        <input type="text" placeholder="Nome do Pet:" required name="nome"/>
                                    </div>

                                    <br>

                                    <div class="campo">
                                        <?php $sql = mysqli_query($mysqli, "SELECT idRaca, nomeRaca FROM tbRaca"); ?>
                                        <select class="select-btn" required name="raca" id="raca">
                                            <option value="" disabled selected>Raça:</option>
                                            <?php
                                                while ($resultado = mysqli_fetch_array($sql)) {
                                                    echo "<option value='" . $resultado['idRaca'] . "' name='raca'>"  . $resultado['nomeRaca'] . "</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <br>

                                    <div class="campo">
                                        <?php $sql = mysqli_query($mysqli, "SELECT idVacina, tipoVacina FROM tbVacina"); ?>
                                        <select class="select-btn" required name="vacina" id="vacina">
                                            <option value="" disabled selected>Vacinas:</option>
                                            <?php
                                                while ($resultado = mysqli_fetch_array($sql)) {
                                                    echo "<option value='" . $resultado['idVacina'] . "' name='vacina'>"  . $resultado['tipoVacina'] . "</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="coluna">
                                    <div class="area-campo-radio">
                                        <p class="titulo-campo">Gênero do Pet:</p>
                                        <div class="campos-radio">
                                            <div class="radio-op">
                                                <input type="radio" name="genero" value="femea" id="tipo-fem" />
                                                <label for="tipo-fem">Fêmea</label>
                                            </div>
                                            <div class="radio-op">
                                                <input type="radio" name="genero" value="macho" id="tipo-mach" />
                                                <label for="tipo-mach">Macho</label>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div id="selectPorte" class="campo">
                                        <select class="select-btn" required name="porte" id="porte">
                                            <option value="" disabled selected>Porte:</option>
                                            <option value="opPequeno" name="porte">Pequeno</option>
                                            <option value="opMedio" name="porte">Médio</option>
                                            <option value="opGrande" name="porte">Grande</option>
                                        </select>
                                    </div>

                                    <br>

                                    <div id="selectIdade" class="campo">
                                        <select class="select-btn" name="idade" id="idade">
                                            <option class="option-campo" value="" disabled selected>Idade:</option>
                                            <option value="opFilhote" name="idade">Filhote (Menos de 1 ano)</option>
                                            <option value="opAdulto" name="idade">Adulto (Entre 1 e 3 anos)</option>
                                            <option value="opAdulto2" name="idade">Adulto (Entre 3 e 5 anos)</option>
                                            <option value="opIdoso" name="idade">Idoso (Mais de 5 anos)</option>
                                        </select>
                                    </div>

                                    <br>

                                    <div class="campo">
                                        <?php $sql = mysqli_query($mysqli, "SELECT idDoenca, tipoDoenca FROM tbDoenca"); ?>
                                        <select class="select-btn" name="doenca" id="doenca">
                                            <option value="" disabled selected>Doenças:</option>
                                            <?php
                                            while ($resultado = mysqli_fetch_array($sql)) {
                                                echo "<option value='" . $resultado['idDoenca'] . "' name='doenca'>"  . $resultado['tipoDoenca'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Descrição" required name="descricao"></textarea>
                            </div>

                            <div class="area-botao">
                                <input type="submit" value="Cadastrar" name="cadastrar" class="botao-cadastrar" />
                            </div>

                        </div>

                        <div id="area-foto" class="coluna">
                            <div class="imageContainer">
                                <img src="images/img-pets/select-img.png" alt="selecionar foto" id="imgPhoto">
                                <input type="file" id="flImage" name="image" accept="image/*">
                            </div>
                            <p class="titulo-foto">Foto do Pet</p>

                            <div class="area-add-fotos">
                                <div class="titulo-add">
                                    <p>Adicione outras fotos do pet (opcional)</p>
                                    <i id="photos" class="fi fi-sr-images"></i>
                                    <input type="file" id="filesImgs" multiple accept="image/*" multiple onchange="handleFileSelect(event)" name="opcional[]" multiple>
                                </div>
                                <div class="galeria"></div>
                            </div>
                        </div>

                    </div>

                </form>

                <br>

                <section class="table__header">
                    <div class="sub-titulo">
                        <span>Pets Cadastrados</span>
                    </div>

                    <div class="input-group">
                        <input id="searchbar" onkeyup="search_animal()" type="search"   placeholder="Pesquisar nome do pet...">
                        <i class="bi bi-search"></i>
                    </div>

                    <div class="area-icons">
                        <div id="icon-cards">
                            <i class="fi fi-sr-apps"></i>
                        </div>
                        <div id="icon-tabela">
                            <i class="fi fi-br-list"></i>
                        </div>
                    </div>
                </section>

                <!-- PETS CADASTRADOS -->
                <div class="consulta">
                    <div id="area-cards">
                        <?php
                        while ($user_data = mysqli_fetch_assoc($result) and $raca_data = mysqli_fetch_assoc($resultRaca) and $vacData = mysqli_fetch_assoc($resultVac) and $doenca_data = mysqli_fetch_assoc($resultDoenca)) {

                            $resultFoto = $mysqli->query("SELECT * FROM tbFotoAnimal WHERE idAnimal = '$user_data[idAnimal]'") or die($mysqli->error);
                            $foto_data = mysqli_fetch_assoc($resultFoto);

                            $sexo = $user_data['generoAnimal'];
                        ?>
                            <div class="card">
                                <div class="foto">
                                    <img src="<?php echo "cadastro/" . $user_data['fotoPerfilAnimal']; ?>">
                                </div>

                                <div class="area-conteudo">
                                    <div class="dados">
                                        <div class="info">
                                            <div class="nome">

                                                <?php if ($user_data['generoAnimal'] == 'Macho') { ?>
                                                    <h3><?php echo $user_data['nomeAnimal']; ?></h3>
                                                <?php } elseif ($user_data['generoAnimal'] == 'Fêmea') { ?>
                                                    <h3 style="color: #FC0FC0;"><?php echo $user_data['nomeAnimal']; ?></h3>
                                                <?php } ?>

                                                <?php if ($user_data['generoAnimal'] == 'Macho') { ?>
                                                    <i class="fi fi-rr-mars"></i>
                                                <?php } elseif ($user_data['generoAnimal'] == 'Fêmea') { ?>
                                                    <i style="color: #FC0FC0;" class="fi fi-rr-venus"></i>
                                                <?php } ?>
                                            </div>
                                            <div class="raca-card">
                                                <span>Raça: <span>
                                                        <p><?php echo $raca_data['nome_raca']; ?></p>
                                            </div>
                                        </div>
                                        <div class="area-botoes">
                                            <button class="open-modal btn-editar" name="editar" data-idanimal="<?php echo $user_data['idAnimal']; ?>"><i class="fi fi-br-edit"></i></button>
                                            <button class="open-modalExcluir btn-excluir" name="excluir"><i class="fi fi-sr-trash"></i></button>
                                        </div>
                                    </div>

                                    <div class="area-btn-modal">
                                        <button style="border: none;" class="open-modalVer botao-modal" data-animalid="<?php echo $user_data['idAnimal']; ?>">
                                            <p>Ver Mais</p>
                                            <i class="fi fi-br-angle-small-right"></i>
                                        </button>

                                    </div>
                                </div>

                            </div>


                            <!-- Modal Alterar -->
                            <div class="fade hide" id="fade"></div>
                            <div class="modal hide" id="modalEdit-<?php echo $user_data['idAnimal']; ?>">
                                <div class="modal-header">
                                    <div class="detalhe-modal">
                                        <img src="images/pag-pets.png" alt="">
                                    </div>

                                    <div class="titulo-modal">
                                        <span>Alterar Dados do Pet</span>
                                    </div>

                                    <i class="fi fi-br-cross close-modal"></i>
                                </div>

                                <div class="conteudo-modal area-modal-edit">

                                    <div class="modal-body1">
                                        <form action="cadastro/editar.php" enctype="multipart/form-data" method="POST">
                                            <div class="area-foto">
                                                <div class="imageContainer">
                                                    <input type="hidden" value="<?php echo $user_data['fotoPerfilAnimal']; ?>" name="foto" id="">
                                                    <img src="<?php echo "cadastro/" . $user_data['fotoPerfilAnimal']; ?>" alt="Alterar foto" id="imgPhoto2" class="imgPhoto">
                                                    <input type="file" id="flImage2" name="image" class="flImage" accept="image/*">
                                                </div>
                                            </div>

                                            <div class="area-add-fotos">
                                                <div class="titulo-add">
                                                    <p>Adicione ou exclua fotos do pet</p>
                                                    <i id="photos" class="fi fi-sr-images"></i>
                                                    <input type="file" id="filesImgs" multiple accept="image/*" onchange="handleFileSelect(event)">
                                                </div>
                                                <div class="galeria">
                                                    <img src="<?php echo "cadastro/" . $foto_data['fotosAnimal']; ?>">
                                                </div>
                                            </div>

                                            <div class="area-botoes-modal">
                                                <button type="submit" name="update" class="botao-modal2">Salvar</button>
                                            </div>

                                    </div>

                                    <div class="modal-body2">

                                        <div class="titulo-info">
                                            <span>Informações</span>
                                            <i class="fi fi-rr-file-circle-info"></i>
                                        </div>


                                        <div class="area-form">
                                            <div class="input-field">
                                                <label>Nome do Pet</label>
                                                <input type="text" value="<?php echo $user_data['nomeAnimal']; ?>" required name="nome" />
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <span class="sBtn-text">Porte</span>
                                                <div class="select-btn">
                                                    <select style="    font-family: Poppins;
                                                            color: #8A8A8A;
                                                            font-size: 2.5vh;
                                                            border:none;
                                                            -webkit-appearance: none;
                                                            -moz-appearance: none;
                                                            text-indent: 1px;
                                                            text-overflow: '';
                                                            width: 17.1vw;" required name="porte" id="porte">
                                                        <option style="color: black;" value="opExistente" selected><?php echo $user_data['porteAnimal'] ?></option>
                                                        <option style="color: black;" value="opPequeno" name="porte" <?php echo ($user_data['porteAnimal'] == 'Pequeno') ? 'selected' : '' ?>>Pequeno</option>
                                                        <option style="color: black;" value="opMedio" name="porte" <?php echo ($user_data['porteAnimal'] == 'Médio') ? 'selected' : '' ?>>Médio</option>
                                                        <option style="color: black;" value="opGrande" name="porte" <?php echo ($user_data['porteAnimal'] == 'Grande') ? 'selected' : '' ?>>Grande</option>
                                                    </select>
                                                    <i class="fi fi-rr-angle-small-down"></i>
                                                </div>
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <span class="sBtn-text">Vacinas</span>
                                                <div class="select-btn"><?php
                                                                        $valorPadrao = $vacData['vacina'];
                                                                        $sql = mysqli_query($mysqli, "SELECT idVacina, tipoVacina FROM tbVacina");
                                                                        ?>
                                                    <select style="    font-family: Poppins;
                                                            color: #8A8A8A;
                                                            font-size: 2.5vh;
                                                            border:none;
                                                            -webkit-appearance: none;
                                                            -moz-appearance: none;
                                                            text-indent: 1px;
                                                            text-overflow: '';
                                                            width: 17.1vw;" class="select-btn" name="vacina" id="vacina">
                                                        <?php
                                                        while ($resultado = mysqli_fetch_array($sql)) {
                                                            $selected = ($resultado['tipoVacina'] == $vacData['vacina']) ? 'selected' : '';
                                                            echo "<option style='color: black;' value='" . $resultado['idVacina'] . "' name='vacina' $selected>" . $resultado['tipoVacina'] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                    <i class="fi fi-rr-angle-small-down"></i>
                                                </div>
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <span class="sBtn-text">Doenças</span>
                                                <div class="select-btn"><?php
                                                                        $valorPadrao = $doenca_data['doenca'];
                                                                        $sql = mysqli_query($mysqli, "SELECT idDoenca, tipoDoenca FROM tbDoenca");
                                                                        ?>

                                                    <select style="font-family: Poppins;
                                                        color: #8A8A8A;
                                                        font-size: 2.5vh;
                                                        border:none;
                                                        -webkit-appearance: none;
                                                        -moz-appearance: none;
                                                        text-indent: 1px;
                                                        text-overflow: '';
                                                        width: 14vw;" class="select-btn" name="doenca" id="doenca">
                                                        <?php
                                                        while ($resultado = mysqli_fetch_array($sql)) {
                                                            $selected = ($resultado['tipoDoenca'] == $doenca_data['doenca']) ? 'selected' : '';
                                                            echo "<option style='color: black;' value='" . $resultado['idDoenca'] . "' name='doenca' $selected>" . $resultado['tipoDoenca'] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                    <i class="fi fi-rr-angle-small-down"></i>
                                                </div>
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <span class="sBtn-text">Idade</span>
                                                <div class="select-btn">
                                                    <select style="    font-family: Poppins;
                                                            color: #8A8A8A;
                                                            font-size: 2.5vh;
                                                            border:none;
                                                            -webkit-appearance: none;
                                                            -moz-appearance: none;
                                                            text-indent: 1px;
                                                            text-overflow: '';
                                                            width: 13.9vw;" class="select-btn" name="idade" id="idade">
                                                        <option style='color: black;' value="opExistente" selected><?php echo $user_data['idadeAnimal'] ?></option>
                                                        <option style='color: black;' value="opFilhote" name="idade" <?php echo ($user_data['idadeAnimal'] == 'Filhote (Menos de 1 ano)') ? 'selected' : '' ?>>Filhote (Menos de 1 ano)</option>
                                                        <option style='color: black;' value="opAdulto" name="idade" <?php echo ($user_data['idadeAnimal'] == 'Adulto (Entre 1 e 3 anos)') ? 'selected' : '' ?>>Adulto (Entre 1 e 3 anos)</option>
                                                        <option style='color: black;' value="opAdulto2" name="idade" <?php echo ($user_data['idadeAnimal'] == 'Adulto (Entre 3 e 5 anos)') ? 'selected' : '' ?>>Adulto (Entre 3 e 5 anos)</option>
                                                        <option style='color: black;' value="opIdoso" name="idade" <?php echo ($user_data['idadeAnimal'] == 'Idoso (Mais de 5 anos)') ? 'selected' : '' ?>>Idoso (Mais de 5 anos)</option>
                                                    </select>
                                                    <i class="fi fi-rr-angle-small-down"></i>
                                                </div>
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <span class="sBtn-text">Raça</span>
                                                <div class="select-btn"><?php
                                                                        $valorPadrao = $raca_data['nome_raca'];
                                                                        $sql = mysqli_query($mysqli, "SELECT idRaca, nomeRaca FROM tbRaca");
                                                                        ?>
                                                    <select style="    font-family: Poppins;
                                                            color: #8A8A8A;
                                                            font-size: 2.5vh;
                                                            border:none;
                                                            -webkit-appearance: none;
                                                            -moz-appearance: none;
                                                            text-indent: 1px;
                                                            text-overflow: '';
                                                            width: 13.9vw;" class="select-btn" required name="raca" id="raca">
                                                        <option value="opRaca" selected><?php echo $raca_data['nome_raca'] ?></option>
                                                        <?php
                                                        while ($resultado = mysqli_fetch_array($sql)) {
                                                            $selected = ($resultado['nomeRaca'] == $raca_data['nome_raca']) ? 'selected' : '';
                                                            echo "<option style='color: black;' value='" . $resultado['idRaca'] . "' name='raca' $selected>" . $resultado['nomeRaca'] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                    <i class="fi fi-rr-angle-small-down"></i>
                                                </div>
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field input-desc">
                                                <label>Descrição</label>
                                                <input type="text" name="descricao" id="descpet" value="<?php echo $user_data['descAnimal'] ?>">
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <label>Espécie</label>
                                                <div class="campos-radio">
                                                    <div class="radio-op">
                                                        <input type="radio" name="especie" value="opCachorro" id="tipo-dog" <?php echo ($user_data['especieAnimal'] == 'Cachorro') ? 'checked' : '' ?> />
                                                        <label for="tipo-dog">Cachorro</label>
                                                    </div>
                                                    <div class="radio-op">
                                                        <input type="radio" name="especie" value="opGato" id="tipo-cat" <?php echo ($user_data['especieAnimal'] == 'Gato') ? 'checked' : '' ?> />
                                                        <label for="tipo-cat">Gato</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-field">
                                                <label>Gênero</label>
                                                <div class="campos-radio">
                                                    <div class="radio-op">
                                                        <input type="radio" name="genero" value="femea" id="tipo-fem" <?php echo ($user_data['generoAnimal'] == 'Fêmea') ? 'checked' : '' ?> />
                                                        <label for="tipo-fem">Fêmea</label>
                                                    </div>
                                                    <div class="radio-op">
                                                        <input type="radio" name="genero" value="macho" id="tipo-mach" <?php echo ($user_data['generoAnimal'] == 'Macho') ? 'checked' : '' ?> />
                                                        <label for="tipo-mach">Macho</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="id" value="<?php echo $user_data['idAnimal'] ?>">

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Excluir -->
                            <div class="fadeExcluir hide"></div>
                            <div class="modalExcluir hide">
                                <div class="modal-header">
                                    <i class="fi fi-br-cross close-modalExcluir"></i>
                                </div>

                                <div class="area-modal">

                                    <div class="modal-body">
                                        <div class="area-foto">
                                            <img src="images/img-excluir.png" alt="">
                                        </div>
                                    </div>

                                    <div class="excluir-info">
                                        <p>Deseja excluir o pet <span><?php echo $user_data['nomeAnimal']; ?></span> permanentemente?</p>
                                    </div>

                                    <div class="area-botoesExcluir">
                                        <button class="close-modalExcluir botao-modalExc">Cancelar</button>
                                        <a style="text-decoration: none ;" href="Cadastro/delete.php?id=<?php echo $user_data['idAnimal']; ?>">
                                            <button class="botao-modalExc2">Excluir</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Ver Mais -->
                            <div class="modal-fade hide" id="modal-fade"></div>
                            <div class="modalVer hide" id="modal-<?php echo $user_data['idAnimal']; ?>">

                                <div class="modal-header">
                                    <div class="detalhe-modal">
                                        <img src="images/pag-pets.png">
                                    </div>

                                    <i class="fi fi-br-cross close-modal"></i>
                                </div>

                                <div class="area-modal-ver">
                                <div class="area-modal">
                                    <div class="area-foto-pet modal-body1">
                                        <div class="area-foto foto-modal-ver">
                                            <img src="<?php echo "cadastro/" . $user_data['fotoPerfilAnimal']; ?>" alt="selecionar foto" id="imgPhotoVer">
                                        </div>

                                        <div class="nome-pet">
                                            <span>Pet</span>
                                            <p><?php echo $user_data['nomeAnimal'] ?></p>
                                        </div>
                                    </div>

                                    <div class="modal-pet">
                                        <div class="titulo-pet">
                                            <span>Informações</span>
                                            <i class="fi fi-rr-file-circle-info"></i>
                                        </div>

                                        <div class="conteudo-pet">
                                            <div class="campo-pet">
                                                <span>Espécie de Pet</span>
                                                <p><?php echo $user_data['especieAnimal'] ?></p>
                                            </div>

                                            <div class="campo-pet">
                                                <span>Raça</span>
                                                <p><?php echo $raca_data['nome_raca'] ?></p>
                                            </div>

                                            <div class="campo-pet">
                                                <span>Gênero</span>
                                                <div>
                                                    <p><?php echo $user_data['generoAnimal'] ?>
                                                        <?php if ($user_data['generoAnimal'] == 'Macho') { ?>
                                                            <i class="fi fi-rr-mars"></i>
                                                        <?php } elseif ($user_data['generoAnimal'] == 'Fêmea') { ?>
                                                            <i style="color: #FC0FC0;" class="fi fi-rr-venus"></i>
                                                        <?php } ?>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="campo-pet">
                                                <span>Porte</span>
                                                <p><?php echo $user_data['porteAnimal'] ?></p>
                                            </div>

                                            <div class="campo-pet">
                                                <span>Idade</span>
                                                <p><?php echo $user_data['idadeAnimal'] ?></p>
                                            </div>
                                        </div>

                                        <div class="area-add-fotos">
                                            <div class="titulo-add">
                                                <p>Galeria de Fotos do Pet</p>
                                                <i class="fi fi-rr-gallery"></i>
                                            </div>
                                            <div class="galeria">
                                                <img src="<?php echo "cadastro/" . $foto_data['fotosAnimal']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="area-modal">
                                    <div class="modal-body2">
                                        <div class="conteudo-info">
                                            <div class="campo-info">
                                                <div class="subtitulo">
                                                    <span>Doenças</span>
                                                    <i class="fi fi-ss-virus"></i>
                                                </div>
                                                <ul>
                                                    <li><?php echo $doenca_data['doenca'] ?></li>
                                                </ul>
                                            </div>

                                            <div class="campo-info">
                                                <div class="subtitulo">
                                                    <span>Vacinas</span>
                                                    <i class="fi fi-ss-syringe"></i>
                                                </div>
                                                <ul>
                                                    <li><?php echo $vacData['vacina'] ?></li>
                                                </ul>
                                            </div>

                                            <br>

                                            <div class="campo-info">
                                                <div class="subtitulo">
                                                    <span>Descrição</span>
                                                    <i class="fi fi-sr-document-signed"></i>
                                                </div>
                                                <div class="area-descricao">
                                                    <span class="short-text">
                                                        <p><?php echo $user_data['descAnimal'] ?>
                                                            <br>
                                                            <a class="read-more">Ler mais</a>
                                                        </p>
                                                    </span>
                                                    <span class="full-text">
                                                        <p>
                                                            <?php echo $user_data['descAnimal'] ?>
                                                            <a class="read-less">Ler menos</a>
                                                        </p>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>


                            </div>
                        <?php } ?>


                    </div>

                    <br><br>

                <div id="area-tabela">

                    <table>
                        <thead>
                            <tr>
                                <th>Foto de Perfil</th>
                                <th>Nome do Pet</th>
                                <th>Raça</th>
                                <th>Informações</th>
                                <th>Alterações</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while ($user_data = mysqli_fetch_assoc($result) and $raca_data = mysqli_fetch_assoc($resultRaca) and $vacData = mysqli_fetch_assoc($resultVac) and $doenca_data = mysqli_fetch_assoc($resultDoenca)) {

                                $resultFoto = $mysqli->query("SELECT * FROM tbFotoAnimal WHERE idAnimal = '$user_data[idAnimal]'") or die($mysqli->error);
                                $foto_data = mysqli_fetch_assoc($resultFoto);
                            ?>
                                <tr>
                                    <td><img src="<?php echo "cadastro/" . $user_data['fotoPerfilAnimal']; ?>"></td>
                                    <td>
                                        <div class="nome">
                                            <?php if ($user_data['descAnimal'] == 'Macho') { ?>
                                                <h3><?php echo $user_data['nomeAnimal']; ?></h3>
                                            <?php } elseif ($user_data['descAnimal'] == 'Fêmea') { ?>
                                                <h3 style="color: #FC0FC0;"><?php echo $user_data['nomeAnimal']; ?></h3>
                                            <?php } ?>

                                            <?php if ($user_data['descAnimal'] == 'Macho') { ?>
                                                <i class="fi fi-rr-mars"></i>
                                            <?php } elseif ($user_data['descAnimal'] == 'Fêmea') { ?>
                                                <i style="color: #FC0FC0;" class="fi fi-rr-venus"></i>
                                            <?php } ?>
                                        </div>
                </div>
                </td>
                <td>
                    <div class="raca">
                        <p><?php echo $raca_data['nome_raca'] ?></p>
                    </div>
                </td>
                <td>
                    <div class="area-btn-modal">
                        <button style="border: none;" class="open-modalVer botao-modal" data-animalid="<?php echo $user_data['idAnimal']; ?>">
                            <p>Ver Mais</p>
                            <div class="icon-btn">
                                <i class="fi fi-br-angle-small-right"></i>
                            </div>
                        </button>
                    </div>
                </td>
                <td>
                    <button class="open-modal btn-editar" name="editar"><i class="fi fi-br-edit"></i></button>
                    <button class="open-modalExcluir btn-excluir" name="excluir"><i class="fi fi-sr-trash"></i></button>
                </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>



            </div>

        </div>
    </div>

    <!-- Link JS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="js/script.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/search.js"></script>
    <script src="js/descricao.js"></script>

    <script src="js/tabela.js"></script>
    <script src="js/modal.js" defer></script>

</body>

</html>
