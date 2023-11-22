<?php
    include('conexao.php');
    include('cadastro.php');
    $id = $_GET['id'];
    

    $delete2 = $mysqli->prepare("DELETE FROM tbfotoCampanha WHERE idCampanha='$id'");
    $delete2->execute();

    $delete = $mysqli->prepare("DELETE FROM tbCampanha WHERE idCampanha='$id'");
    $delete->execute();

    if($delete && $delete2):
        header("Location: ../campanhas.php#area-cards");
    endif;
?>