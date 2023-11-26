<?php 
        include('conexao.php');
        include('cadastro.php');
        include('../../Login/login.php');

        if(isset($_POST['delete'])){
            $id = $_SESSION['id'];
            $senha = mysqli_real_escape_string($mysqli ,trim($_POST['senha']));
    
            //Select
    
            $selectOng = "SELECT * FROM tbOng WHERE idOng = '$id'";
            $query = $mysqli->query($selectOng) or die('Falha na execução do código SQL: ' . $mysqli->error);
            
            $result = $query->fetch_assoc();
    
            if(password_verify($senha, $result['senhaOng'])){
                $deleteAdocao = $mysqli->prepare("DELETE FROM tbAdocao WHERE idOng = '$id'");
                $deleteAdocao->execute();
    
                $deleteAnimal = $mysqli->prepare("DELETE FROM tbAnimal WHERE idOng = '$id'");
                $deleteAnimal->execute();
    
                $deleteApadrinhamento = $mysqli->prepare("DELETE FROM tbApadrinhamento WHERE idOng = '$id'");
                $deleteApadrinhamento->execute();
    
                $deleteCampanha = $mysqli->prepare("DELETE FROM tbCampanha WHERE idOng = '$id'");
                $deleteCampanha->execute();
    
                $deleteChat = $mysqli->prepare("DELETE FROM tbChat WHERE idOng = '$id'");
                $deleteChat->execute();
    
                $deleteDoacao = $mysqli->prepare("DELETE FROM tbDoacao WHERE idOng = '$id'");
                $deleteDoacao->execute();
    
                $deleteOng = $mysqli->prepare("DELETE FROM tbOng WHERE idOng = '$id'");
                $deleteOng->execute();
    
                $deletePost = $mysqli->prepare("DELETE FROM tbPost WHERE idOng = '$id'");
                $deletePost->execute();
    
                $deleteTelefone = $mysqli->prepare("DELETE FROM tbTelefoneOng WHERE idOng = '$id'");
                $deleteTelefone->execute();
    
                if($deleteOng && $deleteAdocao && $deleteAnimal && $deleteApadrinhamento && $deleteCampanha && $deleteChat && $deleteDoacao && $deletePost && $deleteTelefone):
                    session_destroy();
                    header("Location: ../../index.php");
                endif;
            }else{
                $_SESSION['erro'] = "Senha incorreta. Por favor, tente novamente.";
                header("Location: ../excluir-ong.php"); 
                exit;
            }
        }

?>