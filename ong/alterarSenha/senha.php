<?php 
    session_start();
    include('config/conexao.php');

    $selectSql = "SELECT * FROM tbOng";
    $resultSql = $mysqli->query($selectSql) or die("Falha no processamento". $mysqli->error);

    $result = $resultSql->fetch_assoc();

    $nome = mysqli_real_escape_string($mysqli, trim($_POST['Nome']));
    $senha = mysqli_real_escape_string($mysqli, trim($_POST['Senha']));
    $senhaConfirma = mysqli_real_escape_string($mysqli, trim($_POST['ConfirmSenha']));

    

    if($nome == $result['nomeOng']){
        if($senha == $senhaConfirma){
            $passwordHash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "UPDATE tbOng  SET senhaOng = '$senha' WHERE nomeOng = '$nome'";
            $result = $mysqli->query($sql) or die("Falha no processamento: ". $mysqli->error);

            $mysqli->close();

            header("Location: alterarSenha.php");

            exit;
        }
    }
?>