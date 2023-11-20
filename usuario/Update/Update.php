<?php
include("../config/config.php");
include_once('../conexao/conexao.php');

if (isset($_POST['update'])) { 

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $cep = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

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


    $sqlUsuario = "UPDATE tbUsuario SET nomeUsuario = '$nome', informacaoCampanha = '$desc', cepUsuario = '$cep', logradouroUsuario = '$logradouro', estadoUsuario = '$estado', numLocalUsuario = '$numero', cidadeUsuario = '$cidade', complementoUsuario = '$complemento', bairroUsuario = '$bairro' WHERE idUsuario = '$id'";
}

?> 