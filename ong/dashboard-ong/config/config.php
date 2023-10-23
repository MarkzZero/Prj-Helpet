<?php 
    include('conexao.php');

    $resultRaca = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbRaca.nomeRaca as 'nome_raca' FROM tbAnimal INNER JOIN tbRaca ON tbAnimal.idRaca = tbRaca.idRaca") or die($mysqli->error);

    $result = $mysqli->query("SELECT idAnimal, nomeAnimal, porteAnimal, descAnimal, idadeAnimal, especieAnimal, fotoPerfilAnimal, idOng, idRaca FROM tbAnimal ORDER BY idAnimal ASC") or die($mysqli->error);

    $resultCamp = $mysqli->query("SELECT idCampanha, nomeCampanha, informacaoCampanha, horarioCampanha, diaCampanha, bairroCampanha, logradouroCampanha, numLocalCampanha, complementoCampanha, estadoCampanha, cepCampanha, fotoPerfilCampanha FROM tbCampanha ORDER BY idCampanha ASC") or die($mysqli->error);
?>