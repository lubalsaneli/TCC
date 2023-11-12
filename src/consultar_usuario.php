<?php
// Inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";

function consultarUsuario($pdo, $email, $senha) {
  // Consulta o banco de dados para ver se há um usuário com esse login e senha
  $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$email, $senha]);
  $resultado = $stmt->fetch();

  return $resultado;
}
?>