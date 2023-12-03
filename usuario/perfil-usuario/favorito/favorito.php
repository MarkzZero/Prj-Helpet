<?php
include('../../conexao/conexao.php');

$idAnimal = $_POST['animal_id'];
$idUsuario = $_SESSION['id'];


$sql = "INSERT INTO tbFavorito(idAnimal, idUsuario) VALUES ('$idAnimal', '$idUsuario')";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ii", $idUsuario, $idAnimal);
$stmt->execute();

$stmt->close();
$mysqli->close();   
?>