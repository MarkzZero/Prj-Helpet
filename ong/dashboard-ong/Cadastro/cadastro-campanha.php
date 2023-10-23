<?php 
include('../config/conexao.php');
include('../config/config.php');
include('../../Login/login.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $descricao = mysqli_real_escape_string($mysqli, trim($_POST['descricao']));
    $horario = mysqli_real_escape_string($mysqli, trim($_POST['horario']));
    $data = mysqli_real_escape_string($mysqli, trim($_POST['data']));
    $cidade = mysqli_real_escape_string($mysqli, trim($_POST['cidade']));
    $bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));
    $logradouro = mysqli_real_escape_string($mysqli, trim($_POST['logradouro']));
    $numLog = mysqli_real_escape_string($mysqli, trim($_POST['numero']));
    $complemento= mysqli_real_escape_string($mysqli, trim($_POST['complemento']));
    $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
    $cep = mysqli_real_escape_string($mysqli, trim($_POST['cep']));
    $image = $_FILES['image'];

    if($image !== null){
        preg_match("/\.(png|jpg|jpeg){1}$/i", $image["name"], $ext);

        if($ext == true){
            $nome_image = md5(uniqid(time())) . "." . $ext[1];

            $caminho_image = "fotoCampanha/" . $nome_image;

            move_uploaded_file($image["tmp_name"], $caminho_image);
 
            $sql = "INSERT INTO tbCampanha (nomeCampanha, informacaoCampanha, horarioCampanha, diaCampanha, bairroCampanha, 
            logradouroCampanha, numLocalCampanha, complementoCampanha, estadoCampanha, cepCampanha, fotoPerfilCampanha) VALUES ('$nome', '$descricao', '$horario', '$data', '$bairro','$logradouro', '$numLog', '$complemento', '$estado', '$cep', '$caminho_image')";
            if($mysqli->query($sql) == true){

            }else{
                echo "Erro ao cadastrar: ", $mysqli->error;
            }

        }
    }


    $sql = "INSERT INTO tbCampanha (nomeCampanha, informacaoCampanha, horarioCampanha, diaCampanha, bairroCampanha, 
                                    logradouroCampanha, numLocalCampanha, complementoCampanha, estadoCampanha, cepCampanha) 
            VALUES ('$nome', '$descricao', '$horario', '$data', '$bairro','$logradouro', '$numLog', 
                    '$complemento', '$estado', '$cep')";

    if($mysqli->query($sql) == true){
        header('Location: ../Campanhas.php');
    }else{
        echo "Erro ao cadastrar: ", $mysqli->error;
    }

    header("Location: ../Campanhas.php");
    exit;
    

    $mysqli->close();
}
?>