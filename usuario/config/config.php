<?php 
include('../conexao/conexao.php');

include('../Login/login.php');

$id = $_SESSION['id'];

$resultRaca = $mysqli->query("SELECT especieRaca FROM tbRaca ") or die($mysqli->error);

$result = $mysqli->query("SELECT idUsuario, nomeUsuario, cpfUsusario, emailUsuario, senhaUsuario, bairroUsuario, logradouroUsuario, cidadeUsuario, numLocalUsuario, complementoUsuario, estadoUsuario, cepUsuario, fotoUsuario FROM tbUsuario WHERE idUsuario = '$id' ORDER BY idUsuario") or die($mysqli->error);



?> 