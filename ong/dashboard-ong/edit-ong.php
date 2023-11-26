<?php
include('protect.php');
include('./config/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Alterar Perfil</title>
    <link rel="icon" href="images/logo-azul.png">

    <!-- Links CSS -->
    <link rel="stylesheet" type="text/css" href="css/style-config.css">
</head>

<body onload="onLoad()">
    <div class="container">
        <!-- Menu Fixo Lateral -->
        <div class="navegation">
            <br>
            <!--
                <div class="toggle">
                    <i class="fi fi-br-menu-burger"></i>
                </div>
                -->
            <div class="logo">
                <!-- Puxar do banco a imagem da ong aqui -->
                <img style="border-radius: 100%;" src="<?php echo "../Cadastro/" . $ong_data['fotoOng'] ?>">

                <!-- Conectar o nome das ongs com o banco -->
                <span class="title-ong">Bem-Vindo <br> <?php echo $ong_data['nomeOng']; ?></span>
            </div>

            <ul>
                <li>
                    <a href="index.php">
                        <span class="icon"><i class="fi fi-sr-chart-line-up"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="Pets.php">
                        <span class="icon"><i class="fi fi-rs-paw"></i></span>
                        <span class="title">Pets</span>
                    </a>
                </li>
                <li>
                    <a href="Campanhas.php">
                        <span class="icon"><i class="fi fi-rr-megaphone"></i></span>
                        <span class="title">Campanhas</span>
                    </a>
                </li>
                <li>
                    <a href="Chat.php">
                        <span class="icon"><i class="fi fi-rr-messages"></i></span>
                        <span class="title">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="configuracoes.php">
                        <span class="icon"><i class="fi fi-rr-settings"></i></span>
                        <span class="title">Configurações</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="fi fi-rr-sign-out-alt"></i></span>
                        <span class="title">Sair</span>
                    </a>
                </li>
            </ul>

        </div>

        <!-- MENU CONFIGURAÇÕES -->
        <div class="menu-config">

            <div class="titulo-config">
                <span>Configurações</span>
            </div>

            <div class="area-botao">

                <hr>

                <div class="botao-ativo">
                    <i class="fi fi-rs-arrows-repeat"></i>
                    <a href="edit-ong.html">
                        Alterar Perfil
                    </a>
                </div>

                <hr>

                <div class="botao open-modalExc">
                    <i class="fi fi-rs-trash"></i>
                    <a>
                        Excluir Perfil
                    </a>
                </div>

                <hr>

                <div class="botao">
                    <i class="fi fi-sr-headset"></i>
                    <a href="#">
                        Suporte
                    </a>
                </div>

                <hr>

            </div>

            <!-- MODO ESCURO E CLARO -->
            <div class="btn-modo">
                <i class="fi fi-rs-moon-stars"></i>
                <p>Modo Escuro</p>
                <div class="toggle">
                    <input type="checkbox" id="foo">
                    <label for="foo"></label>
                </div>
            </div>

            <?php require "excluir-ong.php"; ?>

        </div>

        <div class="main">
            <form action="cadastro/editarOng.php" method="post" enctype="multipart/form-data">
                <?php while ($user_data = mysqli_fetch_assoc($resultOng) and $telefone_data = mysqli_fetch_assoc($telefoneOng)) {

                ?>
                    <!-- FAZER AQUI A TELA DE ALTERAR PERFIL DA ONG -->
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

                    <br><br><br>

                    <div class="area-form">

                        <div class="linhas">
                            <div class="area-form">
                                <div class="input-field">
                                    <label>Nome da ONG</label>
                                    <input type="text" name="nome" id="nomepet" value="<?php echo $user_data['nomeOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Telefone</label>
                                    <input type="text" name="telefone" id="telefone" onkeyup="formatTelefone(this)" maxlength="15" value="<?php echo $telefone_data['telefone'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Capacidade</label>
                                    <input type="text" name="capacidade" id="nomepet" value="<?php echo $user_data['capacidadeOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>

                        <div class="linhas">
                            <div class="area-form">
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="text" name="email" id="nomepet" value="<?php echo $user_data['emailOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>CNPJ</label>
                                    <input type="text" name="cnpj" id="cnpj" value="<?php echo $user_data['cnpjOng'] ?>" onkeyup="formatCNPJ(this)" maxlength="18" >
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>CNAS</label>
                                    <input type="text" name="cnas" id="nomepet" value="<?php echo $user_data['cnasOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>

                        <div class="linhas">

                            <div class="area-form">
                                <div class="input-field">
                                    <label>CEBAS</label>
                                    <input type="text" name="cebas" id="nomepet" value="<?php echo $user_data['cebasOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>CEP</label>
                                    <input type="text" value="<?php echo $user_data['cepOng'] ?>" id="cep" onblur="pesquisacep(this.value);" onkeyup="formatCEP(this)" maxlength="9" required name="cep" />
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Estado</label>
                                    <input type="text" name="estado" id="uf" value="<?php echo $user_data['estadoOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>

                        <div class="linhas">

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Cidade</label>
                                    <input type="text" name="cidade" id="cidade" value="<?php echo $user_data['cidadeOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Bairro</label>
                                    <input type="text" name="bairro" id="bairro" value="<?php echo $user_data['bairroOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Logradouro</label>
                                    <input type="text" name="logradouro" id="rua" value="<?php echo $user_data['logradouroOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>

                        <div class="linhas">

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Número</label>
                                    <input type="text" name="numero" id="nomepet" value="<?php echo $user_data['numLogOng'] ?>">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Complemento</label>
                                    <input type="text" name="complemento" id="nomepet" value="<?php echo $user_data['complementoOng'] ?>">
                                    <div class="underline"></div>
                                </div>
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

    <!-- Links JS -->
    <script src="js/app.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/script.js"></script>
</body>

</html>