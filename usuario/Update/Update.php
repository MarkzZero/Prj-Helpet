<?php
include("../config/config.php");
include_once("../conexao/conexao.php");

if (isset($_POST['update'])) { 

    $image = $_FILES['image'];
    $foto = $_POST['foto'];
    $id = $_POST['id'];
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

    // Campos de Endereço
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_INT);
    $logradouro = mysqli_real_escape_string($mysqli, trim($_POST['logradouro']));
    $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
    $cidade = mysqli_real_escape_string($mysqli, trim($_POST['cidade']));
    $complemento = mysqli_real_escape_string($mysqli, trim($_POST['complemento']));
    $bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));


    if ($image !== null) {
        preg_match("/\.(png|jpg|jpeg){1}$/i", $image["name"], $ext);

        if ($ext == true) {
            $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

            $caminho_arquivo = "fotoUsuario/" . $nome_arquivo;
            $caminho = "../cadastro/fotoUsuario/" . $nome_arquivo;

            move_uploaded_file($image["tmp_name"], $caminho);

            $sqlFoto = "UPDATE tbUsuario SET fotoUsuario = '$caminho_arquivo' WHERE  = '$id'";
            if ($mysqli->query($sqlFoto)) {
                header("location: ../configuracoes.php");
            } else {
                echo "Erro ao inserir os dados";
                $mysqli->error;
            }
        }
    } else {
        $sqlUpdate = "UPDATE tbCampanha SET fotoPerfilCampanha = '$foto' WHERE idCampanha = '$id'";
        if ($mysqli->query($sqlUpdate)) {
            header("location: ../configuracoes.php");
        } else {
            echo "Erro ao inserir os dados";
            $mysqli->error;
        }
    }


    $sqlUsuario = "UPDATE tbUsuario SET nomeUsuario = '$nome',  emailUsuario = '$email', cepUsuario = '$cep', logradouroUsuario = '$logradouro', estadoUsuario = '$estado', numLocalUsuario = '$numero', cidadeUsuario = '$cidade', complementoUsuario = '$complemento', bairroUsuario = '$bairro' WHERE idUsuario = '$id'";

    if ($mysqli->query($sqlUsuario) == true) {
        header("location: ../perfil-usuario/configuracoes.php");
        $_SESSION['nome'] = $nome;
    } else {
        echo "Erro ao inserir os dados";
        $mysqli->error;
    }
    $mysqli->close();
}

?> 