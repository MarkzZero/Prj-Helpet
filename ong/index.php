<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Login e Cadastro da ONG</title>
    <link rel="shortcut icon" href="images/logo-azul.png" type="image/x-icon">

    <!-- Links CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="login/login.php" method="POST" class="sign-in-form">
            <img src="images/bolinha-fundo1.png" class="enfeite2-azul" alt="">

            <div class="area-login">
              <a href="../index.php"><img class="logo-helpet-azul" src="images/logo-azul.png" alt=""></a>

              <h2 class="title-login">Login</h2>

              <div class="input-field-azul">
                <input type="email" placeholder="Email" name="email" />
                <i class="fi fi-br-envelope"></i>
              </div>

              <div class="input-field-azul">
                <input id="senha" type="password" placeholder="Senha" name="senha" />
                <i class="fi fi-sr-lock"></i>
                <i class="fi fi-ss-eye" id="btn-senha" onclick="mostrarSenha()"></i>
              </div>

              <div class="esqueceu-senha">
                <a href="esqueceuSenha/index.php">Esqueceu sua senha?</a>
              </div>

              <div>
                <input type="submit" value="Acessar" class="btn-lado-azul" />
              </div>
            </div>

            <!-- Alertas -->
            <?php
              if (isset($_SESSION['nao_autenticado'])) :
            ?>
              <p style="margin-top: 3.5vh; color:red;">Email ou senha incorretos!</p>
            <?php
              endif;
              unset($_SESSION['nao_autenticado']);
            ?>
            <?php
              if (isset($_SESSION['incompleto'])) :
            ?>
              <p style="margin-top: 3.5vh; color:red;">Dados incompletos!</p>
            <?php
              endif;
              unset($_SESSION['incompleto']);
            ?>
          </form>

          <img class="patinhas-login" src="images/fundo-patinhas.png" alt="">

          <form action="./Cadastro/cadastro.php" enctype="multipart/form-data" method="POST" class="sign-up-form">
            <img class="fundo-enfeite-laranja" src="images/bolinha-fundo1.png">

            <div class="area-form">

            <ul class="list">
              <li class="item">
              <input type="radio" id="radio_testimonial-1" class="btn-radio" name="basic_carousel" checked="checked" />
                  
              <div id="area-dados" class="content-test content_testimonial-1">
                <h2 class="title-cadastro">Cadastro da ONG</h2>

                <div class="max-width">
                  <div class="imageContainer">
                    <img src="images/select-img.png" alt="selecionar foto" id="imgPhoto-login">
                  </div>
                  <input type="file" id="flImage-login" name="image">
                </div>

                <div class="input-laranja1">
                  <i class="fi fi-sr-house-building"></i>
                  <input type="text" placeholder="Nome da ONG" required name="nome"/>
                </div>

                <div class="input-laranja1">
                  <i class="fi fi-sr-phone-call"></i>
                  <input type="telefone" placeholder="Telefone" required name="telefone" onkeyup="formatTelefone(this)" maxlength="15"/>
                </div>

                <div class="input-laranja1">
                  <i class="fi fi-br-paw"></i>
                  <input type="capacidade" placeholder="Capacidade de Pets" required name="capacidade"/>
                </div>

                <div class="input-laranja1">
                  <i class="fi fi-br-envelope"></i>
                  <input type="email" placeholder="Email" required name="email" />
                </div>

                <div class="input-laranja1">
                  <input id="senha2" type="password" placeholder="Senha" name="senha2"/>
                  <i class="fi fi-sr-lock"></i>
                  <i class="fi fi-ss-eye" id="btn-senha2" onclick="mostrarSenha2()"></i>
                </div>

                <div class="input-laranja1">
                  <input id="senha_confirma" type="password" placeholder="Confirmar Senha" name="senha_confirma"/>
                  <i class="fi fi-sr-lock"></i>
                  <i class="fi fi-ss-eye" id="btn-senha3" onclick="mostrarSenha3()"></i>
                </div>

                <br>
                
                <label class="label_testimonial-2 btn-label" for="radio_testimonial-2">
                  <p>Avançar</p>
                  <i class="fi fi-br-angle-small-right"></i>
                </label>

              </div>
              </li>

              <li class="item">
              <input type="radio" id="radio_testimonial-2" class="btn-radio" name="basic_carousel"/>
              <div id="area-endereco" class="content-test content_testimonial-2">
                <div class="area-campos">
                  <h2 class="title-cadastro">Continuação</h2>

                  <div class="area-colunas">
                    <div class="coluna">
                      <div class="input-laranja1">
                        <i class="fi fi-br-id-badge"></i>
                        <input type="cnpj" placeholder="CNPJ" required name="cnpj" onkeyup="formatCNPJ(this)" maxlength="18"/>
                      </div>

                      <div class="input-laranja1">
                        <i class="fi fi-br-file-invoice"></i>
                        <input type="cnas" placeholder="CNAS" required name="cnas"/>
                      </div>

                      <div class="input-laranja1">
                        <i class="fi fi-br-diploma"></i>
                        <input type="cebas" placeholder="CEBAS" id="cebas" name="cebas"/>
                      </div>

                      <div class="input-laranja1">
                        <i class="fi fi-br-search-location"></i>
                        <input type="text" placeholder="CEP" id="cep" onblur="pesquisacep(this.value);" onkeyup="formatCEP(this)" maxlength="9" required name="cep" />
                      </div>

                      <div class="input-laranja1">
                        <i class="fi fi-sr-map-marker"></i>
                        <input type="text" placeholder="Estado" id="uf" name="estado"/>
                      </div>
                    </div>

                    <div class="coluna">
                      <div class="input-laranja1">
                        <i class="fi fi-sr-map-marker"></i>
                        <input type="text" placeholder="Cidade" id="cidade" name="cidade"/>
                      </div>

                      <div class="input-laranja1">
                        <i class="fi fi-sr-map-marker"></i>
                        <input type="bairro" placeholder="Bairro" id="bairro" name="bairro"/>
                      </div>

                      <div class="input-laranja1">
                        <i class="fi fi-sr-map-marker"></i>
                        <input type="text" placeholder="Logradouro" id="rua" name="logradouro" />
                      </div>

                      <div class="input-laranja1">
                        <i class="fi fi-sr-map-marker"></i>
                        <input type="text" placeholder="Número" id="numero" name="numero" />
                      </div>

                      <div class="input-laranja1">
                        <i class="fi fi-sr-map-marker"></i>
                        <input type="text" placeholder="Complemento (opcional)" minlength="0" name="complemento" />
                      </div>
                    </div>
                  </div>

                  <div class="botoes">
                    <label class="label_testimonial-1 btn-label" for="radio_testimonial-1">
                      <i class="fi fi-br-angle-small-left"></i>
                      <p>Voltar</p>
                    </label>
                  
                    <div class="area-btn">
                      <input type="submit" value="Cadastrar" class="btn-lado-laranja" />
                    </div>
                  </div>

                </div>
              </div>
              </li>

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
                if (isset($_SESSION['cebas_existente'])) :
              ?>
                <p>CEBAS já cadastrado!</p>
              <?php
                endif;
                unset($_SESSION['cebas_existente']);
              ?>

              <?php
                if (isset($_SESSION['cnas_existente'])) :
              ?>
                <p>CNAS já cadastrado!</p>
              <?php
                endif;
                unset($_SESSION['cnas_existente']);
              ?>

              <?php
                if (isset($_SESSION['cnpj_invalido'])) :
              ?>
                <p>CNPJ inválido!</p>
              <?php
                endif;
                unset($_SESSION['cnpj_invalido']);
              ?>

              <?php
                if (isset($_SESSION['arquivo_invalido'])) :
              ?>
                <p>Arquivo muito grande! Max: 2MB</p>
              <?php
                endif;
                unset($_SESSION['arquivo_invalido']);
              ?>

              <?php
                if (isset($_SESSION['error_arquivo'])) :
              ?>
                <p>Falha ao enviar o arquivo!</p>
              <?php
                endif;
                unset($_SESSION['error_arquivo']);
              ?>

              <?php
                if (isset($_SESSION['extensao_invalida'])) :
              ?>
                <p>Tipo de arquivo não aceito</p>
              <?php
                endif;
                unset($_SESSION['extensao_invalida']);
              ?>

              <?php
                if (isset($_SESSION['erro_exito'])) :
              ?>
                <p>Erro ao enviar o arquivo!</p>
              <?php
                endif;
                unset($_SESSION['erro_exito']);
              ?>

            </ul>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>É novo por aqui?</h3>
            <p>Venha conosco e faça parte!</p>
            <button class="btn transparent" id="sign-up-btn">Cadastre-se</button>
          </div>
          <img class="enfeite1-azul" src="images/mancha-fundo.png" alt="">
          <img src="images/img-pet-azul.png" class="image-pet-azul" alt="" />
        </div>

        <div class="panel right-panel">
          <div class="content">
            <img class="mancha-laranja" src="images/mancha-fundo.png" alt="">
            <h3>Já tem cadastro?</h3>
            <p>Faça seu Login por aqui!</p>
            <button class="btn transparent" id="sign-in-btn">Entre</button>
          </div>
          <img src="images/fundo-pet-laranja.png" class="image" alt="" />
        </div>
      </div>
    </div>


    <!-- Links JS -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>

  </body>
</html>
