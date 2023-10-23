<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <title>Alterar senha</title>
    <link rel="shortcut icon" href="../../images/logo-azul.png" type="image/x-icon">

    <!-- Links CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Alterar a senha -->
    <section id="alterar-senha">
        <br><br><br>
        <div id="area-alterar-senha">
            <div class="secao">
                <div class="secao-form">
                    <div>
                        <h1>Alterar a senha: </h1>

                        <form method="POST" action="./senha.php">
                            <div class="form-row">
                                <div class="col">
                                    <input type="name" id="nome" class="form-control" placeholder="Nome" name="Nome">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="password" id="senha" class="form-control" placeholder="Senha" name="Senha">
                                    <i class="fi fi-sr-lock"></i>
                                    <i class="fi fi-ss-eye" id="btn-senha" onclick="mostrarSenha()"></i>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="password" id="confirmSenha" class="form-control" placeholder="Confirmar senha" name="ConfirmSenha">
                                    <i class="fi fi-sr-lock"></i>
                                    <i class="fi fi-ss-eye" id="btn-senha" onclick="mostrarSenha()"></i>
                                </div>
                            </div>

                            <button class="box-btn" name="Enviar">
                                <span>Enviar</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>