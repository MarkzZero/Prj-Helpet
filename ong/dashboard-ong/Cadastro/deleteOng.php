<?php
include("../config/conexao.php");
session_start();
$id = $_POST['id'];
$senha = $_POST['senha'];

$selectOng = "SELECT * FROM tbOng WHERE idOng = '$id'";
$query = $mysqli->prepare($selectOng);
$query->execute();

$result = $query->get_result()->fetch_assoc();

if ($result && password_verify($senha, $result['senhaOng'])) {
    // Verifique se há registros antes de excluir

    // Corrija a consulta DELETE para ligcampanunci e remova o parâmetro 'i'
    $deleteAdocao = $mysqli->prepare("DELETE FROM tbAdocao WHERE idOng = '$id'");
    if ($deleteAdocao->execute() === false) {
        die('Erro na exclusão de tbAdocao: ' . $mysqli->error);
    }

    $deleteAnimal = $mysqli->prepare("DELETE FROM tbAnimal WHERE idOng = '$id'");
    if ($deleteAnimal->execute() === false) {
        die('Erro na exclusão de tbAnimal: ' . $mysqli->error);
    }

    $deleteApadrinhamento = $mysqli->prepare("DELETE FROM tbApadrinhamento WHERE idOng = '$id'");
    if ($deleteApadrinhamento->execute() === false) {
        die('Erro na exclusão de tbApadrinhamento: ' . $mysqli->error);
    }

    $deleteFavoritos = $mysqli->prepare("DELETE FROM tbfavoritocampanha WHERE idCampanha IN (SELECT idCampanha FROM tbCampanha WHERE idOng = '$id')");
    if ($deleteFavoritos->execute() === false) {
        die('Erro na exclusão de tbfavoritocampanha: ' . $mysqli->error);
    }

    $deleteFotos = $mysqli->prepare("DELETE FROM tbfotocampanha WHERE idCampanha IN (SELECT idCampanha FROM tbCampanha WHERE idOng = '$id')");
    if ($deleteFotos->execute() === false) {
        die('Erro na exclusão de tbfotocampanha: ' . $mysqli->error);
    }

    $deleteCampanha = $mysqli->prepare("DELETE FROM tbCampanha WHERE idOng = '$id'");
    if ($deleteCampanha->execute() === false) {
        die('Erro na exclusão de tbCampanha: ' . $mysqli->error);
    }

    $deleteChat = $mysqli->prepare("DELETE FROM tbChat WHERE idOng = '$id'");
    if ($deleteChat->execute() === false) {
        die('Erro na exclusão de tbChat: ' . $mysqli->error);
    }

    $deleteDoacao = $mysqli->prepare("DELETE FROM tbDoacao WHERE idOng = '$id'");
    if ($deleteDoacao->execute() === false) {
        die('Erro na exclusão de tbDoacao: ' . $mysqli->error);
    }

    $deleteMensagem = $mysqli->prepare("DELETE FROM tbMensagem WHERE idOng = '$id'");
    if ($deleteMensagem->execute() === false) {
        die('Erro na exclusão de tbMensagem: ' . $mysqli->error);
    }

    $deleteOng = $mysqli->prepare("DELETE FROM tbOng WHERE idOng = '$id'");
    if ($deleteOng->execute() === false) {
        die('Erro na exclusão de tbOng: ' . $mysqli->error);
    }

    $deleteTelefone = $mysqli->prepare("DELETE FROM tbTelefoneOng WHERE idOng = '$id'");
    if ($deleteTelefone->execute() === false) {
        die('Erro na exclusão de tbTelefoneOng: ' . $mysqli->error);
    }


    session_destroy();
    header("Location: ../../index.php");
} else {
    $_SESSION['erro'] = true;
    header("Location: ../configuracoes.php");
    exit;
}
