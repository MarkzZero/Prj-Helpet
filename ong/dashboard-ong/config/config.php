<?php 
    include('conexao.php');
    include('../Login/login.php');

    $id = $_SESSION['id-ong'];

    $resultRaca = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbRaca.nomeRaca as 'nome_raca' FROM tbAnimal INNER JOIN tbRaca ON tbAnimal.idRaca = tbRaca.idRaca WHERE idOng = '$id' ORDER BY idAnimal DESC") or die($mysqli->error);

    $resultVac = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbVacina.tipoVacina as 'vacina' FROM tbAnimal INNER JOIN tbVacina ON tbAnimal.idVacina = tbVacina.idVacina WHERE idOng = '$id'") or die($mysqli->error);

    $resultDoenca = $mysqli->query("SELECT tbAnimal.nomeAnimal as 'animal', tbDoenca.tipoDoenca as 'doenca' FROM tbAnimal INNER JOIN tbDoenca ON tbAnimal.idDoenca = tbDoenca.idDoenca WHERE idOng = '$id'") or die($mysqli->error);

    $result = $mysqli->query("SELECT idAnimal, nomeAnimal, porteAnimal, descAnimal, generoAnimal, idadeAnimal, especieAnimal, fotoPerfilAnimal, idOng, idRaca FROM tbAnimal WHERE idOng = '$id' ORDER BY idAnimal DESC ") or die($mysqli->error);

    $resultCamp = $mysqli->query("SELECT * FROM tbCampanha WHERE idOng = '$id' ORDER BY idCampanha DESC") or die($mysqli->error);

    //ONG

    $resultOng = $mysqli->query("SELECT * FROM tbOng WHERE idOng = '$id'")or die($mysqli->error);

    $sqlSolicitacao = $mysqli->query("SELECT tbAdocao.idAdocao, tbAnimal.nomeAnimal as 'nome_animal', tbAnimal.fotoPerfilAnimal as 'foto_animal' ,tbUsuario.nomeUsuario as 'nome_usuario', tbUsuario.fotoUsuario as 'foto_usuario', tbAnimal.idAnimal as 'id_animal',tbAdocao.dataSolicitacao, tbRaca.nomeRaca as 'raca' FROM tbAdocao INNER JOIN tbAnimal ON tbadocao.idAnimal = tbAnimal.idAnimal INNER JOIN tbUsuario ON tbAdocao.idUsuario = tbUsuario.idUsuario INNER JOIN tbRaca ON tbanimal.idRaca = tbRaca.idRaca WHERE tbAdocao.idOng = '$id' AND tbAdocao.STATUS = 'pendente'");

    $ong = $mysqli->query("SELECT * FROM tbOng WHERE idOng = '$id'")or die($mysqli->error);

    $ong_data = mysqli_fetch_assoc($ong);

    $petsCount = $mysqli->query("SELECT COUNT(idAnimal) FROM tbAnimal WHERE idOng = '$id'") or die($mysqli->error);
    $row = mysqli_fetch_array($petsCount);
    $petsResult = $row[0];

    $campanhasCount = $mysqli->query("SELECT COUNT(idCampanha) FROM tbCampanha WHERE idOng = '$id'") or die($mysqli->error);
    $row = mysqli_fetch_array($campanhasCount);
    $campanhasResult = $row[0];

    $padrinCount = $mysqli->query("SELECT COUNT(idApadrinhamento) FROM tbApadrinhamento WHERE idOng = '$id'") or die($mysqli->error);
    $row = mysqli_fetch_array($padrinCount);
    $padrinResult = $row[0];

    //Usei pra Inserir os valores nos graficos
    $gatoCount = $mysqli->query("SELECT COUNT(idAnimal) as total_gatos from tbAnimal WHERE especieAnimal = 'Gato' AND idOng = '$id'") or die($mysqli->error);
    $row = mysqli_fetch_array($gatoCount);
    $countGatos = $row['total_gatos'];
    //echo json_encode($countGatos);

    //Usei pra Inserir os valores nos graficos
    $cachorroCount = $mysqli->query("SELECT COUNT(idAnimal) as total_cachorro from tbAnimal WHERE especieAnimal = 'Cachorro' AND idOng = '$id'") or die($mysqli->error);
    $row = mysqli_fetch_array($cachorroCount);
    $countCachorro = $row['total_cachorro'];
    //echo json_encode($countCachorro);

    $adocaoCount = $mysqli->query("SELECT COUNT(idAdocao) FROM tbAdocao WHERE idOng = '$id' AND STATUS = 'aprovada'") or die($mysqli->error);
    $row = mysqli_fetch_array($adocaoCount);
    $adocaoResult = $row[0];

    
?>
