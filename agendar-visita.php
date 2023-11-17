<?php
// Inclui o arquivo de conexão com o banco de dados
require_once "./src/conexao.php";

// Inicia a sessão para armazenar as informações do usuário
session_start();

// Inicializa a variável para armazenar a mensagem de sucesso
$mensagem = '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtém os dados enviados pelo formulário
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $celular = $_POST["celular"];
  $cpf = $_POST["cpf"];
  $nomeanimal = $_POST["nomeanimal"];
  $datavisita = $_POST["datavisita"];

  // Insere os dados na tabela de usuarios
  $sql = "INSERT INTO visitas (nome, email, celular, cpf, nomeanimal, datavisita) VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$nome, $email, $celular, $cpf, $nomeanimal, $datavisita]);

  // Define a mensagem de sucesso
  $mensagem = 'Visita cadastrada com sucesso!';
}
?>

  <link rel="stylesheet" type="text/css" href="./css/alterar-consultaa.css">
  <div class="container" >
    <h1>Agendar visita</h1>
    <form method="POST">
	  
      <input type="hidden" name="id" value="<?php echo $visitas['ID']; ?>">

      <div class="form-input">
        <label for="nome">Nome</label>
        <input id="nome" type="text" name="nome" placeholder="Digite seu nome" required>
      </div>

      <div class="form-input">
        <label for="Email">Email</label>
        <input id="Email" type="text" name="email" placeholder="Digite seu Email" required>
      </div>

      <div class="form-input">
        <label for="Celular">Celular</label>
        <input id="Celular" type="text" name="celular" placeholder="Digite seu Celular" required>
      </div>

      <div class="form-input">
        <label for="cpf">CPF</label>
        <input id="cpf" type="text" name="cpf" placeholder="Digite seu CPF" required>
      </div>

      <div class="form-input">
        <label for="nomeanimal">Nome do Felpudo</label>
        <input id="nomeanimal" type="text" name="nomeanimal" placeholder="Digite o nome do Felpudo" required>
      </div>

      <div class="form-input">
        <label for="datavisita">Data</label>
        <input id="datavisita" type="date" name="datavisita" required>
      </div>
      <button type="submit" name="submit" value="Atualizar" class="btn-atualizar">Agendar Visita</button>
      <p><a href="adocao.php">Voltar para área de Adoção</a></p>
    </form>
  </div>
  <?php