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
  $nome = $_POST["nome"];
  $especie = $_POST["especie"];
  $sexo = $_POST["sexo"];
  $porte = $_POST["porte"];
  $raca = $_POST["raca"];
  $idade = $_POST["idade"];
  $descricao = $_POST["descricao"];

  if( isset($_FILES["imagem"]) && !empty($_FILES["imagem"]))
  {
    $imagem = "./imagem-banco/".$_FILES['imagem']["name"];
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
  }

  // Insere os dados na tabela de usuarios
  $sql = "INSERT INTO animais (nome, especie, sexo, porte, raca, idade, descricao, imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$nome, $especie, $sexo, $porte, $raca, $idade, $descricao, $imagem]);

  // Define a mensagem de sucesso
  $mensagem = 'Felpudo cadastrado com sucesso!';
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/index-style.css">
    <link rel="stylesheet" href="./css/footer-style.css">
    <link rel="stylesheet" href="./css/administrador-cadastro-style.css">
    <link rel="shortcut icon" type="imagex/svg" href="./img/paw-icon.svg">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Felpudos | Encontre um amigo, salve uma vida</title>
</head>
<body>
    <?php if (!empty($mensagem)) { ?>
        <script>
            alert('<?php echo $mensagem; ?>');
        </script>
    <?php } ?>
    <header>
        <nav class="nav-header">
            <div class="logo">
                <a href="./administrador-adocao"><img src="./img/logo-icon.svg" alt="Logo Felpudos"></a>
            </div>
            <div class="desktop-menu">
                <ul>
                    <li class="desktop-menu-item"><a href="./administrador-cadastro" id="cadastro-felpudo">Cadastro</a></li>
                    <li class="desktop-menu-item"><a href="./administrador-adocao" id="para-adotar">Para adotar</a></li>
                    <li class="desktop-menu-item"><a href="./administrador-consulta" id="consulta">Consultas</a></li>
                    <li class="desktop-menu-item"><a href="./administrador-visita" id="agendamento-visita">Agendamentos</a></li>
                </ul>
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img src="./img/menu-icon.svg" alt="Menu" class="icon"></button>
            </div>
            <div class="desktop-access">
                <ul>
                    <a href="#"><button disabled>Administrador</button></a>
                </ul>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li id="mobile-menu-title">Menu</li>
                <li>
                    <nav class="nav-mobile">
                        <a href="./administrador-cadastro">
                            <div class="mobile-menu-title">Cadastrar Felpudo</div>
                            <div class="mobile-menu-description">Faça o Cadastro do animalzinho para adoção.</div>
                        </a>
                        <div class="style-separator"></div>
                        <a href="./administrador-adocao">
                            <div class="mobile-menu-title">Para Adotar</div>
                            <div class="mobile-menu-description">Animais disponível para adoção.</div>
                        </a>
                        <div class="style-separator"></div>
                        <a href="./administrador-consulta">
                            <div class="mobile-menu-title">Agendar Consulta</div>
                            <div class="mobile-menu-description">Faça o agendamento de consulta.</div>
                        <div class="style-separator"></div>
                        <a href="./administrador-visitas">
                            <div class="mobile-menu-title">Agendar Visitas</div>
                            <div class="mobile-menu-description">Faça o agendamento de consulta.</div>
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
                    <span>D<span>❤</span>S</span>
                </div>
                <div class="bottom">
                    <form method="POST" enctype="multipart/form-data">
                        <h3>Cadastro Felpudo</h3>
                        <input type="text" name="nome" placeholder="Nome do Animal" required>
                        <div class="form-input">
                            <label for="tipo">Espécie</label>
                            <select name="especie" id="tipo" required>
                                <option value="">Selecionar</option>
                                <option value="Cachorro">Cachorro</option>
                                <option value="Gato">Gato</option>
                            </select>
                        </div>
                        <p>Gênero do Animal</p>
                        <div class="genero_animal">
                            <div class="gender-input">
                                <input id="female" type="radio" name="sexo" value="F" required>
                                <label for="female">Fêmea</label>
                            </div>
                            <div class="gender-input">
                                <input id="male" type="radio" name="sexo" value="M" required>
                                <label for="male">Macho</label>
                            </div>
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
                        <input type="text" name="raca" placeholder="Raça do Animal" required>
                        <input type="text" name="idade" placeholder="Idade" required>
                        <textarea name="descricao" name="descricao" placeholder="Descrição do Animal" id="" cols="20" rows="10"></textarea>
                        <div class="imagem">
                            <label>Imagem do Animal</label>
                            <input type="file" name="imagem" accept="imagem/*">
                        </div>
                        <div class="singUp">
                            <button>Cadastrar<i class="fa fa-paw"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <i class="paw fa fa-paw"></i>
        </div>
    </main>
</body>
</html>