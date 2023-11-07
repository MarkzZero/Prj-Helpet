<?php 
    
    #Se não iniciado, inica a sessão.
    if(!isset($_SESSION)){
        session_start();
    }

    #Destrói a sessão.
    session_destroy();

    #Volta para o login.
    header("Location: ../index.php");
?>