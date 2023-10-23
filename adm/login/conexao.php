<?php

#Conecta ao banco de dados

$usuario = 'root';
$senha = '';
$database = 'bdHelpet';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

#Verifica se exite erros
if($mysqli->error){
    die('Fala ao conectar ao banco de dados: '. $mysqli->error);
}


?>