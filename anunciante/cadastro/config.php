<?php
    include('../conexao/conexao.php');

    $id = $_SESSION['id-anunciante'];

    $result = $mysqli->query("SELECT * FROM tbAnunciante WHERE idAnunciante = '$id'")
?>