<?php 
    #Conecta com o banco.
    session_start();
    include('conexao.php');

    #Verificação de E-mail e senha.
    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email']) == 0){
            $_SESSION['incompleto'] = true;
            header('Location: ../index.php');
        }else if(strlen($_POST['senha']) == 0){
            $_SESSION['incompleto'] = true;
            header('Location: ../index.php');
        }else{
            
            #Verifica se existe o email e a senha no banco.
            $email =  $mysqli->real_escape_string($_POST['email']);
            $senha =  $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM tbAnunciante WHERE emailAnunciante = '$email' LIMIT 1";

            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ". $mysqli->error);

            $usuario = $sql_query->fetch_assoc();

            $_SESSION['email-anunciante'] = $email;

            $_SESSION['foto-anunciante'] = $usuario['fotoAnunciante'];

            $_SESSION['nome-anunciante'] = $usuario['nomeAnunciante'];

            $_SESSION['id-anunciante'] = $usuario['idAnunciante'];

            if(password_verify($senha, $usuario['senhaAnunciante'])){
                header("Location: ../dashboard-anunciante/index.php");
            }else{
                $_SESSION['nao_autenticado'] = true;
                header('Location: ../index.php');
                exit();
            }



        }
    }
?>