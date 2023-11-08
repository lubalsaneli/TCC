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
        <link rel="stylesheet" href="./css/inicio-style.css">
        <link rel="stylesheet" href="./css/footer-style.css">
        <link rel="stylesheet" href="./css/agendar-consulta.css">
        <link rel="shortcut icon" type="imagex/svg" href="./img/felupudos-shotcut.svg">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <title>Felpudos | Encontre um amigo, salve uma vida</title>
    </head>
<body>

        <!-- Verifica se a mensagem de sucesso está definida e exibe o pop-up com a mensagem -->
        <?php if (!empty($mensagem)) { ?>
            <script>
                alert('<?php echo $mensagem; ?>');
            </script>
        <?php } ?>

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
                    <li class="desktop-menu-item"><a href="./agendar-consulta.php" id="agendar-consulta">Agendar Consulta</a></li>
                </ul>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img src="./img/menu-icon.svg" alt="Menu" class="icon"></button>
            </div>

            <div class="acess">
                    <ul>
                        <a href="./inicio.html"><button>SAIR</button></a>
                    </ul>
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

                        <a href="./agendar-consulta.php">
                            <div class="mobile-menu-title">Agendar Consulta</div>
                            <div class="mobile-menu-description">Faça o agendamento de consulta.</div>
                        </a>

                    </nav>
                </li>
            </ul>
        </div>

    </header>
    
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
    </main>

    <footer>
            <div class="footer-content">
                <nav class="footer-nav-shortcut">
                    <h3>Mapa do Site</h3>
                    <ul>
                        <li><a href="../inicio.html">Início</a></li>
                        <li><a href="../quem-somos.html">Quem Somos</a></li>
                        <li><a href="../contato.html">Contato</a></li>
                        <li><a href="../quero-ajudar.html">Quero Ajudar</a></li>
                    </ul>
                </nav>

                <nav>
                    <a href="inicio.html">
                        <img src="./img/logo-icon-white.svg" alt="Logo Felpudos">
                    </a>
                </nav>
        </footer>
    <script src="./js/header-script.js"></script>
</body>
</html>