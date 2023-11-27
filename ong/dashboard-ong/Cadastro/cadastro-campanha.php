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
    $complemento = mysqli_real_escape_string($mysqli, trim($_POST['complemento']));
    $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
    $cep = mysqli_real_escape_string($mysqli, trim($_POST['cep']));
    $opcional = $_FILES['opcional'];
    $image = $_FILES['image'];
    $id = $_SESSION['id-ong'];

    if ($image !== null) {
        preg_match("/\.(png|jpg|jpeg){1}$/i", $image["name"], $ext);

        if ($ext == true) {
            $nome_image = md5(uniqid(time())) . "." . $ext[1];

            $caminho_image = "fotoCampanha/" . $nome_image;

            move_uploaded_file($image["tmp_name"], $caminho_image);

            $sql = "INSERT INTO tbCampanha (nomeCampanha, informacaoCampanha, horarioCampanha, diaCampanha, bairroCampanha, 
            logradouroCampanha, numLocalCampanha, complementoCampanha, estadoCampanha, cepCampanha, fotoPerfilCampanha, cidadeCampanha, idOng) VALUES ('$nome', '$descricao', '$horario', '$data', '$bairro','$logradouro', '$numLog', '$complemento', '$estado', '$cep', '$caminho_image', '$cidade', '$id')";
            if ($mysqli->query($sql) == true) {
                $id_campanha = $mysqli->insert_id;
            
                // Inserção das fotos
                if($opcional != null){
                    $total = count($opcional);
                    for ($i = 0; $i < $total; $i++) {
                        preg_match("/\.(png|jpg|jpeg){1}$/i", $opcional["name"][$i], $ext);
                    
                            $nome_opcional = md5(uniqid(time())) . "." . $ext;
                    
                            $caminho_opcional = "arquivoCampanha/" . $nome_opcional;
                            move_uploaded_file($opcional["tmp_name"][$i], $caminho_opcional);
                                $sql_opcional = "INSERT INTO tbfotocampanha (fotosCampanha, idCampanha) VALUES ('$caminho_opcional', '$id_campanha')";
                    
                                if ($mysqli->query($sql_opcional) === true) {
                                    echo "Imagem registrada com sucesso!";
                                } else {
                                    echo "Erro ao inserir imagem no banco de dados: " . $mysqli->error;
                                }
                    }
                }

                header('location: ../campanhas.php');
                exit();
                            
            } else {
                echo "Erro ao cadastrar: ", $mysqli->error;
            }

        }
    }



    $mysqli->close();
}
?>