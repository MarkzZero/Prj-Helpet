<?php
include("../config/conexao.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $image = $_FILES['image'];
    $foto  = $_POST['foto'];
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $telefone = mysqli_real_escape_string($mysqli, trim($_POST['telefone']));
    $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_NUMBER_INT);
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
    $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
    $cidade = mysqli_real_escape_string($mysqli, trim($_POST['cidade']));
    $bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));
    $logradouro = mysqli_real_escape_string($mysqli, trim($_POST['logradouro']));
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
    $complemento = mysqli_real_escape_string($mysqli, trim($_POST['complemento']));

    $cnpjNumerico = preg_replace("/[^0-9]/", "", $cnpj);

    $telefoneNum = preg_replace("/[^0-9]/", "", $telefone);

    $cepNum = preg_replace("/[^0-9]/", "", $cep);

    if ($image !== null) {
        preg_match("/\.(png|jpg|jpeg){1}$/i", $image["name"], $ext);
        if ($ext == true) {
            $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];
            $caminho_arquivo = "fotoAnunciante/" . $nome_arquivo;
            $caminho = "../../cadastro/" . $nome_arquivo;
            move_uploaded_file($image['tmp_name'], $caminho);

            $sqlImage = "UPDATE tbAnunciante SET fotoAnunciante = '$caminho_arquivo' WHERE idAnunciante = '$id'";
            if ($mysqli->query($sqlImage) == true) {            
                header("Cache-Control: no-cache, no-store, must-revalidate");
                header("Pragma: no-cache");
                header("Expires: 0");
                header("Location: ../edit-anunciante.php");
            }else {
                echo "Erro ao cadastrar no banco de dados";
                $mysqli->error;
            }
        }
    }else{
        $sqlfoto = "UPDATE tbAnunciante SET fotoAnunciante = '$foto' WHERE idAnunciante = '$id'";
        if ($mysqli->query($sqlFoto) == true) {
            header("Cache-Control: no-cache, no-store, must-revalidate");
            header("Pragma: no-cache");
            header("Expires: 0");
            header("Location: ../edit-anunciante.php");
        } else {
            echo "Erro ao cadastrar no banco de dados.";
            $mysqli->error;
        }
    }

    $sql = "UPDATE tbAnunciante SET nomeAnunciante = '$nome', emailAnunciante = '$email', logradouroAnunciante = '$logradouro', cidadeAnunciante = '$cidade', numLocalAnunciante = '$numero', estadoAnunciante = '$estado', bairroAnunciante = '$bairro', cnpjAnunciante = '$cnpjNumerico', cepAnunciante = '$cepNum' WHERE idAnunciante = '$id'";
    if($mysqli->query($sql)==true){
        $sqlTelefone = "UPDATE tbTelefoneAnunciante SET numTelefoneAnunciante = '$telefoneNum' WHERE idAnunciante = '$id'";
        if($mysqli->query($sqlTelefone) == true){
            header("Cache-Control: no-cache, no-store, must-revalidate");
            header("Pragma: no-cache");
            header("Expires: 0");
            header("Location: ../edit-anunciante.php");
        } else {
            echo "Erro ao cadastrar o telefone no banco de dados.";
            $mysqli->error;
        }
    }
}
