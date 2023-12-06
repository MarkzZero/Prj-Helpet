<?php 
include('../conexao/conexao.php');



// Inicializa a variável se não existir
if (!isset($_SESSION['favorites'])) {
    $_SESSION['favorites'] = [];
}

// Função para adicionar um animal aos favoritos


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
}


?> 
<div class="container2">
    <div class="categorias">
        <h2>Categorias</h2>

        <div class="itens-categorias">
            <div class="item open-modalCampanhas">
                <div class="item-campanhas">
                    <img src="images/campanhas.png">
                </div>
                <p>Campanhas</p>
            </div>

            <div class="item open-modalOngs">
                <div class="item-ongs">
                    <img src="images/ongs.png">
                </div>
                <p>ONGs</p>
            </div>

            <div class="item open-modalAdocao">
                <div class="item-pets">
                    <img src="images/pets.png">
                </div>
                <p>Pets</p>
            </div>
            
            <div class="item open-modalAnunciantes">
                <div class="item-anunciantes">
                    <img src="images/petshop.png">
                </div>
                <p>Anunciantes</p>
            </div>
            
            <div class="item open-modalAnuncios">
                <div class="item-anuncios">
                    <img src="images/anuncios.png">
                </div>
                <p>Anúncios</p>
            </div>
        </div>
    </div>
</div>

    
<!-- Tela de Adoção e Apadrinhamento -->
<div class="tela-adocao hide">
    <div class="modal-topo">
        <div class="fechar-modal">
            <i class="seta fi fi-br-angle-small-left close-modalAdocao"></i>
        </div>

        <h2>Pets</h2>

        <div class="icone-config">
            <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
        </div>
    </div>


    <div class="area-pesquisa">
    <div class="search">
                    <i class="fi fi-br-search"></i>
                    <input type="text" placeholder="Pesquisar" id="searchbar" name="pesquisa" onkeyup="search_animal()">
                    <div class="area-filtros">
                        <div class="icon-filtros">
                            <a><i class="fi fi-rr-settings-sliders"></i></a>
                        </div>
                        <div class="panel" id="filtros-panel">
                            <span>Filtros de Pesquisa</span>
                            <div class="campo-filtro">
                                <p>Espécie:</p>
                                <select id="especieMostrar">
                                <option value="todosespecie">Todos</option>
                                    <option value="gato">Gatos</option>
                                    <option value="cachorro">Cachorros</option>
                                </select>
                            </div>

                            <div class="campo-filtro">
                                <p>Gênero:</p>
                                <select id="generoMostrar">
                                    <option value="todos">Todos</option>
                                    <option value="femea">Fêmea</option>
                                    <option value="macho">Macho</option>
                                </select>
                            </div>

                            <div class="campo-filtro">
                                <p>Idade:</p>
                                <select id="idadeMostrar">
                                    <option value="todosidade">Todos</option>
                                    <option value="filhote">Filhote</option>
                                    <option value="adulto">Adulto</option>
                                    <option value="idoso">Idoso</option>
                                </select>
                            </div>

                            <div class="campo-filtro">
                                <p>Porte:</p>
                                <select id="porteMostrar">
                                    <option value="todosporte">Todos</option>
                                    <option value="pequeno">Pequeno</option>
                                    <option value="médio">Médio</option>
                                    <option value="grande">Grande</option>
                                </select>
                            </div>

                            <div class="campo-filtro">
                                <p>Raça:</p>
                                <select id="racaMostrar">
                                   
                                    <?php $sql = mysqli_query($mysqli, "SELECT idRaca, nomeRaca FROM tbRaca ORDER BY nomeRaca ASC"); ?>
                                    <option value="todoraca">Todos</option>
                                                <?php
                                                    while ($resultado = mysqli_fetch_array($sql)) {
                                                        echo "<option value='" . $resultado['nomeRaca'] . "' name='raca'>"  . $resultado['nomeRaca'] . "</option>";
                                                    }
                                                ?>
                                </select>
                            </div>

                            <div class="btns-filtro">
                                <button class="fil-cancelar" onclick="cancelarFiltros2()">Cancelar</button>
                                <button class="fil-aplicar" onclick="aplicarFiltros2()">Aplicar</button>
                            </div>
                        </div>
                    </div>
                </div>
    </div>


    <div class="area-cards cards-Mostrar">
                
                    <?php require "card-pet-todos.php"; ?>    
             
            </div>

