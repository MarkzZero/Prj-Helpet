<?php
include("config/conexao.php");
include("config/config.php");

    $id = $_GET['id'];



    $deleteAdocao = $mysqli->prepare("DELETE FROM tbAdocao WHERE idUsuario = '$id'");
    $deleteAdocao->execute();

    $deleteAnunciante = $mysqli->prepare("DELETE FROM tbAnunciante WHERE idUsuario = '$id'");
    $deleteAnunciante->execute();

    $deleteAnunciofavorito = $mysqli->prepare("DELETE FROM tbAnunciofavorito WHERE idUsuario = '$id'");
    $deleteAnunciofavorito->execute();

    $deleteApadrinhamento = $mysqli->prepare("DELETE FROM tbApadrinhamento WHERE idUsuario = '$id'");
    $deleteApadrinhamento->execute();

    $deletechat = $mysqli->prepare("DELETE FROM tbchat WHERE idUsuario = '$id'");
    $deletechat->execute();

    $deletedoacao = $mysqli->prepare("DELETE FROM tbdoacao WHERE idUsuario = '$id'");
    $deletedoacao->execute();

    $deletefavorito = $mysqli->prepare("DELETE FROM tbfavorito WHERE idUsuario = '$id'");
    $deletefavorito->execute();

    $deletefavoritocampanha = $mysqli->prepare("DELETE FROM tbfavoritocampanha WHERE idUsuario = '$id'");
    $deletefavoritocampanha->execute();

    $deleteinteracao = $mysqli->prepare("DELETE FROM tbinteracao WHERE idUsuario = '$id'");
    $deleteinteracao->execute();

    $deletemensagem = $mysqli->prepare("DELETE FROM tbmensagem WHERE idUsuario = '$id'");
    $deletemensagem->execute();

    $deleteprefeusuario = $mysqli->prepare("DELETE FROM tbprefeusuario WHERE idUsuario = '$id'");
    $deleteprefeusuario->execute();

    $deletetelefoneusuario = $mysqli->prepare("DELETE FROM tbtelefoneusuario WHERE idUsuario = '$id'");
    $deletetelefoneusuario->execute();

    $deleteusuario = $mysqli->prepare("DELETE FROM tbusuario WHERE idUsuario = '$id'");
    $deleteusuario->execute();

    if($deletedoacao && $deleteAnunciante && $deleteAnunciofavorito && $deleteApadrinhamento && $deletechat && $deleteAdocao && $deletefavorito && $deletefavoritocampanha && $deleteinteracao && $deletemensagem && $deleteprefeusuario && $deletetelefoneusuario && $deleteusuario):
        header("Location: usuarios.php");
    endif;
