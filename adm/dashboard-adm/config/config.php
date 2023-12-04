<?php
include('conexao.php');

//$id = $_SESSION['id'];

$result = $mysqli->query("SELECT idOng, nomeOng, capacidadeOng, emailOng, senhaOng, logradouroOng, 
                                     numLogOng, complementoOng, estadoOng, bairroOng, cnpjOng, cnasOng, cebasOng, 
                                     cepOng, fotoOng FROM tbOng ORDER BY idOng ASC") or die($mysqli->error);

$gatoCount = $mysqli->query("SELECT COUNT(idAnimal) as total_gatos from tbAnimal WHERE especieAnimal = 'Gato' ") or die($mysqli->error);
$row = mysqli_fetch_array($gatoCount);
$countGatos = $row['total_gatos'];
//echo json_encode($countGatos);

//Usei pra Inserir os valores nos graficos
$cachorroCount = $mysqli->query("SELECT COUNT(idAnimal) as total_cachorro from tbAnimal WHERE especieAnimal = 'Cachorro' ") or die($mysqli->error);
$row = mysqli_fetch_array($cachorroCount);
$countCachorro = $row['total_cachorro'];
//echo json_encode($countCachorro);

$petsCount = $mysqli->query("SELECT COUNT(idAnimal) FROM tbAnimal") or die($mysqli->error);
$row = mysqli_fetch_array($petsCount);
$petsResult = $row[0];

$campanhasCount = $mysqli->query("SELECT COUNT(idCampanha) FROM tbCampanha") or die($mysqli->error);
$row = mysqli_fetch_array($campanhasCount);
$campanhasResult = $row[0];

$padrinCount = $mysqli->query("SELECT COUNT(idApadrinhamento) FROM tbApadrinhamento ") or die($mysqli->error);
$row = mysqli_fetch_array($padrinCount);
$padrinResult = $row[0];

$adocaoCount = $mysqli->query("SELECT COUNT(idAdocao) FROM tbAdocao WHERE STATUS = 'aprovada'") or die($mysqli->error);
$row = mysqli_fetch_array($adocaoCount);
$adocaoResult = $row[0];

$anuncioCount = $mysqli->query("SELECT COUNT(idAnuncio) FROM tbAnuncio") or die($mysqli->error);
$row = mysqli_fetch_array($anuncioCount);
$anuncioResult = $row[0];

$userCount = $mysqli->query("SELECT COUNT(idUsuario) as total_usuarios FROM tbUsuario") or die($mysqli->error);
$row = mysqli_fetch_array($userCount);
$userResult = $row['total_usuarios'];

$anuncianteCount = $mysqli->query("SELECT COUNT(idAnunciante) as total_anunciantes FROM tbAnunciante") or die($mysqli->error);
$row = mysqli_fetch_array($anuncianteCount);
$anuncianteResult = $row['total_anunciantes'];

$ongCount = $mysqli->query("SELECT COUNT(idOng) as total_ongs FROM tbOng") or die($mysqli->error);
$row = mysqli_fetch_array($ongCount);
$ongsResult = $row['total_ongs'];
?>