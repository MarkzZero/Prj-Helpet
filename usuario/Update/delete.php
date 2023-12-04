<?php
include('../conexao/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $senha = mysqli_real_escape_string($mysqli, trim($_POST['senha']));

    $select = $mysqli->query("SELECT * FROM tbUsuario WHERE idUsuario = '$id'");
    $result = mysqli_fetch_assoc($select);

    if (password_verify($senha, $result['senhaUsuario'])) {
        $deleteAdocao = $mysqli->prepare("DELETE FROM tbAdocao WHERE idUsuario = '$id'");
        $deleteAdocao->execute();

        $deleteAnunciante = $mysqli->prepare("DELETE FROM tbAnunciante WHERE idUsuario = '$id'");
        $deleteAnunciante->execute();

        $deleteApadrinhamento = $mysqli->prepare("DELETE FROM tbApadrinhamento WHERE idUsuario = '$id'");
        $deleteApadrinhamento->execute();

        $deleteChat = $mysqli->prepare("DELETE FROM tbChat WHERE idUsuario = '$id'");
        $deleteChat->execute();

        $deleteDoacao = $mysqli->prepare("DELETE FROM tbDoacao WHERE idUsuario = '$id'");
        $deleteDoacao->execute();

        $deleteFavorito = $mysqli->prepare("DELETE FROM tbFavorito WHERE idUsuario = '$id'");
        $deleteFavorito->execute();

        $deleteInteracao = $mysqli->prepare("DELETE FROM tbInteracao WHERE idUsuario = '$id'");
        $deleteInteracao->execute();

        $deleteMensagem = $mysqli->prepare("DELETE FROM tbMensagem WHERE idUsuario = '$id'");
        $deleteMensagem->execute();

        $deletePrefe = $mysqli->prepare("DELETE FROM tbPrefeUsuario WHERE idUsuario = '$id'");
        $deletePrefe->execute();

        $deleteTelefone = $mysqli->prepare("DELETE FROM tbTelefoneUsuario WHERE idUsuario = '$id'");
        $deleteTelefone->execute();

        $deleteUsuario = $mysqli->prepare("DELETE FROM tbUsuario WHERE idUsuario = '$id'");
        $deleteUsuario->execute();

        if ($deleteAdocao && $deleteAnunciante && $deleteApadrinhamento && $deleteChat && $deleteDoacao && $deleteFavorito && $deleteInteracao && $deleteMensagem && $deletePrefe && $deleteTelefone && $deleteUsuario) :                    
            session_destroy();
            header("Location: ../index.php");
        endif;
    }else{
        $_SESSION['erro'] = "Senha incorreta. Por favor, tente novamente.";
        header("Location: perfilUsuario/configuracoes.php"); 
        exit;
    }
}
mysqli_close($mysqli);
?>