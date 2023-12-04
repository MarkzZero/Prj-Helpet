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

        <div id="container" class="container1">
            <div class="area-pesquisa-home">
                <img src="images/bolinhas2.png">
                <div class="search">
                    <i class="fi fi-br-search"></i>
                    <input type="text" placeholder="Pesquisar" id="searchbar2" name="pesquisa" onkeyup="search_animal2()">
                    <div class="area-filtros">
                        
                    </div>
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

            <div class="area-pets">
                <p>Pets que precisam de você</p>
                
                <div class="open-modalAdocao mostrar-todos">
                    <p>Mostrar todos</p>
                    <i class="fi fi-br-angle-small-right"></i>
                </div>
            </div>

            <div class="area-cards cards-home">
                <span class="gallery">
                    <?php require "card-pet.php"; ?>    
                </span>
            </div>

            <div class="area-conteudo">
                <?php require "post-anuncio.php"; ?>
            </div>

            

            <div class="area-conteudo">
                <?php require "post-campanha.php"; ?>
            </div>

            <div class="toggle">
                <div class="icon-seta">
                    <i class="fi fi-br-angle-small-left"></i>
                </div>
            </div>

        </div>


        <!-- Sugestões e Categorias -->
        <?php require "menu-right.php"; ?>
        
        
        <!-- Links JS -->
        <script src="js/script.js"></script>
        <script src="js/carrossel.js"></script>
        <script src="js/modais.js"></script>
        <script src="js/filtros.js"></script>
        
        <script src="js/categorias.js"></script>

    </body>
    <script>
$(document).ready(function() {
    $(".fi-rr-heart").click(function() {
        var animalId = $(this).data("animal-id");
        $(this).prop('disabled', true);

        $.ajax({
            url: "index.php",
            method: "POST",
            data: {
                animal_id: animalId,
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function() {
                $(".fi-rr-heart").prop('disabled', false);
            }
        });
    });
});
$(document).ready(function() {
    $(".fi-rr-heart").click(function() {

        var campanhaId = $(this).data("campanha-id");
        // Desabilita o botão imediatamente após o clique
        $(this).prop('disabled', true);

        $.ajax({
            url: "index.php", // Substitua pelo nome do seu arquivo PHP
            method: "POST",
            data: {
  
                campanha_id: campanhaId,
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function() {
                // Reabilita o botão após a conclusão da requisição, mesmo em caso de erro
                $(".fi-rr-heart").prop('disabled', false);
            }
        });
    });
});
$(document).ready(function() {
    $(".fi-rr-heart").click(function() {

        var anuncioId = $(this).data("anuncio-id");
        // Desabilita o botão imediatamente após o clique
        $(this).prop('disabled', true);

        $.ajax({
            url: "index.php", // Substitua pelo nome do seu arquivo PHP
            method: "POST",
            data: {
  
                anuncio_id: anuncioId,
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function() {
                // Reabilita o botão após a conclusão da requisição, mesmo em caso de erro
                $(".fi-rr-heart").prop('disabled', false);
            }
        });
    });
});
</script>
<script>
$(document).ready(function() {
    $(".fi-sr-heart").click(function() {
        var animalId = $(this).data("animal-id");
 
        // Desabilita o botão imediatamente após o clique
        $(this).prop('disabled', true);

        $.ajax({
            url: "index.php", // Substitua pelo nome do seu arquivo PHP
            method: "POST",
            data: {
                animal_id: animalId,

            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function() {
                // Reabilita o botão após a conclusão da requisição, mesmo em caso de erro
                $(".fi-rr-heart").prop('disabled', false);
            }
        });
    });
});
$(document).ready(function() {
    $(".fi-sr-heart").click(function() {
        var campanhaId = $(this).data("campanha-id");
        $(this).prop('disabled', true);

        $.ajax({
            url: "index.php",
            method: "POST",
            data: {
                campanha_id: campanhaId,
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function() {
                $(".fi-sr-heart").prop('disabled', false);
            }
        });
    });
});
$(document).ready(function() {
    $(".fi-sr-heart").click(function() {
        var anuncioId = $(this).data("anuncio-id");
        $(this).prop('disabled', true);

        $.ajax({
            url: "index.php",
            method: "POST",
            data: {
                anuncio_id: anuncioId,
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function() {
                $(".fi-sr-heart").prop('disabled', false);
            }
        });
    });
});
</script>

<script>

function search_animal2() {
        let input = document.getElementById('searchbar2').value.toLowerCase();
   
        let cards = document.querySelectorAll('.cards-home .card');

        for (let i = 0; i < cards.length; i++) {
            let card = cards[i];
    
            let nomeAnimalElement = card.querySelector('.nome h3');
            let nomeAnimal = nomeAnimalElement ? nomeAnimalElement.textContent.toLowerCase() : '';

            let matchInput = nomeAnimal.includes(input);
           
          

            if (matchInput) {
    card.style.display = "list-item";
} else {
    card.style.display = "none";
}
        }
    }

</script>
</html>
