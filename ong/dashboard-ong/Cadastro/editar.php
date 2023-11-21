<?php

include_once('../config/conexao.php');
include('../config/config.php');

if (isset($_POST['update'])) {

    $user_data = mysqli_fetch_assoc($result);

    $id = $_POST['id'];

    $arquivo = $_FILES['image'];
    $foto = $_POST['foto'];
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $porteSelecionado = $_POST['porte'];
    $idadeSelecionada = $_POST['idade'];
    $opcaoEspecie = $_POST['especie'];
    $opcaoGenero = $_POST['genero'];
    $racaSelecionada = $_POST['raca'];
    $vacSelecionada = $_POST['vacina'];
    $doencaSelecionada = $_POST['doenca'];

    $dadosIdade = array(
        "opExistente" => $user_data['idadeAnimal'],
        "opFilhote" => "Filhote (Menos de 1 ano)",
        "opAdulto" => "Adulto (Entre 1 e 3 anos)",
        "opAdulto2" => "Adulto (Entre 3 e 5 anos)",
        "opIdoso" => "Idoso (Mais de 5 anos)"
    );

    $dadosEspecie = array(
        "opCachorro" => "Cachorro",
        "opGato" => "Gato"
    );

    $dadosGenero = array(
        "femea" => "Fêmea",
        "macho" => "Macho"
    );

    $dadosPorte = array(
        "opExistente" => $user_data['porteAnimal'],
        "opPequeno" => "Pequeno",
        "opMedio" => "Médio",
        "opGrande" => "Grande"
    );

    $inserirIdade = $dadosIdade[$idadeSelecionada];
    $inserirPorte = $dadosPorte[$porteSelecionado];
    $inserirEspecie = $dadosEspecie[$opcaoEspecie];
    $inserirGenero = $dadosGenero[$opcaoGenero];

    if ($arquivo !== null) {
        preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);

        if ($ext == true) {
            $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

            $caminho_arquivo = "fotoPerfil/" . $nome_arquivo;

            move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);

            $sqlFoto = "UPDATE tbAnimal SET fotoPerfilAnimal = '$caminho_arquivo' WHERE idAnimal = '$id'";
            if ($mysqli->query($sqlFoto)) {
                header("location: ../pets.php");
            } else {
                echo "Erro ao inserir os dados";
                $mysqli->error;
            }
        }
    } else {
        $sqlUpdate = "UPDATE tbAnimal SET fotoPerfilAnimal = '$foto' WHERE idAnimal = '$id'";
        if ($mysqli->query($sqlUpdate)) {
            header("location: ../pets.php");
        } else {
            echo "Erro ao inserir os dados";
            $mysqli->error;
        }
    }

            $sql = "UPDATE tbAnimal SET nomeAnimal = '$nome', porteAnimal = '$inserirPorte', descAnimal = '$inserirGenero', idadeAnimal = '$inserirIdade', especieAnimal = '$inserirEspecie', idRaca = '$racaSelecionada', idVacina = '$vacSelecionada', idDoenca = '$doencaSelecionada' WHERE idAnimal = '$id'";

            if ($mysqli->query($sql) == true) {
                header('location: ../Pets.php');
            } else {
                echo "Erro ao editar animal no banco de dados: " . $mysqli->error;
            }

            header("Location: ../Pets.php");
            exit;
    
}
    $mysqli->close();
?>