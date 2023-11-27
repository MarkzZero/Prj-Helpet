<?php 

    include('../conexao/conexao.php');

    $arquivo = $_FILES['image'];
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $cnpj = mysqli_real_escape_string($mysqli, trim($_POST['cnpj']));
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

    if ($senha == $senhaConfirma) {

        $passwordHash = password_hash($senha, PASSWORD_DEFAULT);

        $cnpjNumerico = preg_replace("/[^0-9]/", "", $cnpj);

        $telefoneNum = preg_replace("/[^0-9]/", "", $telefone);

        #Verificar se já existe
        $sql = "SELECT * from tbAnunciante where emailAnunciante = '$email'";
        $result = $mysqli->query($sql) or die ("Falha na execução do código SQL: ". $mysqli->error);
        $row = mysqli_fetch_assoc($result);

        if($result->num_rows > 0){
            $_SESSION['existente'] = true;
            header("Location: ../index.php");
            exit;
        }

        $sql = "SELECT * from tbAnunciante where nomeAnunciante = '$nome'";
        $result = $mysqli->query($sql) or die ("Falha na execução do código SQL: ". $mysqli->error);
        
        if($result->num_rows > 0){
            $_SESSION['nome_existente'] = true;
            header("Location: ../index.php");
            exit;
        }

        $sql = "SELECT * from tbAnunciante where cnpjAnunciante = '$cnpjNumerico'";
        $result = $mysqli->query($sql) or die ("Falha na execução do código SQL: ". $mysqli->error);
        
        if($result->num_rows > 0){
            $_SESSION['cnpj_existente'] = true;
            header("Location: ../index.php");
            exit;
        }

        $verificarCnpj = $cnpj; 
        if (validarCNPJ($verificarCnpj)) {

            if($arquivo !== null){
                preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);

                if($ext == true){
                    $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

                    $caminho_arquivo = "fotoAnunciante/" . $nome_arquivo;

                    move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);

                    $sql = "INSERT INTO tbAnunciante (nomeAnunciante, emailAnunciante, senhaAnunciante, logradouroAnunciante, cidadeAnunciante, numLocalAnunciante, complementoAnunciante, estadoAnunciante, bairroAnunciante, cnpjAnunciante, cepAnunciante, fotoAnunciante) 
                    VALUES ('$nome', '$email', '$passwordHash', '$logradouro', '$cidade', '$numero', '$complemento', '$estado', '$bairro', '$cnpj', '$cep', '$caminho_arquivo')";
       
                    if($mysqli->query($sql) === true){
                        $id_Anunciante = $mysqli->insert_id; 
                        $sql_tel = "INSERT INTO tbTelefoneAnunciante (numTelefoneAnunciante, idAnunciante) VALUES ('$telefoneNum', '$id_Anunciante')";
                       
                        if($mysqli->query($sql_tel) === true){
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
            $_SESSION['cnpj_invalido'] = true;
            header('Location: ../index.php');
            exit;
        }

        
    } else {
        $_SESSION['invalido']= true;
        header("Location: ../index.php");
        exit;
    }   

    function validarCNPJ($verificarCnpj) {
        $verificarCnpj = preg_replace('/[^0-9]/', '', $verificarCnpj);
    
        if (strlen($verificarCnpj) != 14) {
            return false;
        }

        $soma = 0;
        $multiplicador = 5;
        for ($i = 0; $i < 12; $i++) {
            $soma += intval($verificarCnpj[$i]) * $multiplicador;
            $multiplicador = ($multiplicador == 2) ? 9 : $multiplicador - 1;
        }
    
        $resto = $soma % 11;
        $digito1 = ($resto < 2) ? 0 : 11 - $resto;
    
        if ($verificarCnpj[12] != $digito1) {
            return false;
        }
    
        $soma = 0;
        $multiplicador = 6;
        for ($i = 0; $i < 13; $i++) {
            $soma += intval($verificarCnpj[$i]) * $multiplicador;
            $multiplicador = ($multiplicador == 2) ? 9 : $multiplicador - 1;
        }
    
        $resto = $soma % 11;
        $digito2 = ($resto < 2) ? 0 : 11 - $resto;
    
        if ($verificarCnpj[13] != $digito2) {
            return false;
        }
    
        return true;
    }
    
?>