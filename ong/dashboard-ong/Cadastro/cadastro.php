<?php 
include('../config/conexao.php');
include('../config/config.php');
include('../../Login/login.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arquivo = $_FILES['image'];
    $opcional =  $_FILES['opcional'];

    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $porteSelecionado = $_POST['porte'];
    $idadeSelecionada = $_POST['idade'];
    $opcaoEspecie = $_POST['especie'];
    $opcaoGenero = $_POST['genero'];
    
    $racaSelecionada = $_POST['raca'];
    $idOng = $_SESSION['id'];

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
 
            $sql = "INSERT INTO tbAnimal (nomeAnimal, porteAnimal, descAnimal, idadeAnimal, especieAnimal, fotoPerfilAnimal, idOng, idRaca) VALUES ('$nome', '$inserirPorte', '$inserirGenero', '$inserirIdade','$inserirEspecie', '$caminho_arquivo', '$idOng', '$racaSelecionada')";
            
            if($mysqli->query($sql) == true){
                // Verifica se o animal foi inserido corretamente
                $id_animal = $mysqli->insert_id;
            
                if($opcional != null){
                    $total = count($opcional);
                    for($i=0; $i<$total; $i++){
                        preg_match("/\.(png|jpg|jpeg){1}$/i", $opcional["name"][$i], $ext);
                        if($ext != false){
                            $nome_opcional = md5(uniqid(time())) . "." . $ext[1];
            
                            $caminho_opcional = "Arquivos/" . $nome_opcional;
                            move_uploaded_file($opcional["tmp_name"][$i], $caminho_opcional);
            
                            $sql_opcional = "INSERT INTO tbfotoAnimal (fotosAnimal, idAnimal) VALUES ('$caminho_opcional', '$id_animal')";
            
                            if($mysqli->query($sql_opcional) === true){
                                // Imagem registrada com sucesso
                            } else {
                                // Tratamento de erro na consulta SQL
                            }
                        }
                    }
                }
                header('location: ../Pets.php');
                exit(); // Adicionando exit() para encerrar a execução após o redirecionamento
            } else {
                echo "Erro ao cadastrar: ", $mysqli->error;
            }

            header("Location: ../Pets.php");
            exit;
        }
    }

    $mysqli->close();
}
?>