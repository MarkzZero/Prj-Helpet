<?php 

    #Se não iniciado, inica a sessão.
    if(!isset($_SESSION)){
        session_start();
    }

    #Se não estiver logado, voltará para o login.
    if(!isset($_SESSION['usuario'])){
        die(header('location: ../index.php'));
    }
?>