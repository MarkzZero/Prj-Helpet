<?php
    include('../config/conexao.php');
    include('cadastro.php');
    $id = $_GET['id'];
    

    $delete = $mysqli->prepare("DELETE FROM tbAnuncio WHERE idAnuncio='$id'");
    $delete->execute();

    if($delete):
        header("Location: ../index.php#area-cards");
    endif;
?>