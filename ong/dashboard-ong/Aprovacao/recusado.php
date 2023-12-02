<?php 
    include('../config/conexao.php');

    if(isset($_POST['idAdocao'])){
        $idAdocao = $_POST['idAdocao'];

        $query = "UPDATE tbAdocao set status = 'rejeitada' WHERE idAdocao = '$idAdocao'";
        if($mysqli->query($query) == true){
            header("Location: ../solicitacoes.php");
        }else{
            echo "Erro na execução da query: ". $mysqli->error;
        }

    }
    

?>