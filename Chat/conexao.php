<?php

#Conecta ao banco de dados
$usuario = 'root';
$senha = '';
$database = 'bdHelpet';
$host = 'localhost';

$pdo = new PDO("mysql:host=$host;dbname=$database",$usuario,$senha);

?>

