<?php
include_once('../config/conexao.php');
include('../config/config.php');

if (isset($_POST['update'])) {

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $dataInicio = mysqli_real_escape_string($mysqli, trim($_POST['dataInicio']));
    $dataTermino = mysqli_real_escape_string($mysqli, trim($_POST['dataTermino']));
    $descricao = mysqli_real_escape_string($mysqli, trim($_POST['descricao']));
    $arquivo = $_FILES['image'];
    //$foto = $_POST['foto'];

    if ($arquivo !== null) {
        preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);

        if ($ext == true) {
            $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

            $caminho_arquivo = "fotoAnuncio/" . $nome_arquivo;

            move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);

            $sqlFoto = "UPDATE tbAnuncio SET fotoAnuncio = '$caminho_arquivo' WHERE idAnuncio = '$id'";
            if ($mysqli->query($sqlFoto)) {
                header("location: ../index.php");
            } else {
                echo "Erro ao inserir os dados";
                $mysqli->error;
            }
        }
    } else {
        $sqlUpdate = "UPDATE tbAnuncio SET fotoAnuncio = '$caminho_arquivo' WHERE idAnuncio = '$id'";
        if ($mysqli->query($sqlUpdate)) {
            header("location: ../index.php");
        } else {
            echo "Erro ao inserir os dados";
            $mysqli->error;
        }
    }

    $sqlAnuncio = "UPDATE tbAnuncio SET nomeAnuncio = '$nome', descAnuncio = '$descricao', dataInicioAnuncio = '$dataInicio', dataTerminoAnuncio = '$dataTermino' WHERE idAnuncio = '$id'";

    if ($mysqli->query($sqlAnuncio) == true) {
        header("location: ../index.php");
    } else {
        echo "Erro ao inserir os dados";
        $mysqli->error;
    }
    $mysqli->close();

}

?>