<?php
$host = 'localhost';
$banco = 'helpdesk';
$usuario = 'root';
$senha = 'pucprpucpr';

try {
    // Conexao segura utilizando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8mb4", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}
?>