<?php 
    include('conexao.php');


    $id = $_SESSION['id'];

    $resultRaca = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbRaca.nomeRaca as 'nome_raca' FROM tbAnimal INNER JOIN tbRaca ON tbAnimal.idRaca = tbRaca.idRaca WHERE idOng = '$id'") or die($mysqli->error);

    $resultVac = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbVacina.tipoVacina as 'vacina' FROM tbAnimal INNER JOIN tbVacina ON tbAnimal.idVacina = tbVacina.idVacina WHERE idOng = '$id'") or die($mysqli->error);

    $resultDoenca = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbDoenca.tipoDoenca as 'doenca' FROM tbAnimal INNER JOIN tbDoenca ON tbAnimal.idDoenca = tbDoenca.idDoenca WHERE idOng = '$id'") or die($mysqli->error);

    $result = $mysqli->query("SELECT idAnimal, nomeAnimal, porteAnimal, descAnimal, idadeAnimal, especieAnimal, fotoPerfilAnimal, idOng, idRaca FROM tbAnimal WHERE idOng = '$id' ORDER BY idAnimal ") or die($mysqli->error);

    

    $resultCamp = $mysqli->query("SELECT * FROM tbCampanha WHERE idOng = '$id' ORDER BY idCampanha DESC") or die($mysqli->error);

    $petsCount = $mysqli->query("SELECT COUNT(idAnimal) FROM tbAnimal WHERE idOng = '$id'") or die($mysqli->error);
    $row = mysqli_fetch_array($petsCount);
    $petsResult = $row[0];

    $padrinCount = $mysqli->query("SELECT COUNT(idApadrinhamento) FROM tbApadrinhamento WHERE idOng = '$id'") or die($mysqli->error);
    $row = mysqli_fetch_array($padrinCount);
    $padrinResult = $row[0];

    $adocaoCount = $mysqli->query("SELECT COUNT(idAdocao) FROM tbAdocao WHERE idOng = '$id'") or die($mysqli->error);
    $row = mysqli_fetch_array($adocaoCount);
    $adocaoResult = $row[0];

?>