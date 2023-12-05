<?php
include('./conexao.php');
session_start();

$origem = $_POST['type'];

if ($origem == 1) {
    $idong = $_SESSION['id-ong'];
    $idusuario = $_POST['id'];
} else {
    $idong = $_POST['id'];
    $idusuario = $_SESSION['id'];
}

$stmt = $pdo->prepare("SELECT textoMensagem, TIME_FORMAT(horaMensagem, '%H:%i') as horaMensagem, origemMensagem, idOng, idUsuario FROM tbMensagem
                        WHERE idUsuario = ? AND idOng = ?");
$stmt->bindValue(1, $idusuario);
$stmt->bindValue(2, $idong);
$stmt->execute();

$dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($dados);