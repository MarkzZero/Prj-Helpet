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

    <title>Configurações do Anunciante</title>
    <link rel="icon" href="images/logo-azul.png">

    <!-- Links CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/modais.css">
    <link rel="stylesheet" href="css/configuracao.css">
</head>

<body onload="onLoad()">
    <?php while ($anunciante_data = mysqli_fetch_assoc($resultAnunciante)) {
    $telefone_data = mysqli_fetch_assoc($resultTelefone);
    ?>
        <!-- Menu Fixo Lateral -->
        <nav>

            <div class="toggle">
                <i class="fi fi-br-menu-burger"></i>
            </div>

            <div class="foto-anunciante">
                <img src="<?php echo "../Cadastro/" . $anunciante_data['fotoAnunciante']; ?>">
                <h2>Bem-vindo <br> <?php echo $anunciante_data['nomeAnunciante']; ?> </h2>
            </div>

            <ul>
                <li>
                    <a href="index.php">
                        <i class="fi fi-rr-box-open"></i>
                        <p>Anúncios</p>
                    </a>
                </li>
                <li>
                    <a href="preco.php">
                        <i class="fi fi-rr-usd-circle"></i>
                        <p>Preços</p>
                    </a>
                </li>
                <li>
                    <a href="configuracao.php">
                        <i class="fi fi-rr-settings"></i>
                        <p>Configurações</p>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fi fi-rr-sign-out-alt"></i>
                        <p>Sair</p>
                    </a>
                </li>
            </ul>
        </nav>


        <div class="main">
            <div class="topbar topbar-edit">
                <div class="voltar-config">
                    <a href="./configuracao.php"><i class="fi fi-br-angle-small-left"></i></a>
                </div>

                <div class="img-logo">
                    <a href="../../index.php"><img src="images/logo-azul.png" alt=""></a>
                </div>
            </div>

            <div class="menu-config">
                <div class="titulo-config">
                    <span>Configurações</span>
                </div>

                <div class="area-botao">
                    <hr>

                    <a href="edit-anunciante.php">
                        <div class="botao">
                            <i class="fi fi-br-arrows-repeat"></i>
                            <p>Alterar Perfil</p>
                        </div>
                    </a>

                    <hr>

                    <div class="botao open-modalExc">
                        <i class="fi fi-br-trash"></i>
                        <p>Excluir Perfil</p>
                    </div>

                    <!-- Excluir Anunciante -->
                    <!-- Modal Excluir Perfil  -->
                        <div class="fadeExc hide"></div>
                        <div class="modalExc hide">
                            <div class="modal-header">
                                <div class="fechar-modal">
                                    <i class="fechar fi fi-br-cross close-modalExc"></i>
                                </div>
                            </div>

                            <div class="area-excluir">
                                <i class="fi fi-sr-delete-user"></i>
                                <span>Desejar excluir sua conta?</span>
                                <p>Digite sua senha para confirmar</p>
                                <form action="cadastro/excluirAnunciante.php" method="post">
                                    <div style="margin: auto;" class="input-field">
                                        <input type="hidden" name="id" value="<?php echo $anunciante_data['idAnunciante'] ?>" id="">
                                        <input style="text-align: center;" type="text" name="senha" id="senha" required>
                                        <div class="underline"></div>
                                    </div>
                                    <div class="botoes">
                                        <button class="btn-cancelar">Cancelar</button>
                                        <button class="btn-excluir" name="delete" type="submit">Salvar</button>
                                    </div>
                                    <?php if (isset($_SESSION['erro'])) : ?>
                                        <p>Senha incorreta!</p>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>

                    <hr>
                </div>
            </div>

            <div class="pag-editar-perfil">

                <form action="cadastro/editarAnunciante.php" method="post" enctype="multipart/form-data">

                    <!-- FAZER AQUI A TELA DE ALTERAR PERFIL DA ONG -->
                    <div class="area-perfil-edit">
                        <div id="area-foto" class="coluna">
                            <div class="imageContainer">
                                <input type="hidden" name="id" value="<?php echo $anunciante_data['idAnunciante'] ?>" id="">
                                <input type="hidden" value="<?php echo "../Cadastro/" . $anunciante_data['fotoAnunciante']; ?>" name="foto">
                                <img src="<?php echo "../Cadastro/" . $anunciante_data['fotoAnunciante']; ?>" alt="selecionar foto" id="imgPhoto">
                                <input type="file" id="flImage" name="image" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <div class="area-form">
                        <p>Dados Pessoais</p>
                        <div class="linhas">
                            <div class="input-field">
                                <label>Anunciante</label>
                                <input type="text" name="nome" value="<?php echo $anunciante_data['nomeAnunciante'] ?>" id="nomepet">
                                <div class="underline"></div>
                            </div>

                            <div class="input-field">
                                <label>Telefone</label>
                                <input type="text" name="telefone" value="<?php echo $telefone_data['numTelefoneAnunciante'] ?>" id="telefone" onkeyup="formatTelefone(this)" maxlength="15">
                                <div class="underline"></div>
                            </div>

                            <div class="input-field">
                                <label>Email</label>
                                <input type="text" name="email" value="<?php echo $anunciante_data['emailAnunciante'] ?>" id="nomepet">
                                <div class="underline"></div>
                            </div>

                            <div class="input-field">
                                <label>CNPJ</label>
                                <input type="text" name="cnpj" value="<?php echo $anunciante_data['cnpjAnunciante'] ?>" id="cnpj" onkeyup="formatCNPJ(this)" maxlength="18">
                                <div class="underline"></div>
                            </div>
                        </div>

                        <p>Endereço</p>
                        <div class="linhas">
                            <div class="input-field">
                                <label>CEP</label>
                                <input type="text" onblur="pesquisacep(this.value);" onkeyup="formatCEP(this)" value="<?php echo $anunciante_data['cepAnunciante'] ?>" name="cep" />
                                <div class="underline"></div>
                            </div>

                            <div class="input-field">
                                <label>Estado</label>
                                <input type="text" value="<?php echo $anunciante_data['estadoAnunciante'] ?>" name="estado" id="uf">
                                <div class="underline"></div>
                            </div>

                            <div class="input-field">
                                <label>Cidade</label>
                                <input type="text" name="cidade" value="<?php echo $anunciante_data['cidadeAnunciante'] ?>" id="cidade">
                                <div class="underline"></div>
                            </div>

                            <div class="input-field">
                                <label>Bairro</label>
                                <input type="text" name="bairro" value="<?php echo $anunciante_data['bairroAnunciante'] ?>" id="bairro">
                                <div class="underline"></div>
                            </div>

                            <div class="input-field">
                                <label>Logradouro</label>
                                <input type="text" name="logradouro" value="<?php echo $anunciante_data['logradouroAnunciante'] ?>" id="rua">
                                <div class="underline"></div>
                            </div>

                            <div class="input-field">
                                <label>Número</label>
                                <input type="text" name="numero" value="<?php echo $anunciante_data['numLocalAnunciante'] ?>" id="nomepet">
                                <div class="underline"></div>
                            </div>

                            <div class="input-field">
                                <label>Complemento</label>
                                <input type="text" name="complemento" value="<?php echo $anunciante_data['complementoAnunciante'] ?>" id="nomepet">
                                <div class="underline"></div>
                            </div>
                        </div>

                        <div class="botoes">
                            <button class="btn-salvar" name="update" type="submit">Salvar</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    <?php } ?>

    <!-- Links JS -->
    <script src="js/script.js"></script>
    <script src="js/main.js"></script>

</body>

</html>