</div>

<!-- Tela de Campanhas -->
<div class="tela-campanhas hide">
    <div class="modal-topo">
        <div class="fechar-modal">
            <i class="seta fi fi-br-angle-small-left close-modalCampanhas"></i>
        </div>

        <div class="area-pesquisa">
            <h2>Campanhas</h2>
            <div class="search">
                <i class="fi fi-br-search"></i>
                <input type="text" placeholder="Pesquisar" id="searchbarCampanha" name="pesquisa" onkeyup="search_campanha()">
            </div>
        </div>

        <div class="icone-config">
            <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
        </div>
    </div>

    <div class="area-tela-posts cards-Campanha">
        <?php require "post-campanha.php"; ?>
    </div>

</div>

<!-- Tela de ONGs -->
<div class="tela-ongs hide">
    <div class="modal-topo">
        <div class="fechar-modal">
            <i class="seta fi fi-br-angle-small-left close-modalOngs"></i>
        </div>

        <h2>ONGs</h2>

        <div class="icone-config">
            <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
        </div>
    </div>

    <div class="area-pesquisa">
        <div class="search">
            <i class="fi fi-br-search"></i>
            <input type="text" placeholder="Pesquisar" id="searchbarOng" name="pesquisa" onkeyup="search_ong()">
         
        </div>
    </div>

    <div class="area-cards-ongs cards-Ong">
        <?php require "card-ong.php"; ?>
    </div>
</div>

<!-- Tela de Anunciantes -->
<div class="tela-anunciantes hide">
    <div class="modal-topo">
        <div class="fechar-modal">
            <i class="seta fi fi-br-angle-small-left close-modalAnunciantes"></i>
        </div>

        <div class="area-pesquisa">
            <h2>Anunciantes</h2>
            <div class="search">
                <i class="fi fi-br-search"></i>
                <input type="text" placeholder="Pesquisar" id="searchbarAnunciante" name="pesquisa" onkeyup="search_anunciante()">
            </div>
        </div>

        <div class="icone-config">
            <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
        </div>
    </div>

    <div class="area-cards-ongs cards-anunciante ">
        <?php require "card-anunciante.php"; ?>
    </div>

</div>

<!-- Tela de Anúncios -->
<div class="tela-anuncios hide">
    <div class="modal-topo">
        <div class="fechar-modal">
            <i class="seta fi fi-br-angle-small-left close-modalAnuncios"></i>
        </div>

        <div class="area-pesquisa">
            <h2>Anúncios</h2>
            <div class="search">
                <i class="fi fi-br-search"></i>
                <input type="text" placeholder="Pesquisar" id="searchbarAnuncio" name="pesquisa" onkeyup="search_anuncio()">
            </div>
        </div>

        <div class="icone-config">
            <a href="configuracoes.php"><i class="fi fi-sr-settings"></i></a>
        </div>
    </div>

    <div class="area-tela-posts cards-anuncio">
        <?php require "post-anuncio.php"; ?>
    </div>

