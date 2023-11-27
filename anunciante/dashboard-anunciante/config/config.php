<?php 
    include('conexao.php');

    //$id = $_SESSION['id'];
        
    $result = $mysqli->query("SELECT nomeAnuncio, descAnuncio, dataInicioAnuncio, dataTerminoAnuncio, fotoAnuncio, idAnunciante FROM tbAnuncio") or die($mysqli->error);

?> 