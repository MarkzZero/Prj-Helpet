<?php
    include('conexao.php');
    include('cadastro.php');
    $id = $_GET['id'];
    

    $delete2 = $mysqli->prepare("DELETE FROM tbfotosAnuncio WHERE idAnuncio='$id'");
    $delete2->execute();

    $delete = $mysqli->prepare("DELETE FROM tbAnuncio WHERE idAnuncio='$id'");
    $delete->execute();

    if($delete && $delete2):
        header("Location: ../index.php#area-cards");
    endif;
?>