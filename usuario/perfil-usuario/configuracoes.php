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

        <header>
            <!-- Voltar para a página anterior -->
            <a href="index.php">
                <i class="fi fi-br-angle-small-left voltar"></i>
            </a>

            <h2>Configurações</h2>

            <div class="info-user">
                <img src="images/foto-user.png">
                <h4>Camila Martins</h4>
                <p>camila@gmail.com</p>
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

            <div class="pata-amarela">
                <img src="images/pata-amarela.png">
            </div>

        </header>

        <?php require "excluir-user.php"; ?>

        <!-- Links JS -->
        <script src="js/script.js"></script>

    </body>
</html>