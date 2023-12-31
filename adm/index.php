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

        <title>Login do ADM</title>
        <link rel="icon" href="./images/logo-azul.png">
    </head>
    <body>

    <!-- LOGIN ADM -->
        <div class="pata">
            <img src="images/pata.png">
        </div>
        
        <div class="patinhas">
            <img src="images/patinhas.png">
        </div>

        <div class="bolinhas">
            <img src="images/bolinhas.png">
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
                        
                        <h2>ADM</h2>

                        <br>

                        <form action="login/login.php" method="post">
                            <div class="input_box">
                                <input type="text" name="usuario" placeholder="Usuário">
                                <i class="bi bi-person-circle"></i>
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
                                <?php 
                                    if(isset($_SESSION['nao_autenticado'])):
                                ?>
                                <p class="mensagem">Usuário e/ou senha incorretos!</p>
                                <?php 
                                    endif;
                                    unset($_SESSION['nao_autenticado']);
                                ?>
                                <?php 
                                    if(isset($_SESSION['invalido'])):
                                ?>
                                <p class="mensagem">Usuário inválido</p>
                                <?php 
                                    endif;
                                    unset($_SESSION['invalido']);
                                ?>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <!-- Links JS -->
        <script src="js/script.js"></script>

    </body>
</html>