</div>
<script>
   function search_animal() {
    let input = document.getElementById('searchbar').value.toLowerCase();
        let generoFilter = document.getElementById('generoMostrar').value.toLowerCase();
        let especieFilter = document.getElementById('especieMostrar').value.toLowerCase();
        let idadeFilter = document.getElementById('idadeMostrar').value.toLowerCase();
        let porteFilter = document.getElementById('porteMostrar').value.toLowerCase();
        let racaFilter = document.getElementById('racaMostrar').value.toLowerCase();
        let cards = document.querySelectorAll('.cards-Mostrar .card');

        for (let i = 0; i < cards.length; i++) {
            let card = cards[i];
            let generoElement = card.querySelector('.icon-femea i, .icon-macho i');
            let genero = generoElement ? generoElement.className.includes('fi-rr-venus') ? 'femea' : 'macho' : '';

            let especieElement = card.querySelector('#especie');
            let especie = especieElement ? especieElement.textContent.trim().toLowerCase() : '';
            
            let idadeAnimalElement = card.querySelector('#idade');
let idade = idadeAnimalElement ? idadeAnimalElement.textContent.trim().toLowerCase() : '';

let porteAnimalElement = card.querySelector('#porte');
let porte = porteAnimalElement ? porteAnimalElement.textContent.trim().toLowerCase() : '';

let racaAnimalElement = card.querySelector('#raca');
let raca = racaAnimalElement ? racaAnimalElement.textContent.trim().toLowerCase() : '';

            let nomeAnimalElement = card.querySelector('.nome h3');
            let nomeAnimal = nomeAnimalElement ? nomeAnimalElement.textContent.toLowerCase() : '';

            let matchInput = nomeAnimal.includes(input);
            let matchGenero = (generoFilter === 'todos' || genero === generoFilter);
            let matchEspecie = (especieFilter === 'todosespecie' || especie.includes(especieFilter));
            let matchIdade = (idadeFilter === 'todosidade' || idade.includes(idadeFilter));
            let matchPorte = (porteFilter === 'todosporte' || porte.includes(porteFilter));
            let matchRaca = (racaFilter === 'todoraca' || raca.includes(racaFilter));
            console.log(`Card ${i + 1}: Nome Animal - ${nomeAnimal}, Genero - ${genero}, Espécie - ${especie}, Idade - ${idade}, Porte - ${porte}, Raça - ${raca}, Match Input - ${matchInput}, Match Genero - ${matchGenero}, Match Espécie - ${matchEspecie}, Match Idade - ${matchIdade}, Match Porte - ${matchPorte}, Match Raça - ${matchRaca}`);

            if (matchGenero && matchEspecie && matchInput && matchIdade && matchPorte && matchRaca) {
    card.style.display = "list-item";
} else {
    card.style.display = "none";
}
        }
    }
    function cancelarFiltros2() {
        document.getElementById('generoMostrar').value = 'todos';
        document.getElementById('especieMostrar').value = 'todosespecie';
        document.getElementById('idadeMostrar').value = 'todosidade';
        document.getElementById('porteMostrar').value = 'todosporte';
        document.getElementById('racaMostrar').value = 'todoraca';
        search_animal2(); 
        aplicarFiltros2();// Chama a função de pesquisa para restaurar a exibição original
    }

    function aplicarFiltros2() {
        let input = document.getElementById('searchbar').value.toLowerCase();
        let generoFilter = document.getElementById('generoMostrar').value.toLowerCase();
        let especieFilter = document.getElementById('especieMostrar').value.toLowerCase();
        let idadeFilter = document.getElementById('idadeMostrar').value.toLowerCase();
        let porteFilter = document.getElementById('porteMostrar').value.toLowerCase();
        let racaFilter = document.getElementById('racaMostrar').value.toLowerCase();
        let cards = document.querySelectorAll('.cards-Mostrar .card');

        for (let i = 0; i < cards.length; i++) {
            let card = cards[i];
            let generoElement = card.querySelector('.icon-femea i, .icon-macho i');
            let genero = generoElement ? generoElement.className.includes('fi-rr-venus') ? 'femea' : 'macho' : '';

            let especieElement = card.querySelector('#especie');
            let especie = especieElement ? especieElement.textContent.trim().toLowerCase() : '';
            
            let idadeAnimalElement = card.querySelector('#idade');
let idade = idadeAnimalElement ? idadeAnimalElement.textContent.trim().toLowerCase() : '';

let porteAnimalElement = card.querySelector('#porte');
let porte = porteAnimalElement ? porteAnimalElement.textContent.trim().toLowerCase() : '';

let racaAnimalElement = card.querySelector('#raca');
let raca = racaAnimalElement ? racaAnimalElement.textContent.trim().toLowerCase() : '';

            let nomeAnimalElement = card.querySelector('.nome h3');
            let nomeAnimal = nomeAnimalElement ? nomeAnimalElement.textContent.toLowerCase() : '';

            let matchInput = nomeAnimal.includes(input);
            let matchGenero = (generoFilter === 'todos' || genero === generoFilter);
            let matchEspecie = (especieFilter === 'todosespecie' || especie.includes(especieFilter));
            let matchIdade = (idadeFilter === 'todosidade' || idade.includes(idadeFilter));
            let matchPorte = (porteFilter === 'todosporte' || porte.includes(porteFilter));
            let matchRaca = (racaFilter === 'todoraca' || raca.includes(racaFilter));
            console.log(`Card ${i + 1}: Nome Animal - ${nomeAnimal}, Genero - ${genero}, Espécie - ${especie}, Idade - ${idade}, Porte - ${porte}, Raça - ${raca}, Match Input - ${matchInput}, Match Genero - ${matchGenero}, Match Espécie - ${matchEspecie}, Match Idade - ${matchIdade}, Match Porte - ${matchPorte}, Match Raça - ${matchRaca}`);

            if (matchGenero && matchEspecie && matchInput && matchIdade && matchPorte && matchRaca) {
    card.style.display = "list-item";
} else {
    card.style.display = "none";
}
        }
    }

    function search_campanha() {
    let input = document.getElementById('searchbarCampanha').value.toLowerCase();
      
    let cards = document.querySelectorAll('.cards-Campanha .post');

    for (let i = 0; i < cards.length; i++) {
        console.log(`Card ${i + 1}: Nome Campanha - ${input}, Match Input - ${input}`);
        let card = cards[i];
       
        let nomeCampanhaElement = card.querySelector('.campanha h4');
        let nomeCampanha = nomeCampanhaElement ? nomeCampanhaElement.textContent.toLowerCase() : '';

        let matchInput = nomeCampanha.includes(input);
      
        console.log(`Card ${i + 1}: Nome Campanha - ${nomeCampanha}, Match Input - ${matchInput}`);

        if (matchInput) {
            card.style.display = "list-item";
        } else {
            card.style.display = "none";
        }
    }
}
function search_ong() {
    let input = document.getElementById('searchbarOng').value.toLowerCase();
      
    let cards = document.querySelectorAll('.cards-Ong .card-ong');

    for (let i = 0; i < cards.length; i++) {
        console.log(`Card ${i + 1}: Nome Ong - ${input}, Match Input - ${input}`);
        let card = cards[i];
       
        let nomeOngElement = card.querySelector('.ong h3');
        let nomeOng = nomeOngElement ? nomeOngElement.textContent.toLowerCase() : '';

        let matchInput = nomeOng.includes(input);
      
        console.log(`Card ${i + 1}: Nome Ong - ${nomeOng}, Match Input - ${matchInput}`);

        if (matchInput) {
            card.style.display = "list-item";
        } else {
            card.style.display = "none";
        }
    }
}function search_anunciante() {
    let input = document.getElementById('searchbarAnunciante').value.toLowerCase();
      
    let cards = document.querySelectorAll('.cards-anunciante .card-anunciante');

    for (let i = 0; i < cards.length; i++) {
        console.log(`Card ${i + 1}: Nome Anunciante - ${input}, Match Input - ${input}`);
        let card = cards[i];
       
        let nomeAnuncianteElement = card.querySelector('.anunciante h3');
        let nomeAnunciante = nomeAnuncianteElement ? nomeAnuncianteElement.textContent.toLowerCase() : '';

        let matchInput = nomeAnunciante.includes(input);
      
        console.log(`Card ${i + 1}: Nome Anunciante - ${nomeAnunciante}, Match Input - ${matchInput}`);

        if (matchInput) {
            card.style.display = "list-item";
        } else {
            card.style.display = "none";
        }
    }
}
function search_anuncio() {
    let input = document.getElementById('searchbarAnuncio').value.toLowerCase();
      
    let cards = document.querySelectorAll('.cards-anuncio .post-anuncio');

    for (let i = 0; i < cards.length; i++) {
    
        let card = cards[i];
       
        let nomeAnuncioElement = card.querySelector('.campanha h4');
        let nomeAnuncio = nomeAnuncioElement ? nomeAnuncioElement.textContent.toLowerCase() : '';

        let matchInput = nomeAnuncio.includes(input);
      
        console.log(`Card ${i + 1}: Nome Anuncio - ${nomeAnuncio}, Match Input - ${matchInput}`);

        if (matchInput) {
            card.style.display = "list-item";
        } else {
            card.style.display = "none";
        }
    }
}
</script>
