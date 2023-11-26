<?php
include('./conexao.php');
session_start();

$origem = $_GET['type'];

if ($origem == 1) {
    $idong = $_SESSION['id-ong'];

    $stmt = $pdo->prepare("SELECT DISTINCT tbUsuario.idUsuario as id, nomeUsuario as nome, fotoUsuario as foto FROM tbMensagem
                            INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbMensagem.idUsuario
                            WHERE idOng = ?");
    $stmt->bindValue(1, $idong);
    $stmt->execute();

    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $idusuario = $_SESSION['id'];

    $stmt = $pdo->prepare("SELECT DISTINCT tbOng.idOng as id, nomeOng as nome, fotoOng as foto FROM tbMensagem
                            INNER JOIN tbOng ON tbOng.idOng = tbMensagem.idOng
                            WHERE idUsuario = ?");
    $stmt->bindValue(1, $idusuario);
    $stmt->execute();

    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

echo json_encode($dados);
