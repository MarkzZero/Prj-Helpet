<?php
include('protect.php');
include('./config/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Configurações - Editar Perfil</title>
    <link rel="icon" href="images/logo-azul.png">

    <!-- Links CSS -->
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" type="text/css" href="css/style-config.css">
</head>

<body onload="onLoad()">

    <div class="container">
        <!-- Menu Lateral -->
        <?php require "menu-lateral.php"; ?>

        <!-- MENU CONFIGURAÇÕES -->
        <div class="main">
            <div class="menu-config">
                <div class="titulo-config">
                    <span>Configurações</span>
                </div>

                <div class="area-botao">
                    <hr>

                    <a href="edit-ong.php">
                        <div class="botao-ativo botao">
                            <i class="fi fi-br-arrows-repeat"></i>
                            <p>Alterar Perfil</p>
                        </div>
                    </a>

                    <hr>

                    <div class="botao open-modalExc">
                        <i class="fi fi-br-trash"></i>
                        <p>Excluir Perfil</p>
                    </div>

                    <hr>

                    <a href="#">
                        <div class="botao">
                            <i class="fi fi-sr-headset"></i>
                            <p>Suporte</p>
                        </div>
                    </a>

                    <hr>
                </div>

                <!-- EXCLUIR PERFIL -->
                <?php require "excluir-ong.php"; ?>
            </div>


            <!--  EDITAR PERFIL DA ONG -->
            <div class="pag-editar-perfil">
                <form action="cadastro/editarOng.php" method="post" enctype="multipart/form-data">
                    <?php while ($user_data = mysqli_fetch_assoc($resultOng)) {
                        $telefoneOng = $mysqli->query("SELECT tbTelefoneOng.numTelefoneOng as 'telefone', tbOng.nomeOng as 'ong' FROM tbTelefoneOng INNER JOIN tbOng ON tbTelefoneOng.idOng = tbOng.idOng WHERE tbOng.idOng = '$id'") or die($mysqli->error);

                        $telefone_data = mysqli_fetch_assoc($telefoneOng);
                    ?>
                        <div class="area-perfil-edit">
                            <div class="enfeites">
                                <div class="enfeiteUm">
                                    <img src="images/img-alt-perfil/enfeite-bolinha.png">
                                </div>

                                <div id="area-foto" class="coluna">
                                    <div class="imageContainer">
                                        <input type="hidden" name="foto" value="<?php echo $user_data['fotoOng'] ?>">
                                        <img src="<?php echo "../Cadastro/" . $user_data['fotoOng'] ?>" alt="selecionar foto" id="imgPhoto">
                                        <input type="file" id="flImage" name="image" accept="image/*">
                                    </div>
                                </div>

                                <div class="enfeiteDois">
                                    <img src="images/img-alt-perfil/enfeite-circulo.png">
                                </div>
                            </div>
                        </div>

                        <div class="area-form">
                            <p>Dados Pessoais</p>
                            <div class="linhas">
                                <div class="input-field">
                                    <label>Nome da ONG</label>
                                    <input type="text" name="nome" id="nomepet" value="<?php echo $user_data['nomeOng'] ?>">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Telefone</label>
                                    <input type="text" name="telefone" id="telefone" onkeyup="formatTelefone(this)" maxlength="15" value="<?php echo $telefone_data['telefone'] ?>">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="text" name="email" id="nomepet" value="<?php echo $user_data['emailOng'] ?>">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Capacidade</label>
                                    <input type="text" name="capacidade" id="capacidade" value="<?php echo $user_data['capacidadeOng'] ?>">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>CNPJ</label>
                                    <input type="text" name="cnpj" id="cnpj" value="<?php echo $user_data['cnpjOng'] ?>" onkeyup="formatCNPJ(this)" maxlength="18">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>CNAS</label>
                                    <input type="text" name="cnas" id="nomepet" value="<?php echo $user_data['cnasOng'] ?>">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>CEBAS</label>
                                    <input type="text" name="cebas" id="nomepet" value="<?php echo $user_data['cebasOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <br>

                            <p>Endereço</p>
                            <div class="linhas">
                                <div class="input-field">
                                    <label>CEP</label>
                                    <input type="text" value="<?php echo $user_data['cepOng'] ?>" id="cep" onblur="pesquisacep(this.value);" onkeyup="formatCEP(this)" maxlength="9" required name="cep" />
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Estado</label>
                                    <input type="text" name="estado" id="uf" value="<?php echo $user_data['estadoOng'] ?>">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Cidade</label>
                                    <input type="text" name="cidade" id="cidade" value="<?php echo $user_data['cidadeOng'] ?>">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Bairro</label>
                                    <input type="text" name="bairro" id="bairro" value="<?php echo $user_data['bairroOng'] ?>">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Logradouro</label>
                                    <input type="text" name="logradouro" id="rua" value="<?php echo $user_data['logradouroOng'] ?>">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Número</label>
                                    <input type="text" name="numero" id="nomepet" value="<?php echo $user_data['numLogOng'] ?>">
                                    <div class="underline"></div>
                                </div>

                                <div class="input-field">
                                    <label>Complemento</label>
                                    <input type="text" name="complemento" id="nomepet" value="<?php echo $user_data['complementoOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>

                        <?php } ?>

                        <div class="botoes">
                            <button class="btn-salvar" name="update" type="submit">Salvar</button>
                        </div>
                        </div>
                </form>
            </div>

        </div>
    </div>


    <!-- Links JS -->
    <script src="js/modal.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/script.js"></script>

</body>

</html>