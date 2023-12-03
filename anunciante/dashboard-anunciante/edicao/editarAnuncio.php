<?php
include("../config/conexao.php");

if (isset($_POST['update'])) {
    $id = filter_input(INPUT_POST, 'idAnuncio', FILTER_SANITIZE_NUMBER_INT);
    $foto = mysqli_real_escape_string($mysqli, trim($_POST['foto']));
    $image = $_FILES['image'];
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $inicio = $_POST['inicio'];
    $termino = $_POST['termino'];
    $descricao = mysqli_real_escape_string($mysqli, trim($_POST['descricao']));

    if ($image !== null) {
        preg_match("/\.(png|jpg|jpeg){1}$/i", $image["name"], $ext);
    
        if ($ext == true) {
            $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];
    
            $caminho_arquivo = "fotoAnuncio/" . $nome_arquivo;
    
            move_uploaded_file($image["tmp_name"], $caminho_arquivo);
    
            $sqlFoto = "UPDATE tbAnuncio SET fotoAnuncio = '$caminho_arquivo' WHERE idAnuncio = '$id'";
            if ($mysqli->query($sqlFoto) == true) {
                header("location: ../campanhas.php");
            } else {
                echo "Erro ao inserir os dados";
                echo $mysqli->error;  // Adicionado para exibir a mensagem de erro do MySQL
            }
        }
    } else {
        $sqlUpdate = "UPDATE tbAnuncio SET fotoAnuncio = '$foto' WHERE idAnuncio = '$id'";
        if ($mysqli->query($sqlUpdate) == true) {
            header("location: ../index.php");
        } else {
            echo "Erro ao inserir as fotos";
            echo $mysqli->error;  // Adicionado para exibir a mensagem de erro do MySQL
        }
    }

    $sql = "UPDATE tbAnuncio SET nomeAnuncio = '$nome', descAnuncio = '$descricao', dataInicioAnuncio = '$inicio', dataTerminoAnuncio = '$termino' WHERE idAnuncio = '$id'";
    if($mysqli->query($sql) == true){
        header("Location: ../index.php");
    }else{
        echo "Erro ao inserir os dados";
        $mysqli->error;
    }
}
