<?php
header('Content-Type: text/html; charset=utf-8');

date_default_timezone_set('America/Sao_Paulo');

$servername = "localhost";
$username = "root";
$password = "";
$datebase= "livraria";


$conn = new mysqli($servername, $username, $password, $datebase);

if ($conn->connect_error)  die("Falha de conexão: " . $conn->connect_error);

$conn->query("SET NAMES 'utf8'");

$conn->query('SET character_set_connection=utf8');

$conn->query('SET character_set_client=utf8');

$conn->query('SET character_set_results=utf8');

$conn->query('SET GLOBAL lc_time_names = pt_BR');

$conn->query('SET lc_time_names = pt_BR');

?>