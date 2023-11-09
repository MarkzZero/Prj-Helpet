<?php

include('../config/config.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Configurações</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <header class="menu-lateral">
            <a href="index.php">
                <i class="fi fi-br-angle-small-left voltar"></i>
            </a>

            <h2>Configurações</h2>

            <div class="info-user">
                      <?php
                     while ($user_data = mysqli_fetch_assoc($result)) {
                    ?>  
                <img src="images/foto-user.png">
                <h4><?php echo $user_data['nomeUsuario'] ?></h4>
                <p><?php echo $user_data['emailUsuario'] ?></p>
            </div>

            <div class="area-itens">
                <h3>Configurações Gerais</h3>

                <a href="edit-user.php">
                    <div class="item-config">
                        <i class="fi fi-sr-pencil icon-item"></i>
                        <p>Editar Perfil</p>
                        <i class="fi fi-br-angle-small-right icon-seta"></i>
                    </div>
                </a>

                <div class="item-config">
                    <i class="fi fi-br-eclipse-alt icon-item"></i>
                    <p>Modo Escuro</p>
                    <input type="checkbox" id="switch"/><label for="switch"></label>
                </div>

                <a href="#">
                    <div class="item-config">
                        <i class="fi fi-sr-file-exclamation icon-item"></i>
                        <p>Termos e Condições</p>
                        <i class="fi fi-br-angle-small-right icon-seta"></i>
                    </div>
                </a>
                
                <a href="#">
                    <div class="item-config">
                        <i class="fi fi-sr-interrogation icon-item"></i>
                        <p>Sobre</p>
                        <i class="fi fi-br-angle-small-right icon-seta"></i>
                    </div>
                </a>

                <div class="item-config open-modalExc">
                    <i class="fi fi-sr-trash icon-item"></i>
                    <p>Deletar Conta</p>
                    <i class="fi fi-br-angle-small-right icon-seta"></i>
                </div>

                <a href="#">
                    <div class="item-config">
                        <i class="fi fi-br-sign-out-alt icon-item"></i>
                        <p>Sair</p>
                        <i class="fi fi-br-angle-small-right icon-seta"></i>
                    </div>
                </a>
            </div>

            <?php require "excluir-user.php"; ?>

            <div class="pata-amarela">
                <img src="images/pata-amarela.png">
            </div>

        </header>

        <main>
            <div class="pata-amarela">
                <a href="configuracoes.php"><i class="fi fi-br-angle-small-left"></i></a>
                <h2>Editar Perfil</h2>
                <img src="images/pata-amarela.png">
            </div>

            <form>
                <div class="imageContainer">
                    <img src="images/foto-user.png" alt="selecionar foto" id="imgPhoto">
                    <input type="file" id="flImage" name="image" accept="image/*">
                    <label>Foto de Perfil</label>
                </div>

                <br>

                <h3>Dados Pessoais</h3>
                <div class="linhas">
                    <div class="input-field">
                        <label>Nome</label>
                        <input type="text" name="nomeuser" id="nomeuser" value="<?php echo $user_data['nomeUsuario'] ?>">
                        <div class="underline"></div>
                    </div>

                    <div class="input-field">
                        <label>Telefone</label>
                        <input type="telefone" name="teluser" id="teluser" value="(11) 98765-4321">
                        <div class="underline"></div>
                    </div>

                    <div class="input-field">
                        <label>E-mail</label>
                        <input type="email" name="emailuser" id="emailuser" value="<?php echo $user_data['emailUsuario'] ?>">
                        <div class="underline"></div>
                    </div>

                    <div class="input-field">
                        <label>Senha</label>
                        <input type="text" name="senhauser" id="senhauser" value="*****">
                        <div class="underline"></div>
                    </div>
                </div>

                <br>

                <h3>Endereço</h3>
                <div class="linhas">
                    <div class="input-field">
                        <label>CEP</label>
                        <input type="text" name="nomepet" id="nomepet" value="<?php echo $user_data['cepUsuario'] ?>">
                        <div class="underline"></div>
                    </div>

                    <div class="input-field">
                        <label>Estado</label>
                        <input type="text" name="estado" id="estado" value="<?php echo $user_data['estadoUsuario'] ?>">
                        <div class="underline"></div>
                    </div>

                    <div class="input-field">
                        <label>Cidade</label>
                        <input type="text" name="cidade" id="cidade" value="<?php echo $user_data['cidadeUsuario'] ?>">
                        <div class="underline"></div>
                    </div>

                    <div class="input-field">
                        <label>Bairro</label>
                        <input type="text" name="bairro" id="bairro" value="<?php echo $user_data['bairroUsuario'] ?>">
                        <div class="underline"></div>
                    </div>

                    <div class="input-field">
                        <label>Logradouro</label>
                        <input type="text" name="logradouro" id="logradouro" value="<?php echo $user_data['logradouroUsuario'] ?>">
                        <div class="underline"></div>
                    </div>

                    <div class="input-field">
                        <label>Número</label>
                        <input type="text" name="numero" id="numero" value="<?php echo $user_data['numLocalUsuario'] ?>">
                        <div class="underline"></div>
                    </div>

                    <div class="input-field">
                        <label>Complemento</label>
                        <input type="text" name="complemento" id="complemento" value="<?php echo $user_data['complementoUsuario'] ?>">
                        <div class="underline"></div>
                    </div>
                </div>

                <br>

                <div class="botoes">
                    <button class="btn-cancelar">Cancelar</button>
                    <button class="btn-salvar" type="submit">Salvar</button>
                </div>
                
            </form>
            <?php } ?>
        </main>

        <!-- Links JS -->
        <script src="js/script.js"></script>

    </body>
</html>