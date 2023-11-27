<?php
include_once('../config/conexao.php');
include('../config/config.php');
include('../../Login/login.php');

$id = $_SESSION['id-ong'];

if (isset($_POST['update'])) {

    $arquivo = $_FILES['image'];
    $foto = $_POST['foto'];
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $Telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
    $capacidade = filter_input(INPUT_POST, 'capacidade', FILTER_SANITIZE_NUMBER_INT);
    $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_NUMBER_INT);
    $cnas = filter_input(INPUT_POST, 'cnas', FILTER_SANITIZE_NUMBER_INT);
    $cebas = filter_input(INPUT_POST, 'cebas', FILTER_SANITIZE_NUMBER_INT);
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
    $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
    $cidade = mysqli_real_escape_string($mysqli, trim($_POST['cidade']));
    $bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));
    $logradouro = mysqli_real_escape_string($mysqli, trim($_POST['logradouro']));
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
    $complemento = mysqli_real_escape_string($mysqli, trim($_POST['complemento']));

    $cnpjNumerico = preg_replace("/[^0-9]/", "", $cnpj);

    $telefoneNum = preg_replace("/[^0-9]/", "", $Telefone);

    $cepNum = preg_replace("/[^0-9]/", "", $cep);

    if ($arquivo !== null) {
        preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);
        if ($ext == true) {
            $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];
            $caminho_arquivo = "upload/" . $nome_arquivo;
            $caminho = "../../Cadastro/upload/" . $nome_arquivo;

            move_uploaded_file($arquivo["tmp_name"], $caminho);

            $sqlArquivo = "UPDATE tbOng SET fotoOng = '$caminho_arquivo' WHERE idOng = $id";
            if ($mysqli->query($sqlArquivo) == true) {
                header("Cache-Control: no-cache, no-store, must-revalidate");
                header("Pragma: no-cache");
                header("Expires: 0");
                header("Location: ../edit-ong.php");
            } else {
                echo "Erro ao cadastrar no banco de dados";
                $mysqli->error;
            }
        }
    } else {
        $sqlFoto = "UPDATE tbOng SET fotoOng = '$foto' WHERE idOng = '$id'";
        if ($mysqli->query($sqlFoto) == true) {
            header("Cache-Control: no-cache, no-store, must-revalidate");
            header("Pragma: no-cache");
            header("Expires: 0");
            header("Location: ../edit-ong.php");
        } else {
            echo "Erro ao cadastrar no banco de dados.";
            $mysqli->error;
        }
    }

    $sql = "UPDATE tbOng SET nomeOng = '$nome', capacidadeOng = '$capacidade', emailOng = '$email', cnpjOng = '$cnpjNumerico', cnasOng = '$cnas', cebasOng = '$cebas', cepOng = '$cepNum', estadoOng = '$estado', cidadeOng = '$cidade', bairroOng = '$bairro', logradouroOng = '$logradouro', numlogOng = '$numero', complementoOng = '$complemento' WHERE idOng = '$id'";
    if ($mysqli->query($sql) == true) {
        $sqlTelefone =  "UPDATE tbTelefoneOng SET numTelefoneOng = '$telefoneNum' WHERE idOng = '$id'";
        if ($mysqli->query($sqlTelefone) == true) {
            header("Location: ../edit-ong.php");
        }
    }

}
