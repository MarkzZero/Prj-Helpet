<?php 
include('../conexao/conexao.php');

include('../Login/login.php');

// Inicializa a variável se não existir
if (!isset($_SESSION['favorites'])) {
    $_SESSION['favorites'] = [];
}

// Função para adicionar um animal aos favoritos

function addFavorite($animalId, $campanhaId)
{
    global $_SESSION;

    // Verifica se o animal já foi adicionado
    if (!in_array($animalId, $_SESSION['favorites']) && !in_array($campanhaId, $_SESSION['favorites'])) {
        // Adiciona o animal aos favoritos
        $_SESSION['favorites'][] = $animalId;
        $_SESSION['favorites'][] = $campanhaId;
    }
}

// Adiciona o animal aos favoritos, caso o botão seja clicado
if (isset($_POST['animal_id']) && isset($_POST['campanha_id'])) {
   addFavorite($_POST['animal_id'], $_POST['campanha_id']);
}

$id = $_SESSION['id'];

$sqlUsuario = $mysqli->query("SELECT * FROM tbUsuario WHERE idUsuario = '$id'");

$resultRaca = $mysqli->query("SELECT especieRaca FROM tbRaca ") or die($mysqli->error);

$sqlPreferencia = $mysqli->query("SELECT * FROM tbPrefeUsuario WHERE idUsuario = '$id'");

$result = $mysqli->query("SELECT * FROM tbUsuario WHERE idUsuario = '$id' ORDER BY idUsuario") or die($mysqli->error);

$resultCampanha = $mysqli->query("SELECT * FROM tbCampanha ORDER BY idCampanha DESC");
$resultRaca = $mysqli->query("SELECT tbprefeUsuario.tipoPet as 'preferencia', tbRaca.nomeRaca as 'nome_raca' FROM tbPrefeUsuario INNER JOIN tbRaca ON tbPrefeUsuario.idRaca = tbRaca.idRaca WHERE idUsuario = '$id' ORDER BY idPrefeUsuario DESC") or die($mysqli->error);

$resultCamp = mysqli_fetch_assoc($resultCampanha);

$preferencia = $mysqli->query("SELECT * FROM tbPrefeUsuario WHERE idUsuario = '$id'");

$resultAnimalFavorito = $mysqli->query("SELECT tbAnimal.* FROM tbAnimal JOIN tbFavorito ON tbAnimal.idAnimal = tbFavorito.idAnimal JOIN tbUsuario ON tbFavorito.idUsuario = tbUsuario.idUsuario WHERE tbUsuario.idUsuario = '$id'");

$favoritosCount = $mysqli->query("SELECT COUNT(idAnimal) FROM tbFavorito WHERE idUsuario = '$id'");
$row = mysqli_fetch_array($favoritosCount);
$favoritosResult = $row[0];

$resultCampanhaFavorita = $mysqli->query("SELECT tbCampanha.*, DATE_FORMAT(diaCampanha, '%d/%m/%Y') as 'dataBrasileira' FROM tbCampanha JOIN tbFavoritoCampanha ON tbCampanha.idCampanha = tbFavoritoCampanha.idCampanha JOIN tbUsuario ON tbFavoritoCampanha.idUsuario = tbUsuario.idUsuario WHERE tbUsuario.idUsuario = '$id'");

$favoritosCampanhaCount = $mysqli->query("SELECT COUNT(idCampanha) FROM tbFavoritoCampanha WHERE idUsuario = '$id'");
$row = mysqli_fetch_array($favoritosCampanhaCount);
$favoritosCammpanhaResult = $row[0];

$anuncioFavorito = $mysqli->query("SELECT tbAnuncio.* FROM tbAnuncio JOIN tbanuncioFavorito ON tbAnuncio.idAnuncio = tbanuncioFavorito.idAnuncio JOIN tbUsuario ON tbanuncioFavorito.idUsuario = tbUsuario.idUsuario WHERE tbUsuario.idUsuario = '$id'");

$anuncioFavoritoCount = $mysqli->query("SELECT COUNT(idAnuncio) FROM tbAnuncioFavorito WHERE idUsuario = '$id'");
$row = mysqli_fetch_array($anuncioFavoritoCount);
$anunciosResult = $row[0];

$resultPetAdotado = $mysqli->query("SELECT tbAnimal.* FROM tbAnimal JOIN tbAdocao ON tbAnimal.idAnimal = tbAdocao.idAnimal JOIN tbUsuario ON tbadocao.idUsuario = tbUsuario.idUsuario WHERE tbUsuario.idUsuario = '$id'");

$adocaoCount = $mysqli->query("SELECT COUNT(idAnimal) FROM tbAdocao WHERE idUsuario = '$id'");
$row = mysqli_fetch_array($adocaoCount);
$adocaoResult = $row[0];

