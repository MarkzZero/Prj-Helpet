<?php 
    include('protect.php');
    include('./config/config.php');

    if(isset($_GET[1]))
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
    </head>
    <body>
        
        <!-- Menu Fixo Lateral -->
        <?php require "menu-lateral.php"; ?>

       

        <div class="main">
            <div class="topbar">
                <div class="toggle"></div>  

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

                        <div class="botao-ativo">
                            <i class="bi bi-arrow-left-right"></i>
                            <a href="edit-anunciante.php">
                                Alterar Perfil
                            </a>
                        </div>

                        <hr>

                        <div class="botao open-modalExc">
                        <i class="bi bi-trash3-fill"></i>
                            <a>
                                Excluir Perfil
                            </a>
                        </div>

                        <hr>


                    </div>

                    <!-- MODO ESCURO E CLARO -->
                    <div class="btn-modo">
                        <i class="fi fi-rs-moon-stars"></i>
                        <p>Modo Escuro</p>
                        <input type="checkbox" id="switch" /><label for="switch"></label>
                    </div>

                </div>




                <form action="#" method="post" enctype="multipart/form-data">
               
                    <!-- FAZER AQUI A TELA DE ALTERAR PERFIL DA ONG -->
                    <div class="area-perfil-edit">
                        <div class="enfeites">
                            <div class="enfeiteUm">
                                <a href="./configuracao.php"><img src="images/img-enfeiteUm.png"></a>
                            </div>

                            <div id="area-foto" class="coluna">
                                <div class="imageContainer">
                                    <input type="hidden" name="foto">
                                    <img src="images/" alt="selecionar foto" id="imgPhoto">
                                    <input type="file" id="flImage" name="image" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br><br>

                    <div class="area-form">

                        <div class="linhas">
                            <div class="area-form">
                                <div class="input-field">
                                    <label>Nome Anunciante</label>
                                    <input type="text" name="nome" id="nomepet" >
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Telefone</label>
                                    <input type="text" name="telefone" id="telefone" onkeyup="formatTelefone(this)" maxlength="15" >
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="text" name="email" id="nomepet" >
                                    <div class="underline"></div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="linhas">
                           

                            <div class="area-form">
                                <div class="input-field">
                                    <label>CNPJ</label>
                                    <input type="text" name="cnpj" id="cnpj"  onkeyup="formatCNPJ(this)" maxlength="18" >
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>CEP</label>
                                    <input type="text"  required name="cep" />
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Estado</label>
                                    <input type="text" name="estado" id="uf" >
                                    <div class="underline"></div>
                                </div>
                            </div>

                        </div>

                        <div class="linhas">
                           

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Cidade</label>
                                    <input type="text" name="cidade" id="cidade" >
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Bairro</label>
                                    <input type="text" name="bairro" id="bairro" >
                                    <div class="underline"></div>
                                </div>
                            </div>

                            
                            <div class="area-form">
                                <div class="input-field">
                                    <label>Logradouro</label>
                                    <input type="text" name="logradouro" id="rua" >
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>

                        <div class="linhas">
                            <div class="area-form">
                                <div class="input-field">
                                    <label>Número</label>
                                    <input type="text" name="numero" id="nomepet" >
                                    <div class="underline"></div>
                                </div>
                            </div>

                            <div class="area-form">
                                <div class="input-field">
                                    <label>Complemento</label>
                                    <input type="text" name="complemento" id="nomepet">
                                    <div class="underline"></div>
                                </div>
                            </div>

                        </div>

                    <div class="botoes">
                        <button class="btn-cancelar" name="update" type="submit">Cancelar</button>
                        <button class="btn-salvar" name="update" type="submit">Salvar</button>
                    </div>

                    </div>
            </form>
          
        </div>

        <!-- Links JS -->
        <script src="js/script.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>