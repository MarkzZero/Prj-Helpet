<?php
    include('conexao.php');
    include('cadastro.php');
    $id = $_GET['id'];
    

    $delete2 = $mysqli->prepare("DELETE FROM tbfotoAnimal WHERE idAnimal='$id'");
    $delete2->execute();

    $delete = $mysqli->prepare("DELETE FROM tbAnimal WHERE idAnimal='$id'");
    $delete->execute();

    if($delete && $delete2):
        header("Location: ../pets.php#area-tabela");
    endif;
?>