<?php
include("../config/config.php");
include_once("../conexao/conexao.php");

if (isset($_POST['update'])) { 

    
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

    // Campos de Endereço
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
    $logradouro = mysqli_real_escape_string($mysqli, trim($_POST['logradouro']));
    $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
    $cidade = mysqli_real_escape_string($mysqli, trim($_POST['cidade']));
    $complemento = mysqli_real_escape_string($mysqli, trim($_POST['complemento']));
    $bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));


    //$arquivo = $_FILES['image'];
    //$foto = $_POST['foto'];

    echo $id;

    $sqlUsuario = "UPDATE tbUsuario SET nomeUsuario = '$nome',  emailUsuario = '$email', cepUsuario = '$cep', logradouroUsuario = '$logradouro', estadoUsuario = '$estado', numLocalUsuario = '$numero', cidadeUsuario = '$cidade', complementoUsuario = '$complemento', bairroUsuario = '$bairro' WHERE idUsuario = '$id'";

    if ($mysqli->query($sqlUsuario) == true) {
        header("location: ../perfil-usuario/edit-user.php");
        $_SESSION['nome'] = $nome;
    } else {
        echo "Erro ao inserir os dados";
        $mysqli->error;
    }
    $mysqli->close();
}

?> 