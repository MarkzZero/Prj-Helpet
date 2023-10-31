<?php
session_start();
include('../Login/conexao.php');

$arquivo = $_FILES['image'];

$nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
$email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
$telefone = mysqli_real_escape_string($mysqli, trim($_POST['telefone']));
$cpf = mysqli_real_escape_string($mysqli, trim($_POST['cpf']));
$senha = mysqli_real_escape_string($mysqli, trim($_POST['senha']));
$senhaConfirma = mysqli_real_escape_string($mysqli, trim($_POST['cpf']));
$bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));
$logradouro = mysqli_real_escape_string($mysqli, trim($_POST['numero']));
$cidade = mysqli_real_escape_string($mysqli, trim($_POST['cpf']));
$numero = mysqli_real_escape_string($mysqli, trim($_POST['cpf']));
$complemento = mysqli_real_escape_string($mysqli, trim($_POST['cpf']));
$estado = mysqli_real_escape_string($mysqli, trim($_POST['cpf']));
$cep = mysqli_real_escape_string($mysqli, trim($_POST['cpf']));
$nivel = mysqli_real_escape_string($mysqli, trim($_POST['cpf']));

if ($senha == $senhaConfirma) {
    $passwordHash = password_hash($senha, PASSWORD_DEFAULT);

    $cpfNumerico = preg_replace("/[^0-9]/", "", $cpf);

    $telefoneNum = preg_replace("/[^0-9]/", "", $telefone);

    $sql = "SELECT * from tbUsuario where emailUsuario = '$email'";
    $result = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);
    $row = mysqli_fetch_assoc($result);

    if ($result->num_rows > 0) {
        $_SESSION['existente'] = true;
        header("Location: ../index.php");
        exit;
    }

    $sql = "SELECT * from tbUsuario where nomeUsuario = '$nome'";
    $result = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

    if ($result->num_rows > 0) {
        $_SESSION['nome_existente'] = true;
        header("Location: ../index.php");
        exit;
    }

    $sql = "SELECT * from tbUsuario where cpfUsuario = '$cpfNumerico'";
    $result = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

    if ($result->num_rows > 0) {
        $_SESSION['cnpj_existente'] = true;
        header("Location: ../index.php");
        exit;
    }


    $verificarCpf = $cpf;
    if (validarCNPJ($verificarCpf)) {

        if ($arquivo !== null) {
            preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);

            if ($ext == true) {
                $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

                $caminho_arquivo = "fotoUsuario/" . $nome_arquivo;

                move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);

                $sql = "INSERT INTO tbUsuario (nomeUsuario, cpfUsuario, emailUsuario, senhaUsuario, bairroUsuario, logradouroUsuario, cidadeUsuario, numLocalUsuario, complementoUsuario, estadoUsuario, cepUsuario, nivelUsuario, fotoUsuario) VALUES ('$nome', '$cpf','$email', '$passwordHash', '$bairro', '$logradouro', '$cidade','$numero', '$complemento','$estado', '$cep', '$nivel', '$caminho_arquivo')";

                if ($mysqli->query($sql) === true) {
                    $id_usuario = $mysqli->insert_id;
                    $sql_tel = "INSERT INTO tbTelefoneUsuario (numTelefoneUsuario, idUsuario) VALUES ('$telefoneNum', '$id_usuario')";
                    if ($mysqli->query($sql_tel) === true) {
                        $_SESSION['status_cadastro'] = true;
                    }
                    $_SESSION['status_cadastro'] = true;
                }

                $mysqli->close();

                header("Location: ../index.php");
                exit;
            }
        }
    } else {
        $_SESSION['cpf_invalido'] = true;
        header('Location: ../index.php');
        exit;
    }


} else {
    $_SESSION['invalido'] = true;
    header("Location: ../index.php");
    exit;
}

function validaCPF($cpf) {

    // aqui ele estrai os numeros
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

    // aqui ele ve se sao informados corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Aqui ele ve se os numeros informados sao repetidos
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // e aqui faz o calculo de validar cpf
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

}

?>