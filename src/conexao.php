<?php
// Informações do banco de dados
$host = 'localhost';
$dbname = 'felpudos';
$username = 'root';
$password = '';

// Criar a conexão PDO
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
}
?>
