<?php 
        include('../config/conexao.php');
        include('../../Login/login.php');

        if(isset($_POST['delete'])){
            $id = $_SESSION['id-ong'];
            $senha = mysqli_real_escape_string($mysqli ,trim($_POST['senha']));
    
            //Select
    

    
            if(password_verify($senha, $result['senhaOng'])){
                $deleteAdocao = $mysqli->prepare("DELETE FROM tbAdocao WHERE idOng = '?'");
                $deleteAdocao->bind_param('s', $id);
                $deleteAdocao->execute();
    
                $deleteAnimal = $mysqli->prepare("DELETE FROM tbAnimal WHERE idOng = '?'");
                $deleteAnimal->bind_param('s', $id);
                $deleteAnimal->execute();
    
                $deleteApadrinhamento = $mysqli->prepare("DELETE FROM tbApadrinhamento WHERE idOng = '?'");
                $deleteApadrinhamento->bind_param('s', $id);
                $deleteApadrinhamento->execute();
    
                $deleteCampanha = $mysqli->prepare("DELETE FROM tbCampanha WHERE idOng = '?'");
                $deleteCampanha->bind_param('s', $id);
                $deleteCampanha->execute();
    
                $deleteChat = $mysqli->prepare("DELETE FROM tbChat WHERE idOng = '?'");
                $deleteChat->bind_param('s', $id);
                $deleteChat->execute();
    
                $deleteDoacao = $mysqli->prepare("DELETE FROM tbDoacao WHERE idOng = '?'");
                $deleteDoacao->bind_param('s', $id);
                $deleteDoacao->execute();
    
                $deleteOng = $mysqli->prepare("DELETE FROM tbOng WHERE idOng = '?'");
                $deleteOng->bind_param('s', $id);
                $deleteOng->execute();
    
                $deletePost = $mysqli->prepare("DELETE FROM tbPost WHERE idOng = '?'");
                $deletePost->bind_param('s', $id);
                $deletePost->execute();
    
                $deleteTelefone = $mysqli->prepare("DELETE FROM tbTelefoneOng WHERE idOng = '?'");
                $deleteTelefone->bind_param('s', $id);
                $deleteTelefone->execute();
    
                session_destroy();
                header("Location: ../../index.php");

                if ($deleteAdocao->errno || $deleteAnimal->errno || $deleteApadrinhamento || $deleteCampanha || $deleteChat || $deleteDoacao || $deleteOng || $deletePost || $deleteTelefone) {
                    die('Erro ao deletar: ' . $mysqli->error);
                }
            } else {
                $_SESSION['erro'] = "Senha incorreta. Por favor, tente novamente.";
                header("Location: ../configuracoes.php"); 
                exit;
            }
        }

?>