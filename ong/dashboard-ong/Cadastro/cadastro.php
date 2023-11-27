<?php 
include('../config/conexao.php');
include('../config/config.php');
include('../../Login/login.php');


if (isset($_POST['cadastrar'])) {
    $arquivo = $_FILES['image'];
    $opcional =  $_FILES['opcional'];
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $porteSelecionado = $_POST['porte'];
    $idadeSelecionada = $_POST['idade'];
    $opcaoEspecie = $_POST['especie'];
    $opcaoGenero = $_POST['genero'];
    $racaSelecionada = $_POST['raca'];
    $vacSelecionada = $_POST['vacina'];
    $doencaSelecionada = $_POST['doenca'];
    $descricao = mysqli_real_escape_string($mysqli, trim($_POST['descricao']));
    $idOng = $_SESSION['id-ong'];

    $dadosIdade = array(
        "opFilhote" => "Filhote (Menos de 1 ano)",
        "opAdulto" => "Adulto (Entre 1 e 3 anos)",
        "opAdulto2" => "Adulto (Entre 3 e 5 anos)",
        "opIdoso" => "Idoso (Mais de 5 anos)"
    );

    $dadosEspecie = array(
        "opCachorro" => "Cachorro",
        "opGato" => "Gato"
    );

    $dadosGenero = array(
        "femea" => "Fêmea",
        "macho" => "Macho"
    );

    $dadosPorte = array(
        "opExistente" => "",
        "opPequeno" => "Pequeno",
        "opMedio" => "Médio",
        "opGrande" => "Grande"
    );

    $inserirIdade = $dadosIdade[$idadeSelecionada];
    $inserirPorte = $dadosPorte[$porteSelecionado];
    $inserirEspecie = $dadosEspecie[$opcaoEspecie];
    $inserirGenero = $dadosGenero[$opcaoGenero];

    if($arquivo !== null){
        preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);

        if($ext == true){

            $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

            $caminho_arquivo = "fotoPerfil/" . $nome_arquivo;

            move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);
 
            $sql = "INSERT INTO tbAnimal (nomeAnimal, porteAnimal, generoAnimal, idadeAnimal, especieAnimal, fotoPerfilAnimal, descAnimal, idOng, idRaca, idVacina, idDoenca) VALUES ('$nome', '$inserirPorte', '$inserirGenero', '$inserirIdade','$inserirEspecie', '$caminho_arquivo', '$descricao', '$idOng', '$racaSelecionada', '$vacSelecionada', '$doencaSelecionada')";
            
            if($mysqli->query($sql) == true){
                // Verifica se o animal foi inserido corretamente
                $id_animal = $mysqli->insert_id;
            
                // Inserção das fotos
                if($opcional != null){
                    $total = count($opcional);
                    for($i=0; $i<$total; $i++){
                        preg_match("/\.(png|jpg|jpeg){1}$/i", $opcional["name"][$i], $ext);
                        if($ext != false){
                            $nome_opcional = md5(uniqid(time())) . "." . $ext[1];
            
                            $caminho_opcional = "Arquivos/" . $nome_opcional;
                            if(move_uploaded_file($opcional["tmp_name"][$i], $caminho_opcional)){
                                $sql_opcional = "INSERT INTO tbfotoAnimal (fotosAnimal, idAnimal) VALUES ('$caminho_opcional', '$id_animal')";
            
                                if($mysqli->query($sql_opcional) === true){
                                    echo "Imagem registrada com sucesso!";
                                } else {
                                    echo "Erro ao inserir imagem no banco de dados: " . $mysqli->error;
                                }
                            } else {
                                echo "Erro ao mover a imagem para o diretório.";
                            }
                        } else {
                            echo "A extensão da imagem não é suportada.";
                        }
                    }
                }
            
                header('location: ../Pets.php');
                exit();
            } else {
                echo "Erro ao inserir animal no banco de dados: " . $mysqli->error;
            }

            header("Location: ../Pets.php");
            exit;
        }
    }

    $mysqli->close();
}
?>