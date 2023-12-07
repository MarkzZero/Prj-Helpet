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
        <link rel="stylesheet" href="css/configuracoes.css">
        <link rel="stylesheet" href="css/modais.css">    
    </head>
    <body>

        <header>
            <!-- Voltar para a página anterior -->
            <a href="javascript:history.back()">
                <i class="fi fi-br-angle-small-left voltar"></i>
            </a>

            <h2>Configurações</h2>

            <div class="info-user">
                <?php
                     while ($user_data = mysqli_fetch_assoc($result)) {
                    ?>  
                <img src="<?php echo "../cadastro/" . $user_data['fotoUsuario'] ?>">
                <h4><?php echo $user_data['nomeUsuario'];?></h4>
                <p><?php echo $user_data['emailUsuario'] ?></p>
            </div>

            <div class="area-itens">
                <h3>Configurações Gerais</h3>

                <div class="item-config open-modalEdit">
                    <i class="fi fi-sr-pencil icon-item"></i>
                    <p>Editar Perfil</p>
                    <i class="fi fi-br-angle-small-right icon-seta"></i>
                </div>

                <div class="item-config open-modalExc">
                    <i class="fi fi-sr-trash icon-item"></i>
                    <p>Deletar Conta</p>
                    <i class="fi fi-br-angle-small-right icon-seta"></i>
                </div>

                <a href="../Login/logout.php">
                    <div class="item-config">
                        <i class="fi fi-br-sign-out-alt icon-item"></i>
                        <p>Sair</p>
                        <i class="fi fi-br-angle-small-right icon-seta"></i>
                    </div>
                </a>
            </div>

            <div class="pata-amarela">
                <img src="images/pata-amarela.png">
            </div>
        </header>

        <!-- Tela de Editar Perfil -->
        <div class="modalEdit hide">
            <main>
                <div class="pata-amarela">
                    <a href="configuracoes.php"><i class="fi fi-br-angle-small-left"></i></a>
                    <h2>Editar Perfil</h2>
                    <img src="images/pata-amarela.png">
                </div>

                <form action="../Update/Update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $user_data['idUsuario'] ?>">
                    <div class="imageContainer">
                        <input type="hidden" name="foto" value="<?php echo $user_data['fotoUsuario'] ?>">
                    <img src="<?php echo "../cadastro/" . $user_data['fotoUsuario'] ?>" alt="selecionar foto" id="imgPhoto">
                        <input type="file" id="flImage" name="image" accept="image/*">
                        <label>Foto de Perfil</label>
                    </div>

                    <br>

                    <h3>Dados Pessoais e Endereço</h3>

                    <br>

                    <div class="linhas">
                        <div class="input-field">
                            <label>Nome</label>
                            <input type="text" name="nome" id="nomeuser" value="<?php echo $user_data['nomeUsuario'] ?>">
                            <div class="underline"></div>
                        </div>

                        <div class="input-field">
                            <label>CPF</label>
                            <input type="text" name="cpf" id="nomeuser" value="862.697.660-79">
                            <div class="underline"></div>
                        </div>

                        <div class="input-field">
                            <label>Telefone</label>
                            <input type="telefone" name="teluser" id="teluser" value="(11) 98765-4321">
                            <div class="underline"></div>
                        </div>

                        <div class="input-field">
                            <label>E-mail</label>
                            <input type="email" name="email" id="emailuser" value="<?php echo $user_data['emailUsuario'] ?>">
                            <div class="underline"></div>
                        </div>

                        <div class="input-field">
                            <label>CEP</label>
                            <input type="text" name="cep" onblur="pesquisacep(this.value);" onkeyup="formatCEP(this)" id="nomepet" value="<?php echo $user_data['cepUsuario'] ?>" >
                            <div class="underline"></div>
                        </div>

                        <div class="input-field">
                            <label>Estado</label>
                            <input type="text" name="estado" id="estado" value="<?php echo $user_data['estadoUsuario'] ?>" >
                            <div class="underline"></div>
                        </div>

                        <div class="input-field">
                            <label>Cidade</label>
                            <input type="text" name="cidade" id="cidade" value="<?php echo $user_data['cidadeUsuario'] ?>" >
                            <div class="underline"></div>
                        </div>

                        <div class="input-field">
                            <label>Bairro</label>
                            <input type="text" name="bairro" id="bairro" value="<?php echo $user_data['bairroUsuario'] ?>">
                            <div class="underline"></div>
                        </div>

                        <div class="input-field">
                            <label>Logradouro</label>
                            <input type="text" name="logradouro" id="logradouro" value="<?php echo $user_data['logradouroUsuario'] ?>" required>
                            <div class="underline"></div>
                        </div>

                        <div class="input-field">
                            <label>Número</label>
                            <input type="text" name="numero" id="numero" value="<?php echo $user_data['numLocalUsuario'] ?>"  >
                            <div class="underline"></div>
                        </div>

                        <div class="input-field">
                            <label>Complemento</label>
                            <input type="text" name="complemento" id="complemento" value="<?php echo $user_data['complementoUsuario'] ?>" >
                            <div class="underline"></div>
                        </div>
                    </div>

                    <br>

                    <div class="botoes">
                        <button class="btn-cancelar" type="button">Cancelar</button>
                        <button class="btn-salvar" name="update" type="submit">Salvar</button>
                    </div>
                    
                </form>

                <!-- Modal Excluir Perfil  -->
                <div class="fadeExc hide"></div>
                <div class="modalExc hide">
                    <div class="modal-header">
                        <div class="fechar-modal">
                            <i class="fechar fi fi-br-cross close-modalExc"></i>
                        </div>
                    </div>
                    <form class="area-excluir" action="../Update/Update.php" method="post">
                        <i class="fi fi-sr-delete-user"></i>
                        <span>Desejar excluir sua conta?</span>
                        <p>Digite sua senha parar confirmar a exclusão</p>
                        <div class="input-field">
                            <input type="text" name="senha" id="senha">
                            <div class="underline"></div>
                        </div>
                        <div class="botoes">
                            <button class="btn-cancelar close-modalExc" type="button">Cancelar</button>
                            <button class="btn-excluir" type="submit">Salvar</button>
                        </div>
                    </form>
                </div>

                <?php } ?>
            </main>
        </div>

        <!-- Links JS -->
        <script src="js/script.js"></script>
        <script src="js/modais.js"></script>

    </body>
</html>
