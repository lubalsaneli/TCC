<?php
// Inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";

// Inicia a sessão para armazenar as informações do usuário
session_start();

// Inicializa a variável para armazenar a mensagem de sucesso
$mensagem = '';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtém os dados enviados pelo formulário
  $primeironome = $_POST["primeironome"];
  $sobrenome = $_POST["sobrenome"];
  $email = $_POST["email"];
  $celular = $_POST["celular"];
  $nascimento = $_POST["nascimento"];
  $cpf = $_POST["cpf"];
  $senha = $_POST["senha"];
  $gender = $_POST["gender"];

  // Insere os dados na tabela de usuarios
  $sql = "INSERT INTO usuarios (primeironome, sobrenome, email, celular, nascimento, cpf, senha, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$primeironome, $sobrenome, $email, $celular, $nascimento, $cpf, $senha, $gender]);

  // Define a mensagem de sucesso
  $mensagem = 'Usuário cadastrado com sucesso!';
}
?>

<!-- site -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/inicio-style.css">
    <link rel="stylesheet" href="css/cadastro-style.css">
    <link rel="shortcut icon" type="imagex/svg" href="./img/paw-icon.svg">
    <title>Felpudos | Encontre um amigo, salve uma vida</title>
</head>
<body>
    <!-- Verifica se a mensagem de sucesso está definida e exibe o pop-up com a mensagem -->
    <?php if (!empty($mensagem)) { ?>
        <script>
            alert('<?php echo $mensagem; ?>');
        </script>
    <?php } ?>
    <div class="container">
        <div class="form-image">
            <a href="./"><img src="img/logo-icon.svg" alt=""></a>
        </div>
        <div class="form">
            <form method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="primeironome" placeholder="Digite seu primeiro nome" required>
                    </div>
                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="celular" placeholder="(xx) xxxxx-xxxx" required>
                    </div>
                    <div class="input-box">
                        <label for="data">Data de Nascimento</label>
                        <input id="data" type="date" name="nascimento" placeholder="00/00/0000" required>
                    </div>
                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="cpf" placeholder="000.000.000-00" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>
                </div>
                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>
                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender" value="F" required>
                            <label for="female">Feminino</label>
                        </div>
                        <div class="gender-input">
                            <input id="male" type="radio" name="gender" value="M" required>
                            <label for="male">Masculino</label>
                        </div>
                        <div class="gender-input">
                            <input id="none" type="radio" name="gender" value="I" required>
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                <div class="continue-button">
                    <button type="submit" class="btn-cadastrar">Cadastrar</button>
                    <p>Já possui uma conta? Entre <a href="./login">aqui</a>!</p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>