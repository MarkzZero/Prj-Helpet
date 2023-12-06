<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="images/logo-helpet-azul.ico" type="image/x-icon">   
        
        <!-- Configuração de Media query -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/estiloAdm.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <title>Login do Anunciante</title>
        <link rel="icon" href="./images/logo-azul.png">
    </head>
    <body>

    <!-- LOGIN ADM -->
        <div class="pata">
            <img src="images/pata.png">
        </div>
        
        <div class="patinhas">
            <img src="images/patinhas-amarela.png">
        </div>

        <div class="bolinhas">
            <img src="images/gato.png">
        </div>

        <div class="circulo">
            <img src="images/circulo.png">
        </div>
 
        <div class="container">
            <div class="area-login">
                <div class="login_body">
        
                    <div class="login_box">
                        
                        <div class="logo-adm">
                            <a href="../index.php"><img src="images/logo-azul.png"></a>
                        </div>
                        
                        <h2>Anunciante</h2>

                        <br>

                        <form action="login/login.php" method="POST">
                            <div class="input_box">
                                <input type="text" name="email" placeholder="E-mail">
                                <i class="fi fi-br-circle-user"></i>
                            </div>

                            <div class="input_box-senha">
                                <input id="senha" type="password" name="senha" placeholder="Senha">
                                <div class="input_box-senha-cad"><i class="fi fi-sr-lock"></i></div>
                                <i class="fi fi-bs-eye" id="btn-senha" onclick="mostrarSenha()"></i>
                            </div>

                            <div>
                                <button class="submit">
                                    Entrar
                                </button>
                                    <!-- Alertas -->
                                    <?php
                                    if (isset($_SESSION['nao_autenticado'])) :
                                    ?>
                                    <p>Email ou senha incorretos!</p>
                                    <?php
                                    endif;
                                    unset($_SESSION['nao_autenticado']);
                                    ?>
                                    <?php
                                    if (isset($_SESSION['incompleto'])) :
                                    ?>
                                    <p>Dados incompletos!</p>
                                    <?php
                                    endif;
                                    unset($_SESSION['incompleto']);
                                    ?>
                            </div>
                            
                        </form>
                        
                    </div>
                   
                </div>
                <div id="cadastre-se">
                    <h3 id="txt-cad">Não tem uma conta?</h3>
                    <a href="./cadastro.php">
                        <button class="cadastrar">Cadastre-se</button>
                    </a>
                </div>
            </div>
        </div>

        <script src="js/script.js"></script>
        <script src="js/mostrar-senha.js"></script>

    </body>
</html>
