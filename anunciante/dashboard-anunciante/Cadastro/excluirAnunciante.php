<?php
include("../config/conexao.php");
session_start();
$id = $_POST['id'];
$senha = $_POST['senha'];

$selectOng = "SELECT * FROM tbOng WHERE idOng = ?";
$query = $mysqli->prepare($selectOng);
$query->bind_param("i", $id);
$query->execute();

$result = $query->get_result()->fetch_assoc();

if ($result && password_verify($senha, $result['senhaAnunciante'])) {
    $deleteCampa = $mysqli->prepare("DELETE FROM ligcampanunci WHERE idAnunciante = ?");
    $deleteCampa->bind_param("i", $id);
    $deleteCampa->execute();

    $deleteAnunc = $mysqli->prepare("DELETE FROM tbAnunciante WHERE idAnunciante = ?");
    $deleteAnunc->bind_param("i", $id);
    $deleteAnunc->execute();

    $deleteAnuncio = $mysqli->prepare("DELETE FROM tbAnuncio WHERE idAnunciante = ?");
    $deleteAnuncio->bind_param("i", $id);
    $deleteAnuncio->execute();

    $deleteTelefone = $mysqli->prepare("DELETE FROM tbTelefoneAnunciante WHERE idAnunciante = ?");
    $deleteTelefone->bind_param("i", $id);
    $deleteTelefone->execute();

    session_destroy();
    header("Location: ../../index.php");
} else {
    $_SESSION['erro'] = true;
    header("Location: ../configuracao.php");
    exit;
}
?>
