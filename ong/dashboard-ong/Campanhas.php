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

    <!-- Links CSS -->
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/modais-camp.css">
</head>
<body>
    <div class="container">
        <!-- Menu Fixo Lateral -->
        <?php require "menu-lateral.php"; ?>

        <!-- CADASTRO DE CAMPANHAS -->
        <div class="main">

            <div class="topbar">
                <div class="img-pag">
                    <img src="images/pag-campanhas.png">
                </div>

                <div class="titulo-pagina">
                    <span>Campanhas</span>
                </div>

                <div class="img-logo">
                    <a href="../../index.php"><img src="images/logo-azul.png" alt=""></a>
                </div>
            </div>

            <br>

            <form action="./Cadastro/cadastro-campanha.php" enctype="multipart/form-data" method="POST">

                <div class="sub-titulo">
                    <span>Cadastro da Campanha</span>
                </div>

                <div id="area-campanha" class="area-cadastro">
                    <div class="area-campos">
                        <div class="campos">

                            <!-- PRIMEIRA COLUNA -->
                            <div id='coluna-campos' class="coluna">
                                <br>
                                <div class="campo">
                                    <input type="text" placeholder="Nome da Campanha" required name="nome" />
                                </div>
                                <br>
                                <div class="campo">
                                    <input type="date" placeholder="Data" required name="data" />
                                </div>
                                <br>
                                <div class="campo">
                                    <input type="time" placeholder="Horário" required name="horario" />
                                </div>

                                <br>
                                <div class="campo">
                                    <input type="text" placeholder="CEP" id="cep" onblur="pesquisacep(this.value);" onkeyup="formatCEP(this)" maxlength="9" required name="cep" />
                                </div>
                                <br>
                                <div class="campo">
                                    <input type="text" placeholder="Estado" id="uf" name="estado" />
                                </div>
                                <br>
                            </div>

                            <!-- SEGUNDA COLUNA -->
                            <div class="coluna">
                                <br>
                                <div class="campo">
                                    <input type="text" placeholder="Cidade" id="cidade" required name="cidade" />
                                </div>
                                <br>
                                <div class="campo">
                                    <input type="text" placeholder="Bairro" id="bairro" required name="bairro" />
                                </div>
                                <br>

                                <div class="campo">
                                    <input type="text" placeholder="Logradouro" id="rua" required name="logradouro" />
                                </div>
                                <br>

                                <div class="campo">
                                    <input type="text" placeholder="Número" required name="numero" />
                                </div>
                                <br>

                                <div class="campo">
                                    <input type="text" placeholder="Complemento" name="complemento" />
                                </div>
                                <br>

                            </div>
                        </div>

                        <div class="area-botao">
                            <input type="submit" value="Cadastrar" class="botao-cadastrar" />
                        </div>

                    </div>



                    <!-- AREA DE CADASTRAR IMAGEM -->
                    <div id="area-foto" class="coluna">
                        <div class="imageContainer">
                            <img src="images/add-campanha.png" alt="selecionar foto" id="imgPhoto">
                            <input type="file" id="flImage" name="image" accept="image/*">
                        </div>
                        <p class="titulo-foto">Foto da Campanha</p>

                        <br>

                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Descrição" required name="descricao"></textarea>
                        </div>
                        <!--
                        <div class="area-add-fotos">
                            <div class="titulo-add">
                                <p>Adicione outras fotos da campanha (opcional)</p>
                                <i id="photos" class="fi fi-sr-images"></i>
                                <input type="file" id="filesImgs" multiple accept="image/*" multiple onchange="handleFileSelect(event)" name="opcional[]" multiple>
                            </div>
                            <div class="galeria"></div>
                        </div>
                        -->
                    </div>

                </div>

            </form>

            <br>

            <section class="table__header">
                <div class="sub-titulo">
                    <span>Campanhas Cadastradas</span>
                </div>

                <div class="input-group">
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquisar...">
                    <i class="bi bi-search" style="color: black;"></i>
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

            <!-- CAMPANHAS CADASTRADAS -->
            <div class="consulta">
                <div id="area-cards">
                    <?php while ($user_data = mysqli_fetch_assoc($resultCamp)) {

                    ?>
                        <div class="card">
                            <div class="foto">
                                <img src="<?php echo "cadastro/" . $user_data['fotoPerfilCampanha']; ?>">
                            </div>

                            <div class="area-conteudo">
                                <div class="dados">
                                    <div class="info">
                                        <div class="nome">
                                            <h3><?php echo $user_data['nomeCampanha']; ?></h3>
                                        </div>
                                        <div>
                                            <span>Descrição: <span>
                                                    <p><?php echo $user_data['informacaoCampanha']; ?></p>
                                        </div>
                                    </div>
                                    <div class="area-botoes">
                                        <button class="open-modal btn-editar" name="editar" data-idEdit="<?php echo $user_data['idCampanha']; ?>"><i class="fi fi-br-edit"></i></button>
                                        <button class="open-modalExcluir btn-excluir" name="excluir"><i class="fi fi-sr-trash"></i></button>
                                    </div>
                                </div>

                                <div class="area-btn-modal">
                                    <div class="open-modalCam botao-modal" data-id="<?php echo $user_data['idCampanha']; ?>">
                                        <p>Ver Mais</p>
                                        <i class="fi fi-br-angle-small-right"></i>
                                    </div>
                                </div>
                            </div>



                            <!-- Modal Alterar -->
                            <div class="fade hide" id="fade"></div>
                            <div class="editar modal hide" id="modalEdit-<?php echo $user_data['idCampanha']; ?>">

                                <div class="modal-header">
                                    <div class="detalhe-modal">
                                        <img src="images/pag-campanhas.png" alt="">
                                    </div>

                                    <div class="titulo-modal">
                                        <span>Alterar Dados da Campanha</span>
                                    </div>

                                    <i class="fi fi-br-cross close-modal"></i>
                                </div>
                                <form action="cadastro/editarCampanha.php" method="POST" enctype="multipart/form-data">
                                    
                                    <div class="edit-cont">
                                        <div class="imageContainer">
                                            <input type="hidden" value="<?php echo $user_data['fotoPerfilCampanha']; ?>" name="foto" id="">
                                            <img src="<?php echo "cadastro/" . $user_data['fotoPerfilCampanha']; ?>" alt="Alterar foto" id="imgPhoto2" class="imgPhoto">
                                            <input type="file" id="flImage2" name="image" class="flImage" accept="image/*">
                                        </div>

                                        <div class="edit-campos">
                                            <div class="input-field">
                                                <input type="hidden" name="id" value="<?php echo $user_data['idCampanha'] ?>">
                                                <label>Nome da Campanha</label>
                                                <input type="text" name="nome" id="nomepet" value="<?php echo $user_data['nomeCampanha']; ?>">
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <label>Data</label>
                                                <input type="text" name="data" id="data" value="<?php echo $user_data['diaCampanha'] ?>">
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <label>Horário</label>
                                                <input type="text" name="horario" id="nomepet" value="<?php echo $user_data['horarioCampanha'] ?>">
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <label>Descrição</label>
                                                <input type="text" name="desc" id="nomepet" value="<?php echo $user_data['informacaoCampanha'] ?>">
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <label>CEP</label>
                                                <input type="text" name="cep" id="nomepet" value="<?php echo $user_data['cepCampanha'] ?>">
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <label>Logradouro</label>
                                                <input type="text" name="logradouro" id="nomepet" value="<?php echo $user_data['logradouroCampanha'] ?>">
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <label>Estado</label>
                                                <input type="text" name="estado" id="nomepet" value="<?php echo $user_data['estadoCampanha'] ?>">
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <label>Número</label>
                                                <input type="text" name="numero" id="nomepet" value="<?php echo $user_data['numLocalCampanha'] ?>">
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <label>Cidade</label>
                                                <input type="text" name="cidade" id="nomepet" value="<?php echo $user_data['cidadeCampanha'] ?>">
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <label>Complemento</label>
                                                <input type="text" name="complemento" id="nomepet" value="<?php echo $user_data['complementoCampanha'] ?>">
                                                <div class="underline"></div>
                                            </div>

                                            <div class="input-field">
                                                <label>Bairro</label>
                                                <input type="text" name="bairro" id="nomepet" value="<?php echo $user_data['bairroCampanha'] ?>">
                                                <div class="underline"></div>
                                            </div>
                                        </div>

                                        <div class="area-botoes-modal">
                                            <button type="submit" name="update" class="botao-modal2">Salvar</button>
                                        </div>

                                    </div>
                                </form>
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
                                        <p>Deseja excluir a campanha <span><?php echo $user_data['nomeCampanha']; ?></span> permanentemente?</p>
                                    </div>

                                    <div class="area-botoes">
                                        <button class="closeBtnModal botao-modalExc">Cancelar</button>
                                        <a style="text-decoration: none ;" href="Cadastro/deleteCampanha.php?id=<?php echo $user_data['idCampanha']; ?>">
                                            <button class="botao-modalExc2">Excluir</button>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <!-- Modal Ver Mais -->

                            <div class="fadeCam hide" id="modal-fade"></div>
                            <div class="modalCam hide" id="modalCam-<?php echo $user_data['idCampanha']; ?>">

                                <div class="modal-header">
                                    <div class="detalhe-modal"></div>
                                    <i class="fi fi-br-cross close-modal"></i>
                                </div>

                                <div class="modal-conteudo">
                                <div class="area-modal">
                                    <div class="modal-body1">
                                        <div class="img-camp area-foto">
                                            <img src="<?php echo "cadastro/" . $user_data['fotoPerfilCampanha']; ?>">
                                        </div>

                                        <div class="nome-cam">
                                            <span>Campanha</span>
                                            <p><?php echo $user_data['nomeCampanha'] ?></p>
                                        </div>

                                    </div>

                                    <div class="modal-cam">
                                        <div class="titulo-cam">
                                            <span>Localização</span>
                                            <i class="fi fi-ss-marker"></i>
                                        </div>

                                        <div class="conteudo-cam">
                                            <div class="campo-cam">
                                                <span>CEP</span>
                                                <p><?php echo $user_data['cepCampanha'] ?></p>
                                            </div>

                                            <div class="campo-cam">
                                                <span>Bairro</span>
                                                <p><?php echo $user_data['bairroCampanha'] ?></p>
                                            </div>

                                            <div class="campo-cam">
                                                <span>Complemento</span>
                                                <p><?php echo $user_data['complementoCampanha'] ?></p>
                                            </div>

                                            <div class="campo-cam">
                                                <span>Estado</span>
                                                <p><?php echo $user_data['estadoCampanha'] ?></p>
                                            </div>

                                            <div class="campo-cam">
                                                <span>Logradouro</span>
                                                <p><?php echo $user_data['logradouroCampanha'] ?></p>
                                            </div>

                                            <div class="campo-cam">
                                                <span>Cidade</span>
                                                <p><?php echo $user_data['cidadeCampanha'] ?></p>
                                            </div>

                                            <div class="campo-cam">
                                                <span>Número</span>
                                                <p><?php echo $user_data['numLocalCampanha'] ?></p>
                                            </div>
                                        </div>

                                        <div class="modal-mapa">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7314.867832910044!2d-46.63305022111003!3d-23.552854412933524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1695764301953!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                    </div>
                                </div>

                                <div class="area-modal">
                                    <div class="modal-body2">
                                        <div class="cont-info conteudo-info">

                                            <div class="campo-info">
                                                <div class="subtitulo">
                                                    <span>Data</span>
                                                    <i class="fi fi-rr-calendar"></i>
                                                </div>
                                                <p><?php echo $user_data['diaCampanha'] ?></p>
                                            </div>

                                            <div class="campo-info">
                                                <div class="subtitulo">
                                                    <span>Horário</span>
                                                    <i class="fi fi-rr-clock-three"></i>
                                                </div>
                                                <p><?php echo $user_data['horarioCampanha'] ?></p>
                                            </div>

                                            
                                            <div class="campo-info">
                                                <div class="subtitulo">
                                                    <span>Descrição</span>
                                                    <i class="fi fi-rr-document-signed"></i>
                                                </div>
                                                <div class="area-descricao">
                                                    <span class="short-text">
                                                        <p><?php echo $user_data['informacaoCampanha'] ?>
                                                            <br>
                                                            <a class="read-more">Ler mais</a>
                                                        </p>
                                                    </span>
                                                    <span class="full-text">
                                                        <p>
                                                            <?php echo $user_data['informacaoCampanha'] ?>
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

                        </div>
                    <?php } ?>
                </div>

                <br><br>

                <!-- TABELA -->
                <div id="area-tabela">
                    <table>
                        <thead>
                            <tr>
                                <th>Foto de Perfil</th>
                                <th>Nome da Campanha</th>
                                <th>Descrição</th>
                                <th>Informações</th>
                                <th>Alterações</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><img src="images/foto-campanha.png"></td>
                                <td>
                                    <div class="nome">
                                        Campanha
                                    </div>
                </div>
                </td>
                <td>
                    <div class="raca">
                        <p>Vacinação dos animais</p>
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

                </tbody>
                </table>
            </div>

        </div>
    </div>


    <!-- Links JS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/script.js"></script>
    <script src="js/tabela.js"></script>
    <script src="js/descricao.js"></script>
    <script src="js/modal-campanha.js" defer></script>

</body>

</html>
