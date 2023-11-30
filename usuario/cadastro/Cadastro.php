<?php 

    
    include('../conexao/conexao.php');

    
    $image= $_FILES['image'];
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $telefone = mysqli_real_escape_string($mysqli, trim($_POST['telefone']));
    $senha = mysqli_real_escape_string($mysqli, trim($_POST['senha']));
    $senhaConfirma = mysqli_real_escape_string($mysqli, trim($_POST['senha_confirma']));
    $cep = mysqli_real_escape_string($mysqli, trim($_POST['cep']));
    $logradouro = mysqli_real_escape_string($mysqli, trim($_POST['logradouro']));
    $numero = mysqli_real_escape_string($mysqli, trim($_POST['numero']));
    $cidade = mysqli_real_escape_string($mysqli, trim($_POST['cidade']));
    $complemento = mysqli_real_escape_string($mysqli, trim($_POST['complemento']));
    $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
    $bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));
    $opcaoTipo = $_POST['tipoPet'];
    $opcaoGenero = $_POST['GenPet'];
    $opcaoPorte = $_POST['portePet'];
    $opcaoPrefe = $_POST['prefPet'];
    $opcaoIdade = $_POST['idadePet'];
    $racaSelecionada = $_POST['raca'];

    $dadosTipo = array(
        "opGato" => "Gato",
        "opCachorro" => "Cachorro",
        "semPreferencia" => "Sem Preferência"
    );

    $dadosGenero = array(
        "opMacho" => "Macho",
        "opFemea" => "Fêmea",
        "semPreferencia" => "Sem Preferência"
    );

    $dadosPorte = array(
        "opPequeno" => "Pequeno",
        "opMedio" => "Médio",
        "opGrande" => "Grande",
        "semPreferencia" => "Sem Preferência"
    );

    $dadosPrefe = array(
        "opAdotar" => "Adotar",
        "opApadrinhar" => "Apadrinhar",
        "semPreferencia" => "Sem Preferência"
    );

    $dadosIdade = array(
        "opFilhote" => "Filhote",
        "opAdulto" => "Adulto",
        "opIdoso" => "Idoso",
        "semPreferencia" => "Sem Preferência"
    );

    $inserirTipo = $dadosTipo[$opcaoTipo];
    $inserirGenero = $dadosGenero[$opcaoGenero];
    $inserirPorte = $dadosPorte[$opcaoPorte];
    $inserirPrefe = $dadosPrefe[$opcaoPrefe];
    $inserirIdade = $dadosIdade[$opcaoIdade];

    if($senha == $senhaConfirma){
        $passwordHash = password_hash($senha, PASSWORD_DEFAULT);

        $telefoneNum = preg_replace("/[^0-9]/", "", $telefone);

        //Verificar se os dados já existem
        $sql = "SELECT * FROM tbUsuario WHERE emailUsuario = '$email'";
        $result = $mysqli->query($sql) or die($mysqli->error);
        $row = mysqli_fetch_assoc($result);

        if($result->num_rows > 0){
            $_SESSION['existente'] == true;
            header("Location: ../cadastro.php");
            exit;
        }

        if($image != null){
            preg_match("/\.(png|jpg|jpeg){1}$/i", $image["name"], $ext);
            if($ext == true){
                
            $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

            $caminho_arquivo = "fotoUsuario/" . $nome_arquivo;

            move_uploaded_file($image["tmp_name"], $caminho_arquivo);

            $sql = "INSERT INTO tbUsuario (nomeUsuario, emailUsuario, senhaUsuario, bairroUsuario, cidadeUsuario, numLocalUsuario, complementoUsuario, estadoUsuario, cepUsuario, logradouroUsuario, fotoUsuario) VALUES ('$nome', '$email', '$passwordHash', '$bairro', '$cidade', '$numero', '$complemento', '$estado', '$cep', '$logradouro', '$caminho_arquivo')";
            if($mysqli->query($sql) == true){
                $id_Usuario = $mysqli->insert_id; 
                $sql_tel = "INSERT INTO tbTelefoneUsuario (numTelefoneUsuario, idUsuario) VALUES ('$telefoneNum', '$id_Usuario')";
                if($mysqli->query($sql_tel) === true){
                    $sqlPrefe = "INSERT INTO tbPrefeUsuario (tipoPet, generoPet, portePet, preferenciaUsuario, idadePet, idUsuario, idRaca) VALUES ('$inserirTipo', '$inserirGenero', '$inserirPorte', '$inserirPrefe', '$inserirIdade', '$id_Usuario', '$racaSelecionada')";
                    if($mysqli->query($sqlPrefe) == true){
                        header("Location: ../index.php");
                    };
                }   
                $_SESSION['status_cadastro'] = true;
            }else{
                echo $mysqli->error;
            }
            $mysqli->close();
            exit;
            }
        }


    }else{
        $_SESSION['invalido'] == true;
        header("Location: ../cadastro.php");
        exit;
    }
?>