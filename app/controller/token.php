<?php
require ('../../vendor/autoload.php');
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__FILE__, 3));
$dotenv->load();

$dataRequest = json_decode(file_get_contents('php://input'), true);

$user = $dataRequest['user'];
$senha = $dataRequest['senha'];
echo json_encode($senha);