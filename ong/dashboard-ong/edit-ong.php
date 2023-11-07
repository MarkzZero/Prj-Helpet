<?php 
    include('protect.php');
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
    <body>
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
                    <img style="border-radius: 100%;" src="<?php echo "../Cadastro/" . $_SESSION['foto']; ?>">

                    <!-- Conectar o nome das ongs com o banco -->
                    <span class="title-ong">Bem-Vindo <br> <?php echo $_SESSION['nome'];?></span>
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

                <!-- FAZER AQUI A TELA DE ALTERAR PERFIL DA ONG -->
                <div class="area-perfil-edit">
                    <div class="enfeites">
                        <div class="enfeiteUm">
                            <img src="images/img-alt-perfil/enfeite-bolinha.png">
                        </div>

                        <div id="area-foto" class="coluna">
                            <div class="imageContainer">
                                <img src="<?php echo "../Cadastro/" . $_SESSION['foto']; ?>" alt="selecionar foto" id="imgPhoto">
                                <input type="file" id="flImage" name="image" accept="image/*">
                            </div>
                        </div>

                        <div class="enfeiteDois">
                            <img src="images/img-alt-perfil/enfeite-circulo.png" > 
                        </div>
                    </div>
                </div>

                <br><br><br>

                <div class="area-form">
                    <form action="">

                        <div class="linhas">
                            <div class="area-form">
                                <div class="input-field">
                                    <label>Nome da ONG</label>
                                    <input type="text" name="nomepet" id="nomepet" value="Ampara Animal">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Telefone</label>
                                    <input type="text" name="nomepet" id="nomepet" value="(11) 98765-4321">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Capacidade</label>
                                    <input type="text" name="nomepet" id="nomepet" value="500">
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>

                        <div class="linhas">
                            <div class="area-form">
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="text" name="nomepet" id="nomepet" value="aa@gmail.com">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Senha</label>
                                    <input type="text" name="nomepet" id="nomepet" value="111">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>CNPJ</label>
                                    <input type="text" name="nomepet" id="nomepet" value="60.712.686/0001-75">
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>

                        <div class="linhas">
                            <div class="area-form">
                                <div class="input-field">
                                    <label>CNAS</label>
                                    <input type="text" name="nomepet" id="nomepet" value="294">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>CEBAS</label>
                                    <input type="text" name="nomepet" id="nomepet" value="8255">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>CEP</label>
                                    <input type="text" name="nomepet" id="nomepet" value="08380-290">
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>

                        <div class="linhas">
                            <div class="area-form">
                                <div class="input-field">
                                    <label>Estado</label>
                                    <input type="text" name="nomepet" id="nomepet" value="SP">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Cidade</label>
                                    <input type="text" name="nomepet" id="nomepet" value="São Paulo">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Bairro</label>
                                    <input type="text" name="nomepet" id="nomepet" value="Jardim Iguatemi">
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>

                        <div class="linhas">
                            <div class="area-form">
                                <div class="input-field">
                                    <label>Logradouro</label>
                                    <input type="text" name="nomepet" id="nomepet" value="Rua João de Carvalho">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Número</label>
                                    <input type="text" name="nomepet" id="nomepet" value="76">
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Complemento</label>
                                    <input type="text" name="nomepet" id="nomepet" value="Bloco C">
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>

                        <div class="botoes">
                            <button class="btn-cancelar">Cancelar</button>
                            <button class="btn-salvar" type="submit">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>

        <!-- Links JS -->
        <script src="js/app.js"></script>
        <script src="js/modal.js"></script>
    </body>
</html>