$favoritos = $mysqli->query("SELECT idAnimal FROM tbFavorito WHERE idUsuario = '$id'");
$prefe = mysqli_fetch_assoc($preferencia);

if($prefe['tipoPet'] == 'Sem Preferência'){
    $sqlPet = $mysqli->query("SELECT * FROM tbAnimal WHERE STATUS = 'Disponível' AND (generoAnimal = '$prefe[generoPet]' OR porteAnimal = '$prefe[portePet]' OR idadeAnimal LIKE '%$prefe[idadePet]%' OR idRaca = '$prefe[idRaca]') ORDER BY CASE WHEN generoAnimal = '$prefe[generoPet]' THEN 0 WHEN porteAnimal = '$prefe[portePet]' THEN 1 ELSE 2 END, idAnimal DESC LIMIT 4 ");
}elseif($prefe['generoPet'] == 'Sem Preferência'){
    $sqlPet = $mysqli->query("SELECT * FROM tbAnimal WHERE STATUS = 'Disponível' AND (especieAnimal = '$prefe[tipoPet]' OR porteAnimal = '$prefe[portePet]' OR idadeAnimal LIKE '%$prefe[idadePet]%' OR idRaca = '$prefe[idRaca]') ORDER BY CASE WHEN especieAnimal = '$prefe[tipoPet]' THEN 0 WHEN especieAnimal = '$prefe[tipoPet]' THEN 1 ELSE 2 END, idAnimal DESC LIMIT 4 ");
}elseif($prefe['portePet'] == 'Sem Preferência'){
    $sqlPet = $mysqli->query("SELECT * FROM tbAnimal WHERE STATUS = 'Disponível' AND (generoAnimal = '$prefe[generoPet]' OR especieAnimal = '$prefe[tipoPet]' OR idadeAnimal LIKE '%$prefe[idadePet]%' OR idRaca = '$prefe[idRaca]') ORDER BY CASE WHEN especieAnimal = '$prefe[tipoPet]' AND generoAnimal = '$prefe[generoPet]' THEN 0 WHEN especieAnimal = '$prefe[tipoPet]' THEN 1 ELSE 2 END, idAnimal DESC LIMIT 4 ");
}elseif($prefe['tipoPet'] == 'Sem Preferência' && $prefe['generoPet'] == 'Sem Preferência' && $prefe['portePet'] == 'Sem Preferência'){
    $sqlPet = $mysqli->query("SELECT * FROM tbAnimal WHERE STATUS= 'Disponível' ORDER BY idAnimal DESC LIMIT 4");
}else{
    $sqlPet = $mysqli->query("SELECT * FROM tbAnimal WHERE STATUS = 'Disponível' AND (generoAnimal = '$prefe[generoPet]' OR especieAnimal = '$prefe[tipoPet]' OR porteAnimal = '$prefe[portePet]' OR idadeAnimal LIKE '%$prefe[idadePet]%' OR idRaca = '$prefe[idRaca]') ORDER BY CASE WHEN especieAnimal = '$prefe[tipoPet]' AND generoAnimal = '$prefe[generoPet]' THEN 0 WHEN especieAnimal = '$prefe[tipoPet]' THEN 1 ELSE 2 END, idAnimal DESC LIMIT 4 ");
};

$whereConditions = [];

if (!empty($prefe['portePet'])) {
    $whereConditions[] = "porteAnimal = '$prefe[portePet]'";
}

if (!empty($prefe['idadePet'])) {
    $whereConditions[] = "idadeAnimal LIKE '%$prefe[idadePet]%'";
}

if (!empty($prefe['idRaca'])) {
    $whereConditions[] = "idRaca = '$prefe[idRaca]'";
}

// Adicionar condição para STATUS
$whereConditions[] = "STATUS = 'Disponível'";

$whereClause = implode(" AND ", $whereConditions);

