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

            $sql_code = "SELECT * FROM tbUsuario WHERE emailUsuario = '$email' LIMIT 1";

            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ". $mysqli->error);

            $usuario = $sql_query->fetch_assoc();

            $_SESSION['usuario'] = $usuario;

            $_SESSION['foto'] = $usuario['fotoUsuario'];

            $_SESSION['nome'] = $usuario['nomeUsuario'];

            $_SESSION['id'] = $usuario['idUsuario'];

            if(password_verify($senha, $usuario['senhaUsuario'])){
                header("Location: ../perfil-usuario/index.php");
            }else{
                $_SESSION['nao_autenticado'] = true;
                header('Location: ../index.php');
                exit();
            }



        }
    }
?>