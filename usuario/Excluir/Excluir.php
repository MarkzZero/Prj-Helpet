<?php
include("../config/config.php");

$id = $_SESSION['id'];

$deleteTelefone = $mysqli->query("DELETE FROM tbTelefoneUsuario WHERE idUsuario = $id") or die($mysqli->error);

$deletepref = $mysqli->query("DELETE FROM tbPrefeUsuario WHERE idUsuario = $id") or die($mysqli->error);

$delete = $mysqli->query("DELETE FROM tbUsuario WHERE idUsuario = $id") or die($mysqli->error);
?> 