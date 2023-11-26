<?php
include('./conexao.php');
session_start();

$id = $_SESSION['id-ong'];

$stmt = $pdo->prepare("INSERT INTO tbMensagem(textoMensagem, horaMensagem, origemMensagem, idUsuario, idOng)
                                VALUES(?, current_timestamp(), ?, ?, ?)");

$texto = $_POST['conteudo'];
$origem = $_POST['type'];
if ($origem == 1) {
    $idong = $_SESSION['id-ong'];
    $idusuario = $_POST['id'];
} else {
    $idong = $_POST['id'];
    $idusuario = $_SESSION['id'];
}

$stmt->bindValue(1, $texto);
$stmt->bindValue(2, $origem);
$stmt->bindValue(3, $idusuario);
$stmt->bindValue(4, $idong);
$stmt->execute();

?>