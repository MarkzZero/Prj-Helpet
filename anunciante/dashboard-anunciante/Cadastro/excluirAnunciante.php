<?php
include("../config/conexao.php");
session_start();
$id = $_POST['id'];
$senha = $_POST['senha'];

$selectOng = "SELECT * FROM tbAnunciante WHERE idAnunciante = '$id'";
$query = $mysqli->prepare($selectOng);  
$query->execute();

$result = $query->get_result()->fetch_assoc();

if ($result && password_verify($senha, $result['senhaAnunciante'])) {
    // Verifique se há registros antes de excluir

    // Corrija a consulta DELETE para ligcampanunci e remova o parâmetro 'i'
    $deleteAnunc = $mysqli->prepare("DELETE FROM tbAnunciante WHERE idAnunciante = '$id'");
    if ($deleteAnunc->execute() === false) {
        die('Erro na exclusão de tbAnunciante: ' . $mysqli->error);
    }

    $deleteCampa = $mysqli->prepare("DELETE FROM ligcampanunci WHERE idAnunciante = '$id'");
    if ($deleteCampa->execute() === false) {
        die('Erro na exclusão de ligcampanunci: ' . $mysqli->error);
    }

    $deleteAnuncio = $mysqli->prepare("DELETE FROM tbAnuncio WHERE idAnunciante = '$id'");
    if ($deleteAnuncio->execute() === false) {
        die('Erro na exclusão de tbAnuncio: ' . $mysqli->error);
    }

    $deleteTelefone = $mysqli->prepare("DELETE FROM tbTelefoneAnunciante WHERE idAnunciante = '$id'");

    if ($deleteTelefone->execute() === false) {
        die('Erro na exclusão de tbTelefoneAnunciante: ' . $mysqli->error);
    }

    session_destroy();
    header("Location: ../../index.php");
} else {
    $_SESSION['erro'] = true;
    header("Location: ../configuracao.php");
    exit;
}
?>
