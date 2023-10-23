<?php
    include('conexao.php');
    include('cadastro.php');
    $id = $_GET['id'];
    
    $delete = $mysqli->prepare("DELETE FROM tbCampanha WHERE idCampanha='$id'");
    $delete->execute();

    if($delete):
        header("Location: ../campanhas.php");
    endif;
?>