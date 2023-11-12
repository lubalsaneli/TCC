<?php
// Inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";

// Inclui o arquivo de consulta ao banco de dados
require_once "consultar_usuario.php";

// Inicia a sessão para armazenar as informações do usuário
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtém o login e a senha enviados pelo formulário
  $email = $_POST["email"];
  $senha = $_POST["password"]; // O 'password' corrensponde ao name do html


  // Consulta o banco de dados para ver se há um usuário com esse login e senha
  $resultado = consultarUsuario($pdo, $email, $senha);

  // Se houver um usuário com esse login e senha, redireciona para a página principal
  if ($resultado) {
    // Armazena o ID do usuário na sessão
    $_SESSION["id_usuario"] = $resultado["id_usuario"];

    $teste= $resultado["id_usuario"];

    echo $teste;

    // Redireciona para a página principal
    header("Location: inicio");
    exit;
  } else {
    // Se não houver um usuário com esse login e senha, exibe uma mensagem de erro
    $erro = "Login ou senha inválidos.";
  }
}
?>

<!-- SITE -->

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
    <link rel="stylesheet" href="./css/index-style.css">
    <link rel="stylesheet" href="./css/login-style.css">
    <link rel="shortcut icon" type="imagex/svg" href="./img/paw-icon.svg">
    <title>Felpudos | Encontre um amigo, salve uma vida</title>
</head>
<body>
    <?php
    if (isset($erro)) { ?>
        <script>
            alert("<?php echo $erro; ?>");
            document.getElementById("login-form").reset();
        </script>
    <?php }
    ?>
    <main>
        <nav class="nav-header">
            <div class="logo">
                <a href="./"><img src="./img/logo-icon.svg" alt="Logo Felpudos"></a>
            </div>
        </nav>
        <form method="POST" id="login-form">
            <div class="right-login">
                <div class="card-login">
                    <h1>Login</h1>
                    <p class="h1-p">Entre com suas informações para acessar o painel do tutor</p>
                    <div class="textfield">
                        <label for="usuario">Email</label>
                        <input type="text" name="email" placeholder="Digite seu Email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="password" placeholder="Digite sua senha">
                    </div>
                    <button class="btn-login">Login</button>
                    <p>Não possui uma conta? Crie uma <a href="./cadastro">aqui</a>!</p>
                </div>
            </div>
        </form>
    </main>
</body>
</html>