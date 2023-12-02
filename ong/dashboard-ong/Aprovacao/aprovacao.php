<?php 
    include('../config/conexao.php');

    if(isset($_POST['idAdocao'])){
        $idAdocao = $_POST['idAdocao'];
        $idAnimal = $_POST['idAnimal'];

        $query = "UPDATE tbAdocao set status = 'aprovada' WHERE idAdocao = '$idAdocao'";
        if($mysqli->query($query) == true){
            $updateStatus = "UPDATE tbAnimal SET status = 'Indisponível' WHERE idAnimal = '$idAnimal'";
            if($mysqli->query($updateStatus) == true){
                header("Location: ../solicitacoes.php");
            }
        }else{
            echo "Erro na execução da query: ". $mysqli->error;
        }

    }
    

?>