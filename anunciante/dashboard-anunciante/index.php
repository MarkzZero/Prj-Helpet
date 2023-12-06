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

    <title>Dashboard do Anunciante</title>
    <link rel="icon" href="images/logo-azul.png">

    <!-- Links CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/modais.css">
</head>

<body>

    <!-- Menu Fixo Lateral -->
    <?php require "menu-lateral.php"; ?>

    <!-- Modal Cadastro do Anúncio -->
    <div class="fadeAdd hide"></div>
    <div class="modalAdd hide">
        <div class="modal-header">
            <div class="detalhe-modal">
            </div>
            <div class="titulo-modal">
                <span>Cadastro do Anúncio</span>
            </div>
            <i class="fi fi-br-cross close-modalAdd"></i>
        </div>

        <form action="./Cadastro/cadastro.php" enctype="multipart/form-data" method="POST">
            <div class="modal-conteudo">
                <div class="adicionar-fotos">
                    <div class="imageContainer">
                        <img src="images/add-foto.png" alt="selecionar foto" id="imgPhoto">
                        <input type="file" id="flImage" name="image" accept="image/*">
                        <p class="titulo-foto">Foto do Anúncio</p>
                    </div>

                    <div class="area-add-fotos">
                        <div class="titulo-add">
                            <p>Adicione outras fotos do anúncio (opcional)</p>
                            <i id="photos" class="fi fi-sr-images"></i>
                            <input type="file" id="filesImgs" multiple accept="image/*" multiple onchange="handleFileSelect(event)" name="opcional[]" multiple>
                        </div>
                        <div class="galeria"></div>
                    </div>
                </div>

                <div class="campos-anuncio">
                    <div class="campo">
                        <input type="text" placeholder="Nome do Anúncio" require name="nome" />
                    </div>

                    <div class="campo campo-data">
                        <input type="date" placeholder="Data de Início" require name="dataInicio" />
                        <input type="date" placeholder="Data de Término" require name="dataTermino" />
                    </div>

                    <div class="campo">
                        <textarea placeholder="Descrição" require name="descricao"></textarea>
                    </div>
                </div>
            </div>

            <button type="submit" name="cadastrar" class="btn-cadastrar">Cadastrar</button>
        </form>
    </div>

    <div class="main">
        <div class="topbar">
            <div class="toggle"></div>

            <div class="area-pesquisa">
                <div class="titulo-pagina">
                    <span>Anúncios</span>
                </div>
                <div class="search">
                    <i class="fi fi-br-search"></i>
                    <input type="text" placeholder="Pesquisar">
                </div>
            </div>

            <div class="img-logo">
                <a href="../../index.php"><img src="images/logo-azul.png" alt=""></a>
            </div>
        </div>

        <div id="area-cards" class="area-cards">
            <div class="add-anuncio open-modalAdd">
                <img src="images/add-anuncio.png">
            </div>

            <?php while ($user_data = mysqli_fetch_assoc($result)) { ?>
                <div class="card">
                    <img src="<?php echo "cadastro/" . $user_data['fotoAnuncio']; ?>">
                    <h4><?php echo $user_data['nomeAnuncio']; ?></h4>
                    <div class="desc">
                        <i class="fi fi-rr-document-signed"></i>
                        <p><?php echo $user_data['descAnuncio']; ?></p>
                    </div>
                    <div class="btns">
                        <button class="btn-info open-modal">
                            <p>Ver Mais</p>
                            <i class="fi fi-br-angle-small-right"></i>
                        </button>
                        <button class="btn-edit open-modalEdit"><i class="fi fi-br-edit"></i></button>
                        <button class="btn-delete open-modalExc"><i class="fi fi-sr-trash"></i></button>
                    </div>


                    <!-- Modal Alterar -->
                    <div class="fadeEdit hide"></div>
                    <div class="modalEdit hide">
                        <div class="modal-header">
                            <div class="detalhe-modal">
                            </div>
                            <div class="titulo-modal">
                                <span>Cadastro do Anúncio</span>
                            </div>
                            <i class="fi fi-br-cross close-modalEdit"></i>
                        </div>

                        <form action="edicao/editarAnuncio.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="idAnuncio" value="<?php echo $user_data['idAnuncio'] ?>">
                            <div class="modal-conteudo">
                                <div class="adicionar-fotos">
                                    <div class="imageContainer">
                                        <img src="<?php echo "./cadastro/" . $user_data['fotoAnuncio']; ?>" alt="selecionar foto" id="imgPhoto2">
                                        <input type="file" id="flImage2" name="image" accept="image/*">
                                        <p class="titulo-foto">Foto do Anúncio</p>
                                    </div>

                                    <div class="area-add-fotos">
                                        <div class="titulo-add">
                                            <p>Adicione outras fotos do anúncio (opcional)</p>
                                            <i id="photos" class="fi fi-sr-images"></i>
                                            <input type="file" id="filesImgs" multiple accept="image/*" multiple onchange="handleFileSelect(event)" name="opcional[]" multiple>
                                        </div>
                                        <div class="galeria">
                                            <img src="<?php echo "cadastro/" . $foto_data['fotosAnuncio']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="campos-anuncio">
                                    <div class="campo">
                                        <input type="text" placeholder="Nome do Anúncio" name="nome" value="<?php echo $user_data['nomeAnuncio']; ?>" />
                                    </div>

                                    <div class="campo campo-data">
                                        <input type="date" placeholder="Data de Início" value="<?php echo $user_data['dataInicioAnuncio'] ?>" name="dataInicio" />
                                        <input type="date" placeholder="Data de Término" value="<?php echo $user_data['dataTerminoAnuncio'] ?>" name="dataTermino" />
                                    </div>

                                    <div class="campo">
                                        <textarea placeholder="Descrição" name="descricao"><?php echo $user_data['descAnuncio'] ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="update" class="btn-cadastrar">Salvar</button>
                        </form>
                    </div>

                    <!-- Modal Excluir -->
                    <div class="fadeExc hide"></div>
                    <div class="modalExc hide">
                        <div class="modal-header">
                            <i class="fi fi-br-cross close-modalExc"></i>
                        </div>

                        <div class="area-excluir">
                            <div class="modal-body">
                                <div class="area-foto">
                                    <img src="images/img-excluir.png" alt="">
                                </div>
                            </div>

                            <div class="excluir-info">
                                <p>Deseja excluir o anúncio permanentemente?</p>
                            </div>

                            <div class="botoes">
                                <button class="close-modalExc botao-modalExc">Cancelar</button>
                                <a style="text-decoration: none ;" href="Cadastro/deleteUsuario.php?id=<?php echo $user_data['idAnimal']; ?>">
                                    <button class="botao-modalExc2">Excluir</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Ver Mais -->
                    <div class="fade hide"></div>
                    <div class="modal hide">
                        <div class="modal-header">
                            <div class="icon-fav">
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
                                        <img src="<?php echo "cadastro/" . $user_data['fotoAnuncio']; ?>">
                                    </div>
                                    <div class="nome-pet">
                                        <h3><?php echo $user_data['nomeAnuncio']; ?></h3>
                                    </div>
                                </div>

                                <div class="area-itens">
                                    <div class="item">
                                        <h4>Data de Ínicio</h4>
                                        <p><?php echo $user_data['dataInicioAnuncio']; ?></p>
                                        <div class="icon-patinha">
                                            <i class="fi fi-sr-calendar-clock"></i>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <h4>Data de Término</h4>
                                        <p><?php echo $user_data['dataTerminoAnuncio']; ?></p>
                                        <div class="icon-patinha">
                                            <i class="fi fi-sr-calendar-clock"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="area-descricao">
                                    <div class="post-body">
                                        <span class="short-text">
                                            <p>
                                                <?php echo $user_data['descAnuncio']; ?>
                                            </p>
                                            <a class="read-more">Ler mais</a>
                                        </span>
                                        <span class="full-text">
                                            <p>
                                                <?php echo $user_data['descAnuncio']; ?>
                                                <a class="read-less">Ler menos</a>
                                            </p>
                                        </span>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php } ?>


        </div>
    </div>

    <!-- Links JS -->
    <script src="js/script.js"></script>
    <script src="js/main.js"></script>

</body>

</html>