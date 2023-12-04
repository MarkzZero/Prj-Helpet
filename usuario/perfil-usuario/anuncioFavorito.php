<?php 
    include('../conexao/conexao.php');
    include('../Login/login.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idAnuncio = $_POST['anuncio_id'];
        $idUsuario = $_SESSION['id'];
    
        // Aqui você faz o cadastro no banco de dados usando os IDs obtidos
        $sql = "INSERT INTO tbAnuncioFavorito(idAnuncio, idUsuario) VALUES (?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ii", $idAnuncio, $idUsuario);
        
        if ($stmt->execute()) {
            echo "Cadastro de favorito realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar favorito: " . $stmt->error;
        }
    
        $stmt->close();
        $mysqli->close();
    }
?>