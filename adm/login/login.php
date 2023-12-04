<?php 
    #Conecta com o banco.
    session_start();
    include('conexao.php');

    #Verificação de E-mail e senha.
    if(isset($_POST['usuario']) || isset($_POST['senha'])){
        if(strlen($_POST['usuario']) == 0){
            $_SESSION['incompleto'] = true;
            header('Location: ../index.php');
        }else if(strlen($_POST['senha']) == 0){
            $_SESSION['incompleto'] = true;
            header('Location: ../index.php');
        }else{

            #Verifica se existe o usuario e a senha no banco.
            $usuario =  $mysqli->real_escape_string($_POST['usuario']);
            $senha =  $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM tbUsuario WHERE nomeUsuario = '$usuario' AND senhaUsuario = '$senha'";

            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ". $mysqli->error);

            $quantidade = $sql_query->num_rows;



            if($quantidade == 'adm'){
                $_SESSION['usuario'] = $usuario || $_SESSION['senha'] = $senha;
                while($percorrer = mysqli_fetch_array($sql_query)){
                    $adm = $percorrer['nivelUsuario'];
                    if($adm == 1){
                        header('Location: ./dashboard-adm/index.php');
                    }else{
                        $_SESSION['invalido'] = true;
                        header('Location: ../index.php');
                        exit();  
                    }
                }
                header('Location: ../dashboard-adm/index.php');
                exit();
            }else{
                $_SESSION['nao_autenticado'] = true;
                header('Location: ../index.php');
                exit();
            }
            
            
        }
    }
?>