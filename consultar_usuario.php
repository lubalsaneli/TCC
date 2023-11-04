<?php
// Inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";

function consultarUsuario($pdo, $login, $senha) {
  // Consulta o banco de dados para ver se há um usuário com esse login e senha
  $sql = "SELECT * FROM usuarios WHERE login = ? AND senha = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$login, $senha]);
  $resultado = $stmt->fetch();

  return $resultado;
}
?>