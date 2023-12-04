<?php 
    include('../conexao/conexao.php');
    include('../Login/login.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idCampanha = $_POST['campanha_id'];
        $idUsuario = $_SESSION['id'];
    
        // Aqui você faz o cadastro no banco de dados usando os IDs obtidos
        $sql = "INSERT INTO tbfavoritocampanha(idCampanha, idUsuario) VALUES (?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ii", $idCampanha, $idUsuario);
        
        if ($stmt->execute()) {
            echo "Cadastro de favorito realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar favorito: " . $stmt->error;
        }
    
        $stmt->close();
        $mysqli->close();
    }
?>