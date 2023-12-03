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

$preferencia = $mysqli->query("SELECT * FROM tbPrefeUsuario WHERE idUsuario = '$id'");

$prefe = mysqli_fetch_assoc($preferencia);

if($prefe['tipoPet'] == 'Sem Preferência'){
    $sqlPet = $mysqli->query("SELECT * FROM tbAnimal WHERE STATUS = 'Disponível' AND (generoAnimal = '$prefe[generoPet]' OR porteAnimal = '$prefe[portePet]' OR idadeAnimal LIKE '%$prefe[idadePet]%' OR idRaca = '$prefe[idRaca]') ORDER BY CASE WHEN  generoAnimal = '$prefe[generoPet]' THEN 0 WHEN THEN 1 ELSE 2 END, idAnimal DESC LIMIT 4 ");
}elseif($prefe['generoPet'] == 'Sem Preferência'){
    $sqlPet = $mysqli->query("SELECT * FROM tbAnimal WHERE STATUS = 'Disponível' AND (especieAnimal = '$prefe[tipoPet]' OR porteAnimal = '$prefe[portePet]' OR idadeAnimal LIKE '%$prefe[idadePet]%' OR idRaca = '$prefe[idRaca]') ORDER BY CASE WHEN especieAnimal = '$prefe[tipoPet]' THEN 0 WHEN especieAnimal = '$prefe[tipoPet]' THEN 1 ELSE 2 END, idAnimal DESC LIMIT 4 ");
}elseif($prefe['portePet'] == 'Sem Preferência'){
    $sqlPet = $mysqli->query("SELECT * FROM tbAnimal WHERE STATUS = 'Disponível' AND (generoAnimal = '$prefe[generoPet]' OR especieAnimal = '$prefe[tipoPet]' OR idadeAnimal LIKE '%$prefe[idadePet]%' OR idRaca = '$prefe[idRaca]') ORDER BY CASE WHEN especieAnimal = '$prefe[tipoPet]' AND generoAnimal = '$prefe[generoPet]' THEN 0 WHEN especieAnimal = '$prefe[tipoPet]' THEN 1 ELSE 2 END, idAnimal DESC LIMIT 4 ");
}elseif($prefe['tipoPet'] == 'Sem Preferência' && $prefe['generoPet'] == 'Sem Preferência' && $prefe['portePet'] == 'Sem Preferência'){
    $sqlPet = $mysqli->query("SELECT * FROM tbAnimal WHERE STATUS= 'Disponível' ORDER BY idAnimal DESC LIMIT 4");
}else{
    $sqlPet = $mysqli->query("SELECT * FROM tbAnimal WHERE STATUS = 'Disponível' AND (generoAnimal = '$prefe[generoPet]' OR especieAnimal = '$prefe[tipoPet]' OR porteAnimal = '$prefe[portePet]' OR idadeAnimal LIKE '%$prefe[idadePet]%' OR idRaca = '$prefe[idRaca]') ORDER BY CASE WHEN especieAnimal = '$prefe[tipoPet]' AND generoAnimal = '$prefe[generoPet]' THEN 0 WHEN especieAnimal = '$prefe[tipoPet]' THEN 1 ELSE 2 END, idAnimal DESC LIMIT 4 ");
};


$resultOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.nomeOng as 'ong' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbOng.idOng = '$resultCamp[idOng]'");

$fotoOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.fotoOng as 'foto' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbOng.idOng = '$resultCamp[idOng]'");



?> 