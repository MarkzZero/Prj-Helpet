<?php
    include('../config/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home</title>
        <link rel="icon" href="images/logo-azul.png">

        <!-- Links CSS -->
        <link rel="stylesheet" href="css/principal.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/modais.css">
        <link rel="stylesheet" href="css/cards.css">
        <link rel="stylesheet" href="css/perfil.css">
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src="images/logo-azul.png">
            </div>
            <ul>
                <li><a href="index.php" id="atual"><i class="fi fi-br-home"></i></a></li>
                <li><a href="notificacoes.php"><i class="fi fi-br-bell"></i></a></li>
                <li><a href="Chat.php"><i class="fi fi-br-messages"></i></a></li>
                <li><a href="perfil.php"><i class="fi fi-br-circle-user"></i></a></li>
            </ul>
        </nav>

        <div class="container1">
            <div class="area-pesquisa-home">
                <img src="images/bolinhas2.png">
                <div class="search">
                    <i class="fi fi-br-search"></i>
                    <input type="text" placeholder="Pesquisar">
                </div>
                <a href="configuracoes.php"><i class="fi fi-sr-settings config"></i></a>
            </div>

            <div class="carousel-container">
                <div class="carousel-wrapper">
                    <div class="slide"><img src="images/banner1.png"></div>
                    <div class="slide"><img src="images/banner2.png"></div>
                    <div class="slide"><img src="images/banner3.png"></div>
                </div>
                <button class="prev" onclick="prevSlide()"><i class="fi fi-br-angle-small-left"></i></button>
                <button class="next" onclick="nextSlide()"><i class="fi fi-br-angle-small-right"></i></button>
            </div>

            <div class="area-cards cards-home">
                <?php require "card-pet.php"; ?>
                <?php require "card-pet.php"; ?>
                <?php require "card-pet.php"; ?>
                <?php require "card-pet.php"; ?>
            </div>


            <div class="area-conteudo">
                <?php require "post-campanha.php"; ?>
                <?php require "post-campanha.php"; ?>
            </div>

            <div class="area-cards cards-home">
                <?php require "card-pet.php"; ?>
                <?php require "card-pet.php"; ?>
                <?php require "card-pet.php"; ?>
                <?php require "card-pet.php"; ?>
            </div>

            <div class="area-conteudo">
                <?php require "post-anuncio.php"; ?>
                <?php require "post-anuncio.php"; ?>
            </div>
        </div>


        <!-- Sugestões e Categorias -->
        <?php require "menu-right.php"; ?>
        
        
        <!-- Links JS -->
        <script src="js/script.js"></script>
        <script src="js/carrossel.js"></script>
        <script src="js/modais.js"></script>

    </body>
</html>
