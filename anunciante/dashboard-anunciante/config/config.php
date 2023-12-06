<?php 
    include_once('conexao.php');
    include(__DIR__ . '/../../Login/login.php');

    $id = $_SESSION['id-anunciante'];
        
    $result = $mysqli->query("SELECT * FROM tbAnuncio WHERE idAnunciante = '$id'") or die($mysqli->error);

    $resultAnunciante = $mysqli->query("SELECT * FROM tbAnunciante WHERE idAnunciante = '$id'") or die($mysqli->error);

?> 