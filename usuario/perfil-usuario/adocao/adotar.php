<?php
    include('../../conexao/conexao.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['adotar'])){
        $idAnimal = filter_input(INPUT_POST, 'idAnimal', FILTER_SANITIZE_NUMBER_INT);
        $idUsuario = filter_input(INPUT_POST, 'idUsuario', FILTER_SANITIZE_NUMBER_INT);
        $idOng = filter_input(INPUT_POST, 'idOng', FILTER_SANITIZE_NUMBER_INT);

        $sqlAdotar = "INSERT INTO tbAdocao(dataSolicitacao, idAnimal, idUsuario, idOng) VALUES(NOW(), '$idAnimal', '$idUsuario', '$idOng')";
        if($mysqli->query($sqlAdotar) == true){
            header("Location: ../index.php");
        }else{
            echo "Erro na realização do código: ". $mysqli->error;
        }
    }

?>