$sqlPet = $mysqli->query("SELECT * FROM tbAnimal 
    WHERE STATUS = 'Disponível' 
    AND (
        porteAnimal = '$prefe[portePet]' 
        OR idadeAnimal LIKE '%$prefe[idadePet]%' 
        OR idRaca = '$prefe[idRaca]'
        OR '$prefe[generoPet]' = ''  -- Adicionando esta condição para incluir todas as opções se o gênero estiver vazio
    ) 
    ORDER BY CASE 
        WHEN generoAnimal = '$prefe[generoPet]' THEN 0 
        WHEN porteAnimal = '$prefe[portePet]' THEN 1 
        ELSE 2 
    END, idAnimal DESC");
$resultOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.nomeOng as 'ong' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbOng.idOng = '$resultCamp[idOng]'");

$fotoOng = $mysqli->query("SELECT tbCampanha.nomeCampanha as 'campanha', tbOng.fotoOng as 'foto' FROM tbCampanha INNER JOIN tbOng ON tbCampanha.idOng = tbOng.idOng WHERE tbOng.idOng = '$resultCamp[idOng]'");

$listarTudoPet = $mysqli->query("SELECT * FROM tbAnimal    ORDER BY CASE 
WHEN generoAnimal = '$prefe[generoPet]' THEN 0 
WHEN porteAnimal = '$prefe[portePet]' THEN 1 
ELSE 2 
END, idAnimal DESC ") or die($mysqli->error);
$AnimalResult = $mysqli->query("SELECT * FROM tbAnimal    ORDER BY CASE 
WHEN generoAnimal = '$prefe[generoPet]' THEN 0 
WHEN porteAnimal = '$prefe[portePet]' THEN 1 
ELSE 2 
END, idAnimal DESC ") or die($mysqli->error);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se as chaves 'animal_id' e 'campanha_id' existem no array $_POST
    if (isset($_POST['animal_id'])) {
        $idAnimal = $_POST['animal_id'];
        $idUsuario = $_SESSION['id'];
        $favoritos = $mysqli->query("SELECT count(idAnimal) as 'favoritoAnimal' FROM tbFavorito where idusuario = $idUsuario AND idanimal = $idAnimal");
        $resultFavoritos = mysqli_fetch_assoc($favoritos);

        if ($resultFavoritos['favoritoAnimal'] == 0) {
            $sql = "INSERT INTO tbFavorito(idAnimal, idUsuario) VALUES (?, ?)";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ii", $idAnimal, $idUsuario);
            $stmt->execute();

            $stmt->close();
            $mysqli->close();
            exit;  // Adicione esta linha para evitar a execução do restante do script
        } elseif ($resultFavoritos['favoritoAnimal'] == 1) {
            $sql = "DELETE FROM tbFavorito WHERE idAnimal = ? AND idUsuario = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ii", $idAnimal, $idUsuario);
            $stmt->execute();

            $stmt->close();
            $mysqli->close();
            exit;  // Adicione esta linha para evitar a execução do restante do script
        }
    }

    // Verifica se a chave 'campanha_id' existe no array $_POST
    if (isset($_POST['campanha_id'])) {
        $idCampanha = $_POST['campanha_id'];
        $idUsuario = $_SESSION['id'];
        $favoritosCampanha = $mysqli->query("SELECT count(idCampanha) as 'favoritoCampanha' FROM tbFavoritoCampanha where idusuario = $idUsuario AND idcampanha = $idCampanha");
        $resultFavoritosCampanha = mysqli_fetch_assoc($favoritosCampanha);

        if ($resultFavoritosCampanha['favoritoCampanha'] == 0) {
            $sql = "INSERT INTO tbFavoritoCampanha(idCampanha, idUsuario) VALUES (?, ?)";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ii", $idCampanha, $idUsuario);
            $stmt->execute();

            $stmt->close();
            $mysqli->close();
            exit;  // Adicione esta linha para evitar a execução do restante do script
        } elseif ($resultFavoritosCampanha['favoritoCampanha'] == 1) {
            $sql = "DELETE FROM tbFavoritoCampanha WHERE idCampanha = ? AND idUsuario = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ii", $idCampanha, $idUsuario);
            $stmt->execute();

            $stmt->close();
            $mysqli->close();
            exit;  // Adicione esta linha para evitar a execução do restante do script
        }
    }
    if (isset($_POST['anuncio_id'])) {
        $idAnuncio = $_POST['anuncio_id'];
        $idUsuario = $_SESSION['id'];
        $favoritosAnuncio = $mysqli->query("SELECT count(idAnuncio) as 'favoritoAnuncio' FROM tbAnuncioFavorito where idusuario = $idUsuario AND idanuncio = $idAnuncio");
        $resultFavoritosAnuncio = mysqli_fetch_assoc($favoritosAnuncio);

        if ($resultFavoritosAnuncio['favoritoAnuncio'] == 0) {
            $sql = "INSERT INTO tbAnunciofavorito(idAnuncio, idUsuario) VALUES (?, ?)";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ii", $idAnuncio, $idUsuario);
            $stmt->execute();

            $stmt->close();
            $mysqli->close();
            exit;  // Adicione esta linha para evitar a execução do restante do script
        } elseif ($resultFavoritosAnuncio['favoritoAnuncio'] == 1) {
            $sql = "DELETE FROM tbAnunciofavorito WHERE idAnuncio = ? AND idUsuario = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ii", $idAnuncio, $idUsuario);
            $stmt->execute();

            $stmt->close();
            $mysqli->close();
            exit;  // Adicione esta linha para evitar a execução do restante do script
        }
    }
}


?> 