<?php

// Inclui o arquivo de conexão com o banco de dados
require_once "./src/conexao.php";

// Verifica se o formulário foi submetido
if(isset($_POST['submit'])) {

  // Obtém os dados do formulário
  $id = $_POST['id'];
  $nomedono = $_POST['nomedono'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];
  $cpf = $_POST['cpf'];
  $raca = $_POST['raca'];
  $porte = $_POST['porte'];
  $especie = $_POST['especie'];
  $sexoanimal = $_POST['sexoanimal'];

  // Atualiza os dados na tabela "consultas"
  $stmt = $pdo->prepare("UPDATE consultas SET nomedono = ?, email = ?, celular = ?, cpf = ?, raca = ?, porte = ?, especie = ?, sexoanimal = ?  WHERE id = ?");

  if($stmt->execute(array($nomedono, $email, $celular, $cpf, $raca, $porte, $especie, $sexoanimal, $id))) {
    // Redireciona de volta para a página de listagem de consultas
    header("Location: administrador-consulta.php");
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
  $stmt = $pdo->prepare("SELECT * FROM consultas WHERE id = ?");
  $stmt->execute(array($id));
  $consultas = $stmt->fetch();

  // Exibe o formulário com os dados do consultas encontrado
  ?>
  <link rel="stylesheet" type="text/css" href="./css/alterar-consultaa.css">
  <div class="container" >
    <h1>Editar Consulta</h1>
    <form method="POST">
	  
      <input type="hidden" name="id" value="<?php echo $consultas['ID']; ?>">

      <div class="form-input">
	    <label for="descricao">Nome:</label>
        <input type="text" name="nomedono" placeholder="Nome do Dono" value="<?php echo $consultas['nomedono']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">Email:</label>
        <input type="text" name="email" placeholder="Email do Dono" value="<?php echo $consultas['email']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">Celular:</label>
        <input type="text" name="celular" placeholder="Celular do Dono" value="<?php echo $consultas['celular']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">CPF:</label>
        <input type="text" name="cpf" placeholder="CPF" value="<?php echo $consultas['cpf']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">Raça:</label>
        <input type="text" name="raca" placeholder="Raça do animal" value="<?php echo $consultas['raca']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">Porte:</label>
        <input type="text" name="porte" placeholder="Porte do Animal" value="<?php echo $consultas['porte']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">Especie:</label>
        <input type="text" name="especie" placeholder="Espécie do animal" value="<?php echo $consultas['especie']; ?>">
      </div>

      <div class="form-input">
	    <label for="descricao">Gênero Animal:</label>
        <input type="text" name="sexoanimal" placeholder="Gênero Animal" value="<?php echo $consultas['sexoanimal']; ?>">
      </div>

      <button type="submit" name="submit" value="Atualizar" class="btn-atualizar">Atualizar</button>
    </form>
  </div>
  <?php
} else {
  // Se não foi enviado um ID, redireciona para a página de listagem de consultas
  header("Location: administrador-consulta.php");
  exit();
}
