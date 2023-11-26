<?php 
include('../conexao/conexao.php');

include('../Login/login.php');

$id = $_SESSION['id'];

$resultRaca = $mysqli->query("SELECT especieRaca FROM tbRaca ") or die($mysqli->error);

$result = $mysqli->query("SELECT idUsuario, nomeUsuario, cpfUsusario, emailUsuario, senhaUsuario, bairroUsuario, logradouroUsuario, cidadeUsuario, numLocalUsuario, complementoUsuario, estadoUsuario, cepUsuario, fotoUsuario FROM tbUsuario WHERE idUsuario = '$id' ORDER BY idUsuario") or die($mysqli->error);

$resultCampanha = $mysqli->query("SELECT * FROM tbCampanha ORDER BY idCampanha DESC");

$resultOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.nomeOng as 'ong' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng");

$fotoOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.fotoOng as 'foto' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng");



?> 