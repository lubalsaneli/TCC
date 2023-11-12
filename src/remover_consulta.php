<?php

// Inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";

// Verifica se foi enviado um ID para a página
if(isset($_GET["id"])) {
  // Obtém o ID do produto a ser excluído
  $id = $_GET["id"];

  // Exclui o registro da tabela "produtos"
  $stmt = $pdo->prepare("DELETE FROM consultas WHERE id = ?");
  if($stmt->execute(array($id))) {
    // Redireciona de volta para a página de listagem de produtos
    header("Location: ../administrador-consulta.php");
    exit();
  } else {
    echo "Erro ao excluir registro: " . mysqli_error($conexao);
  }
} else {
  // Se não foi enviado um ID, redireciona para a página de listagem de produtos
  header("Location: ../administrador-consulta.php");
  exit();
}
