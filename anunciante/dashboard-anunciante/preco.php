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

        <title>Tabela de Preços</title>
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

                <div class="area-pesquisa">
                    <div class="titulo-pagina">
                        <span>Tabelas de Preços</span>
                    </div>
                </div>

                <div class="img-logo">
                    <a href="../../index.php"><img src="images/logo-azul.png" alt=""></a>
                </div>
            </div>

            <!-- Tabela de preços -->


            <div class="container">
                <div class="colum1">
                    <div class="fundo-title-basic">
                        <p class="title-preco">Básico</p>
                    </div>
                   <div class="conteudo"> 
                        <div class="img-visto">
                            <img src="images/img-valid-preço.png" alt="">
                            <div class="desc-valores">
                            <p>2 fotos no sistema.</p>
                            </div>
                        </div>
                         
                        <div class="img-visto">
                            <img src="images/img-valid-preço.png" alt="">
                            <div class="desc-valores">
                            <p>1 mês online na web.</p>
                            </div>
                        </div>
                         
                        <div class="img-visto">
                            <img src="images/img-valid-preço.png" alt="">
                            <div class="desc-valores">
                            <p>Anúncio de rodapé.</p>
                            </div>
                        </div>  

                         <div class="preco">
                            <p>R$ 20,00</p>
                         </div>
                         
                         <div class="enfeite1">
                            <img src="images/img-enfeite1.png" alt="">
                         </div>
                    </div>
                </div>

                <div class="colum2">
                <div class="fundo-title-inter">
                        <p class="title-preco">Intermediário</p>
                    </div>
                
                    <div class="conteudo"> 
                        <div class="img-visto">
                            <img src="images/img-valid-preço.png" alt="">
                            <div class="desc-valores">
                            <p>4 fotos no sistema.</p>
                            </div>
                        </div>
                         
                        <div class="img-visto">
                            <img src="images/img-valid-preço.png" alt="">
                            <div class="desc-valores">
                            <p>6 mês online na web.</p>
                            </div>
                        </div>
                         
                        <div class="img-visto">
                            <img src="images/img-valid-preço.png" alt="">
                            <div class="desc-valores">
                            <p>Anúncio com banner.</p>
                            </div>
                        </div>  

                         <div class="preco2">
                            <p>R$ 50,00</p>
                         </div>
                         
                         <div class="enfeite2">
                            <img src="images/img-enfeite2.png" alt="">
                         </div>
                    </div>
                </div>

                <div class="colum3">
                <div class="fundo-title-premi">
                        <p class="title-preco">Premium</p>
                    </div>
                    <div class="conteudo"> 
                        <div class="img-visto">
                            <img src="images/img-valid-preço.png" alt="">
                            <div class="desc-valores">
                            <p>8 fotos no sistema.</p>
                            </div>
                        </div>
                         
                        <div class="img-visto">
                            <img src="images/img-valid-preço.png" alt="">
                            <div class="desc-valores">
                            <p>1 ano online na web.</p>
                            </div>
                        </div>
                         
                        <div class="img-visto">
                            <img src="images/img-valid-preço.png" alt="">
                            <div class="desc-valores">
                            <p>Anúncio de rodapé e banner.</p>
                            </div>
                        </div>  

                         <div class="preco3">
                            <p>R$ 150,00</p>
                         </div>
                         
                         <div class="enfeite3">
                            <img src="images/img-enfeite3.png" alt="">
                         </div>
                    </div>
                </div>
            </div>
          
        </div>

        <!-- Links JS -->
        <script src="js/script.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>