<?php 
include('../conexao/conexao.php');

include('../Login/login.php');

$id = $_SESSION['id'];

$sqlUsuario = $mysqli->query("SELECT * FROM tbUsuario WHERE idUsuario = '$id'");

$resultRaca = $mysqli->query("SELECT especieRaca FROM tbRaca ") or die($mysqli->error);

$sqlPreferencia = $mysqli->query("SELECT * FROM tbPrefeUsuario WHERE idUsuario = '$id'");

$result = $mysqli->query("SELECT idUsuario, nomeUsuario, cpfUsusario, emailUsuario, senhaUsuario, bairroUsuario, logradouroUsuario, cidadeUsuario, numLocalUsuario, complementoUsuario, estadoUsuario, cepUsuario, fotoUsuario FROM tbUsuario WHERE idUsuario = '$id' ORDER BY idUsuario") or die($mysqli->error);

$resultCampanha = $mysqli->query("SELECT * FROM tbCampanha ORDER BY idCampanha DESC");
$resultRaca = $mysqli->query("SELECT tbprefeUsuario.tipoPet as 'preferencia', tbRaca.nomeRaca as 'nome_raca' FROM tbPrefeUsuario INNER JOIN tbRaca ON tbPrefeUsuario.idRaca = tbRaca.idRaca WHERE idUsuario = '$id' ORDER BY idPrefeUsuario DESC") or die($mysqli->error);

$resultCamp = mysqli_fetch_assoc($resultCampanha);

$resultOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.nomeOng as 'ong' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbOng.idOng = '$resultCamp[idOng]'");

$fotoOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.fotoOng as 'foto' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbOng.idOng = '$resultCamp[idOng]'");



?> 