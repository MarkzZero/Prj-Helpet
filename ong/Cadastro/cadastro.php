<?php 
    session_start();
    include('../Login/conexao.php');

    $arquivo = $_FILES['image'];
    $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
    $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
    $telefone = mysqli_real_escape_string($mysqli, trim($_POST['telefone']));
    $cep = mysqli_real_escape_string($mysqli, trim($_POST['cep']));
    $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
    $cidade = mysqli_real_escape_string($mysqli, trim($_POST['cidade']));
    $bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));
    $logradouro = mysqli_real_escape_string($mysqli,trim( $_POST['logradouro']));
    $num = mysqli_real_escape_string($mysqli,trim( $_POST['numero'])) ;
    $complemento = mysqli_real_escape_string($mysqli, trim($_POST['complemento']));
    $cnpj = mysqli_real_escape_string($mysqli, trim($_POST['cnpj']));
    $capacidade = mysqli_real_escape_string($mysqli, trim($_POST['capacidade']));
    $cnas = mysqli_real_escape_string($mysqli, trim($_POST['cnas']));
    $cebas = mysqli_real_escape_string($mysqli, trim($_POST['cebas']));
    $senha = mysqli_real_escape_string($mysqli,trim($_POST['senha2']));
    $senhaConfirma = mysqli_real_escape_string($mysqli, trim($_POST['senha_confirma']));

    if ($senha == $senhaConfirma) {

        $passwordHash = password_hash($senha, PASSWORD_DEFAULT);

        $cnpjNumerico = preg_replace("/[^0-9]/", "", $cnpj);

        $telefoneNum = preg_replace("/[^0-9]/", "", $telefone);

        #Verificar se já existe
        $sql = "SELECT * from tbOng where emailOng = '$email'";
        $result = $mysqli->query($sql) or die ("Falha na execução do código SQL: ". $mysqli->error);
        $row = mysqli_fetch_assoc($result);

        if($result->num_rows > 0){
            $_SESSION['existente'] = true;
            header("Location: ../index.php");
            exit;
        }

        $sql = "SELECT * from tbOng where nomeOng = '$nome'";
        $result = $mysqli->query($sql) or die ("Falha na execução do código SQL: ". $mysqli->error);
        
        if($result->num_rows > 0){
            $_SESSION['nome_existente'] = true;
            header("Location: ../index.php");
            exit;
        }

        $sql = "SELECT * from tbOng where cnpjOng = '$cnpjNumerico'";
        $result = $mysqli->query($sql) or die ("Falha na execução do código SQL: ". $mysqli->error);
        
        if($result->num_rows > 0){
            $_SESSION['cnpj_existente'] = true;
            header("Location: ../index.php");
            exit;
        }

        $sql = "SELECT * from tbOng where cebasOng = '$cebas'";
        $result = $mysqli->query($sql) or die ("Falha na execução do código SQL: ". $mysqli->error);
        
        if($result->num_rows > 0){
            $_SESSION['cebas_existente'] = true;
            header("Location: ../index.php");
            exit;
        }

        $sql = "SELECT * from tbOng where cnasOng = '$cnas'";
        $result = $mysqli->query($sql) or die ("Falha na execução do código SQL: ". $mysqli->error);
        
        if($result->num_rows > 0){
            $_SESSION['cnas_existente'] = true;
            header("Location: ../index.php");
            exit;
        }



        

        $verificarCnpj = $cnpj; 
        if (validarCNPJ($verificarCnpj)) {

            if($arquivo !== null){
                preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);

                if($ext == true){
                    $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

                    $caminho_arquivo = "upload/" . $nome_arquivo;

                    move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);

                    $sql = "INSERT INTO tbOng (nomeOng, capacidadeOng, cidadeOng,bairroOng, emailOng, logradouroOng, numLogOng, cnpjOng, cnasOng, cebasOng, cepOng, complementoOng, estadoOng, senhaOng, fotoOng) VALUES ('$nome', '$capacidade', '$cidade','$bairro', '$email', '$logradouro', '$num', '$cnpjNumerico','$cnas', '$cebas','$cep', '$complemento', '$estado', '$passwordHash', '$caminho_arquivo')"; 

                    if($mysqli->query($sql) === true){
                        $id_ong = $mysqli->insert_id; 
                        $sql_tel = "INSERT INTO tbTelefoneOng (numTelefoneOng, idOng) VALUES ('$telefoneNum', '$id_ong')";
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