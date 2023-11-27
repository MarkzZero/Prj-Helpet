<?php 
include('../config/conexao.php');
include('../config/config.php');
include('../../Login/login.php');


if (isset($_POST['cadastrar'])) {
    $arquivo = $_FILES['image'];
    $opcional =  $_FILES['opcional'];
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $descricao = mysqli_real_escape_string($mysqli, trim($_POST['descricao']));
    $dataInicio = mysqli_real_escape_string($mysqli, trim($_POST['dataInicio']));
    $dataTermino = mysqli_real_escape_string($mysqli, trim($_POST['dataTermino']));
    $idAnunciante = $_SESSION['id'];

    if($arquivo !== null){
        preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);

        if($ext == true){

            $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

            $caminho_arquivo = "fotoAnuncio/" . $nome_arquivo;

            move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);
 
            $sql = "INSERT INTO tbAnuncio (nomeAnuncio, descAnuncio, dataInicioAnuncio, dataTerminoAnuncio, fotoAnuncio, idAnunciante) VALUES ('$nome', '$descricao', '$dataInicio', '$dataTermino', '$caminho_arquivo', '$idAnunciante')";
            
            if($mysqli->query($sql) == true){
                // Verifica se o animal foi inserido corretamente
                $id_anuncio = $mysqli->insert_id;
            
                // Inserção das fotos
                if($opcional != null){
                    $total = count($opcional);
                    for($i=0; $i<$total; $i++){
                        preg_match("/\.(png|jpg|jpeg){1}$/i", $opcional["name"][$i], $ext);
                        if($ext != false){
                            $nome_opcional = md5(uniqid(time())) . "." . $ext[1];
            
                            $caminho_opcional = "Arquivos/" . $nome_opcional;
                            if(move_uploaded_file($opcional["tmp_name"][$i], $caminho_opcional)){
                                $sql_opcional = "INSERT INTO tbfotosAnuncio (fotosAnuncio, idAnuncio) VALUES ('$caminho_opcional', '$id_anuncio')";
            
                                if($mysqli->query($sql_opcional) === true){
                                    echo "Imagem registrada com sucesso!";
                                } else {
                                    echo "Erro ao inserir a imagem no banco de dados: " . $mysqli->error;
                                }
                            } else {
                                echo "Erro ao mover a imagem para o diretório.";
                            }
                        } else {
                            echo "A extensão da imagem não é suportada.";
                        }
                    }
                }
            
                header('location: ../index.php');
                exit();
            } else {
                echo "Erro ao inserir o anúncio no banco de dados: " . $mysqli->error;
            }

            header("Location: ../index.php");
            exit;
        }
    }

    $mysqli->close();
}
?>