<?php

// Inclui o arquivo de conexão com o banco de dados
require_once "./src/conexao.php";

// Verifica se o formulário foi submetido
if(isset($_POST['submit'])) {

  // Obtém os dados do formulário
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $especie = $_POST['especie'];
  $sexo = $_POST['sexo'];
  $porte = $_POST['porte'];
  $raca = $_POST['raca'];
  $idade = $_POST['idade'];

  // Atualiza os dados na tabela "consultas"
  $stmt = $pdo->prepare("UPDATE animais SET nome = ?, especie = ?, sexo = ?, porte = ?, raca = ?, idade = ? WHERE id = ?");

  if($stmt->execute(array($nome, $especie, $sexo, $porte, $raca, $idade, $id))) {
    // Redireciona de volta para a página de listagem de consultas
    header("Location: administrador-adocao.php");
    exit();
  } else {
    echo "Erro ao atualizar dados: " . mysqli_error($conexao);
  }
}

// Verifica se foi enviado um ID para a página
if(isset($_GET["id"])) {
  // Obtém o ID do consultas a ser editado
  $id = $_GET["id"];

  // Consulta o banco de dados para obter os dados do consultas
  $stmt = $pdo->prepare("SELECT * FROM animais WHERE id = ?");
  $stmt->execute(array($id));
  $animais = $stmt->fetch();

  // Exibe o formulário com os dados do consultas encontrado
  ?>
  <link rel="stylesheet" type="text/css" href="./css/alterar-consultaa.css">
  <div class="container" >
    <h1>Editar Adoção</h1>
    <form method="POST">
	  
      <input type="hidden" name="id" value="<?php echo $animais['ID']; ?>">

      <div class="form-input">
	    <label for="descricao">Nome:</label>
        <input type="text" name="nome" placeholder="Nome Felpudo" value="<?php echo $animais['nome']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">Espécie:</label>
        <input type="text" name="especie" placeholder="Espécie Felpudo" value="<?php echo $animais['especie']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">Sexo:</label>
        <input type="text" name="sexo" placeholder="Gênero Felpudo" value="<?php echo $animais['sexo']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">Porte:</label>
        <input type="text" name="porte" placeholder="Porte do Felpudo"value="<?php echo $animais['porte']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">Raça:</label>
        <input type="text" name="raca" placeholder="Raça do Felpudo" value="<?php echo $animais['raca']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">Idade:</label>
        <input type="text" name="idade" placeholder="Idade do Felpudo" value="<?php echo $animais['idade']; ?>">
      </div>
      <button type="submit" name="submit" value="Atualizar" class="btn-atualizar">Atualizar</button>
    </form>
  </div>
  <?php
} else {
  // Se não foi enviado um ID, redireciona para a página de listagem de consultas
  header("Location: administrador-adocao.php");
  exit();
}
