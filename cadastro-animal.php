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

  // Insere os dados na tabela de usuarios
  $sql = "INSERT INTO usuarios (primeironome, sobrenome, email, celular, nascimento, cpf, senha) VALUES (?, ?, ?, ?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$primeironome, $sobrenome, $email, $celular, $nascimento, $cpf, $senha]);

  // Define a mensagem de sucesso
  $mensagem = 'Usuário cadastrado com sucesso!';
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
        <link rel="stylesheet" href="./css/inicio-style.css">
        <link rel="stylesheet" href="./css/footer-style.css">
        <link rel="stylesheet" href="./css/cadastro-animal-style.css">
        <link rel="shortcut icon" type="imagex/svg" href="./img/felupudos-shotcut.svg">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <title>Felpudos | Encontre um amigo, salve uma vida</title>
    </head>
<body>
    <header>
        <nav class="nav-header">
            <div class="logo">
                <a href="inicio.html">
                    <img src="./img/logo-icon.svg" alt="Logo Felpudos">
                </a>
            </div>

            <div class="desktop-menu">
                <ul>
                    <li class="desktop-menu-item"><a href="./adocao.php" id="para-adotar">Para Adotar</a></li>
                    <li class="desktop-menu-item"><a href="./cadastro-animal.php" id="cadastrar-felpudo">Cadastrar Felpudo</a></li>
                </ul>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img src="./img/menu-icon.svg" alt="Menu" class="icon"></button>
            </div>
        </nav>


        <div class="mobile-menu">
            <ul>
                <li id="mobile-menu-title">Menu</li>
                <li>
                    <nav class="nav-mobile">
                        <a href="./adocao.php">
                            <div class="mobile-menu-title">Para Adotar</div>
                            <div class="mobile-menu-description">Animais disponível para adoção.</div>
                        </a>

                        <div class="style-separator"></div>
                        
                        <a href="./cadastro-animal.php">
                            <div class="mobile-menu-title">Cadastrar Felpudo</div>
                            <div class="mobile-menu-description">Faça o cadastramento do animalzinho para adoção.</div>
                        </a>

                    </nav>
                </li>
            </ul>
        </div>
    </header>
    
    <main>
        <div class="container">
            <i class="paw fa fa-paw"></i>
            <div class="wrapper">
                <div class="top">
                    <span>FELPU</span>
                    <img src="./img/dog.webp" alt="">
                    <span>DOS</span>
                </div>
                <div class="bottom">
                    <form>
                        <h3>Cadastro Felpudo</h3>
                        <input type="text" name="nomeanimal" placeholder="Nome do Animal" required>
                        <input type="text" name="especieanimal" placeholder="Espécie do Animal" required>
                        <input type="text" name="sexoanimal" placeholder="Sexo do Animal" required>
                        <div class="form-input">
                            <label for="tipo">Porte do Animal</label>
                            <select name="tipo" id="tipo" required>
                                <option value="">Selecionar</option>
                                <option value="RAÇÃO PACOTE">Pequeno</option>
                                <option value="RAÇÃO AGRANEL">Médio</option>
                                <option value="RAÇÃO AGRANEL">Grande</option>
                            </select>
                        </div>
                        <input type="text" name="racaanimal" placeholder="Raça do Animal" required>
                        <input type="text" name="idadeanimal" placeholder="Idade" required>
                        <textarea name="descricao" name="descricao" placeholder="Descrição do Animal" id="" cols="20" rows="10"></textarea>

                        <div class="singUp">
                            <button>Cadastrar<i class="fa fa-paw"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <i class="paw fa fa-paw"></i>
        </div>
    </main>
    
    <script src="./js/header-script.js"></script>
</body>
</html>