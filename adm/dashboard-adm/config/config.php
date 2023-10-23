<?php 
    include('conexao.php');

    $result = $mysqli->query("SELECT idOng, nomeOng, capacidadeOng, emailOng, senhaOng, logradouroOng, 
                                     numLogOng, complementoOng, estadoOng, bairroOng, cnpjOng, cnasOng, cebasOng, 
                                     cepOng, fotoOng FROM tbOng ORDER BY idOng ASC") or die($mysqli->error);
?>