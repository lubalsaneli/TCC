<?php

// Inclui o arquivo de conexão com o banco de dados
require_once "./src/conexao.php";

// Verifica se o formulário foi submetido
if(isset($_POST['submit'])) {

  // Obtém os dados do formulário
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];
  $cpf = $_POST['cpf'];
  $nomeanimal = $_POST['nomeanimal'];
  $datavisita = $_POST['datavisita'];

  // Atualiza os dados na tabela "visitas"
  $stmt = $pdo->prepare("UPDATE visitas SET nome = ?, email = ?, celular = ?, cpf = ?, nomeanimal = ?, datavisita = ? WHERE id = ?");

  if($stmt->execute(array($nome, $email, $celular, $cpf, $nomeanimal, $datavisita, $id))) {
    // Redireciona de volta para a página de listagem de visitas
    header("Location: administrador-visita.php");
    exit();
  } else {
    echo "Erro ao atualizar dados: " . mysqli_error($conexao);
  }
}

// Verifica se foi enviado um ID para a página
if(isset($_GET["id"])) {
  // Obtém o ID do visitas a ser editado
  $id = $_GET["id"];

  // Consulta o banco de dados para obter os dados do visitas
  $stmt = $pdo->prepare("SELECT * FROM visitas WHERE id = ?");
  $stmt->execute(array($id));
  $visitas = $stmt->fetch();

  // Exibe o formulário com os dados do visitas encontrado
  ?>
  <link rel="stylesheet" type="text/css" href="./css/alterar-consultaa.css">
  <div class="container" >
    <h1>Editar agendamento de visitas</h1>
    <form method="POST">
	  
      <input type="hidden" name="id" value="<?php echo $visitas['ID']; ?>">

      <div class="form-input">
	      <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Nome" value="<?php echo $visitas['nome']; ?>">
      </div>

      <div class="form-input">
	      <label for="email">Email:</label>
        <input type="text" name="email" placeholder="email" value="<?php echo $visitas['email']; ?>">
      </div>

      <div class="form-input">
	      <label for="celular">Celular:</label>
        <input type="text" name="celular" placeholder="Celular" value="<?php echo $visitas['celular']; ?>">
      </div>

      <div class="form-input">
	      <label for="cpf">CPF:</label>
        <input type="text" name="cpf" placeholder="Porte do Felpudo"value="<?php echo $visitas['cpf']; ?>">
      </div>

      <div class="form-input">
	      <label for="nomeanimal">Nome do Felpudo:</label>
        <input type="text" name="nomeanimal" placeholder="Nome do Animal" value="<?php echo $visitas['nomeanimal']; ?>">
      </div>

      
      <div class="form-input">
	      <label for="datavisita">Data:</label>
        <input type="date" name="datavisita" value="<?php echo $visitas['datavisita']; ?>">
      </div>

      <button type="submit" name="submit" value="Atualizar" class="btn-atualizar">Atualizar</button>
    </form>
  </div>
  <?php
} else {
  // Se não foi enviado um ID, redireciona para a página de listagem de visitas
  header("Location: administrador-visita.php");
  exit();
}
