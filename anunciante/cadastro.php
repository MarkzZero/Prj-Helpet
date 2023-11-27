<?php
    include('./conexao/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cadastro</title>
        <link rel="shortcut icon" href="images/logo-azul.png" type="image/x-icon">

        <!-- Link CSS -->
        <link rel="stylesheet" href="css/cadastro.css">
    </head>
    <body>

        <div class="container">
        <img class="patinhas" src="images/patinhas-branca.png">
        <form action="cadastro/Cadastro.php" id="form-cad" method="post" enctype="multipart/form-data">
        <ul class="list">
            <li class="item">
                <input type="radio" id="radio_testimonial-1" class="btn-radio" name="basic_carousel" checked="checked" />
                <div class="content-test content_testimonial-1">
                    <div class="area-dados box">
                        <h1>Cadastro do Anunciante</h1>

                        <div class="max-width">
                            <div class="imageContainer">
                                <img src="images/foto-anunciante.png" alt="selecionar foto" id="imgPhoto-login">
                            </div>
                            <input type="file" id="flImage-login" name="image">
                        </div>

                        <div class="input-container">
                            <i class="fi fi-rr-circle-user"></i>
                            <input type="text" required name="nome" id="nome"/>
                            <div class="linha-input"></div>
                            <label>Nome</label>		
                        </div>

                        <div class="input-container">		
                            <i class="fi fi-rr-id-badge"></i>
                            <input type="text" required name="cnpj" id="cnpj"/>
                            <div class="linha-input"></div>
                            <label>CNPJ</label>
                        </div>

                        <div class="input-container">
                            <i class="fi fi-rr-phone-call"></i>
                            <input type="telefone" required name="telefone" id="telefone"/>
                            <div class="linha-input"></div>
                            <label>Telefone</label>		
                        </div>

                        <div class="input-container">
                            <i class="fi fi-rr-envelope"></i>
                            <input type="email" required name="email" id="email"/>
                            <div class="linha-input"></div>
                            <label>Email</label>		
                        </div>

                        <div class="input-container">
                            <i class="fi fi-rr-lock"></i>
                            <i class="fi fi-rr-eye" id="btn-senha" onclick="mostrarSenha()"></i>
                            <input type="password" id="senha" name="senha" required/>
                            <div class="linha-input"></div>
                            <label>Senha</label>		
                        </div>

                        <div class="input-container">
                            <i class="fi fi-rr-lock"></i>
                            <i class="fi fi-rr-eye" id="btn-conf-senha" onclick="mostrarConfSenha()"></i>
                            <input type="password" id="conf-senha" name="senha_confirma" required/>
                            <div class="linha-input"></div>
                            <label>Confirmar Senha</label>		
                        </div>
                        
                        <label class="label_testimonial-2 btn-label" for="radio_testimonial-2">
                            <p>Avançar</p>
                            <i class="fi fi-br-angle-small-right"></i>
                        </label>
                    </div>
                    <div class="area-avancar">
                        <p>Já tem uma conta?</p>
                        <a href="index.php">Login</a>
                        <br>
                        <img src="images/img-anunciante.png">
                    </div>
                </div>
            </li>
        </div>

            <a href="../index.php"><img class="logo" src="images/logo-azul.png"></a>
            <img class="bolinhas" src="images/enfeite-bolinha.png">

            <li class="item">
                <input type="radio" id="radio_testimonial-2" class="btn-radio" name="basic_carousel"/>
                <div class="content-test content_testimonial-2">
                    <div class="area-voltar">
                        <h2>Continuação</h2>
                        <p>Insira o resto das informações para concluir o cadastro.</p>
                        <img src="images/img-pet-shop.png">
                        <label class="label_testimonial-1 btn-label" for="radio_testimonial-1">
                            <i class="fi fi-br-angle-small-left"></i>
                            <p>Voltar</p>
                        </label>
                    </div>
                    <div class="area-complementos">
                        <h2>Endereço</h2>
                        <div class="area-campos">
                            <div class="input-endereco">
                                <i class="fi fi-rr-search-location"></i>
                                <input type="text" id="cep" onblur="pesquisacep(this.value);" onkeyup="formatCEP(this)" required name="cep"/>
                                <div class="linha-input"></div>
                                <label>CEP</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" id="uf" required name="estado"/>
                                <div class="linha-input"></div>
                                <label>Estado</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" id="cidade" required name="cidade"/>
                                <div class="linha-input"></div>
                                <label>Cidade</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" id="bairro" required name="bairro"/>
                                <div class="linha-input"></div>
                                <label>Bairro</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" id="rua" required name="logradouro"/>
                                <div class="linha-input"></div>
                                <label>Logradouro</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" required name="numero"/>
                                <div class="linha-input"></div>
                                <label>Número</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" required name="complemento"/>
                                <div class="linha-input"></div>
                                <label>Complemento</label>		
                            </div>

                            <div class="area-btn">
                                <button type="submit" id="submit">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
                      <!--Alertas-->
                      <?php
                if (isset($_SESSION['existente'])) :
              ?>
                <p>Este e-mail já está sendo usado!</p>
              <?php
                endif;
                unset($_SESSION['existente'])
              ?>

              <?php
                if (isset($_SESSION['invalido'])) :
              ?>
                <p>As senhas não conferem!</p>
              <?php
                endif;
                unset($_SESSION['invalido']);
              ?>

              <?php
                if (isset($_SESSION['nome_existente'])) :
              ?>
                <p>Este nome já está sendo usado!</p>
              <?php
                endif;
                unset($_SESSION['nome_existente']);
              ?>

              <?php
                if (isset($_SESSION['cnpj_existente'])) :
              ?>
                <p>CNPJ Já cadastrado!</p>
              <?php
                endif;
                unset($_SESSION['cnpj_existente']);
              ?>

              <?php
                if (isset($_SESSION['cnpj_invalido'])) :
              ?>
                <p>CNPJ inválido!</p>
              <?php
                endif;
                unset($_SESSION['cnpj_invalido']);
              ?>

    

        </form>

        <!-- Link JS -->
        <script src="js/script.js"></script>
        <script src="js/cadastro.js"></script>

    </body>
</html>