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
  $nomedono = $_POST["nomedono"];
  $email = $_POST["email"];
  $celular = $_POST["celular"];
  $cpf = $_POST["cpf"];
  $raca = $_POST["raca"];
  $porte = $_POST["porte"];
  $especie = $_POST["especie"];
  $sexoanimal = $_POST["sexoanimal"];
  $descricao = $_POST["descricao"];

  // Insere os dados na tabela de usuarios
  $sql = "INSERT INTO consultas (nomedono, email, celular, cpf, raca, porte, especie, sexoanimal, descricao) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$nomedono, $email, $celular, $cpf, $raca, $porte, $especie, $sexoanimal, $descricao]);

  // Define a mensagem de sucesso
  $mensagem = 'Consulta cadastrada com sucesso!';
}
?>

<!-- site -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/agendar-consulta.css">
    <link rel="stylesheet" href="./css/footer-style.css">
    <script src="./js/header-script.js"></script>
    <link rel="shortcut icon" type="imagex/svg" href="./img/paw-icon.svg">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Felpudos | Encontre um amigo, salve uma vida</title>
</head>
<body>
    <?php include_once "./html/header copy.html"; ?>
    <main>
        <div class="container">
            <div class="form">
                <form method="POST">
                    <div class="form-header">
                        <div class="title">
                            <h1>Agendamento de Consulta</h1>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="firstname">Nome do Dono</label>
                            <input id="firstname" type="text" name="nomedono" placeholder="Digite seu nome" required>
                        </div>
                        <div class="input-box">
                            <label for="lastname">Email</label>
                            <input id="lastname" type="email" name="email" placeholder="Digite seu email" required>
                        </div>
                        <div class="input-box">
                            <label for="Celular">Celular</label>
                            <input id="Celular" type="tel" name="celular" placeholder="(00) 00000-0000" required>
                        </div>

                        <div class="input-box">
                            <label for="cpf">CPF</label>
                            <input id="cpf" type="text" name="cpf" placeholder="000.000.000-00" required>
                        </div>
                        <div class="input-box">
                            <label for="raca">Raça do Animal</label>
                            <input id="raca" type="text" name="raca" placeholder="Digite a Raça" required>
                        </div>
                        <div class="form-input">
                            <label for="tipo">Porte do Animal</label>
                            <select name="porte" id="tipo" required>
                                <option value="">Selecionar</option>
                                <option value="Pequeno">Pequeno</option>
                                <option value="Médio">Médio</option>
                                <option value="Grande">Grande</option>
                            </select>
                        </div>
                        <div class="form-input">
                            <label for="tipo">Espécie</label>
                            <select name="especie" id="tipo" required>
                                <option value="">Selecionar</option>
                                <option value="Pequeno">Cachorro</option>
                                <option value="Médio">Gato</option>
                            </select>
                        </div>
                    </div>
                    <div class="gender-inputs">
                        <div class="gender-title">
                            <h6>Gênero do Animal</h6>
                        </div>
                        <div class="gender-group">
                            <div class="gender-input">
                                <input id="female" type="radio" name="sexoanimal" value="F" required>
                                <label for="female">Fêmea</label>
                            </div>
                            <div class="gender-input">
                                <input id="male" type="radio" name="sexoanimal" value="M" required>
                                <label for="male">Macho</label>
                            </div>
                        </div>
                    </div>
                    <textarea name="descricao" name="descricao" placeholder="Descrição do que o Animal tem" id="" cols="100" rows="4"></textarea>
                    <div class="continue-button">
                        <button type="submit" class="btn-cadastrar">Cadastrar</button>
                        <p>Após o agendamento, alguém da nossa equipe ligará para confirmar a consulta.</p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php require_once "./html/footer.html"; ?>
</body>
</html>