<?php
include_once('../config/conexao.php');
include('../config/config.php');

if (isset($_POST['update'])) {

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $data = mysqli_real_escape_string($mysqli, trim($_POST['data']));
    $horario = mysqli_real_escape_string($mysqli, trim($_POST['horario']));
    $desc = mysqli_real_escape_string($mysqli, trim($_POST['desc']));
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
    $logradouro = mysqli_real_escape_string($mysqli, trim($_POST['logradouro']));
    $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
    $cidade = mysqli_real_escape_string($mysqli, trim($_POST['cidade']));
    $complemento = mysqli_real_escape_string($mysqli, trim($_POST['complemento']));
    $bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));
    $arquivo = $_FILES['image'];
    $foto = $_POST['foto'];

    if ($arquivo !== null) {
        preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);

        if ($ext == true) {
            $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

            $caminho_arquivo = "fotoCampanha/" . $nome_arquivo;

            move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);

            $sqlFoto = "UPDATE tbCampanha SET fotoPerfilCampanha = '$caminho_arquivo' WHERE idCampanha = '$id'";
            if ($mysqli->query($sqlFoto)) {
                header("location: ../campanhas.php");
            } else {
                echo "Erro ao inserir os dados";
                $mysqli->error;
            }
        }
    } else {
        $sqlUpdate = "UPDATE tbCampanha SET fotoPerfilCampanha = '$foto' WHERE idCampanha = '$id'";
        if ($mysqli->query($sqlUpdate)) {
            header("location: ../campanhas.php");
        } else {
            echo "Erro ao inserir os dados";
            $mysqli->error;
        }
    }

    $sqlCampanha = "UPDATE tbCampanha SET nomeCampanha = '$nome', diaCampanha = '$data', horarioCampanha = '$horario', informacaoCampanha = '$desc', cepCampanha = '$cep', logradouroCampanha = '$logradouro', estadoCampanha = '$estado', numLocalCampanha = '$numero', cidadeCampanha = '$cidade', complementoCampanha = '$complemento', bairroCampanha = '$bairro' WHERE idCampanha = '$id'";

    if ($mysqli->query($sqlCampanha) == true) {
        header("location: ../campanhas.php");
    } else {
        echo "Erro ao inserir os dados";
        $mysqli->error;
    }
    $mysqli->close();

}

?>