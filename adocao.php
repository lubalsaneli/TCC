<?php
    include_once "conexao.php";  
?>

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
        <link rel="stylesheet" href="./css/adocao-style.css">
        <link rel="shortcut icon" type="imagex/svg" href="./img/felupudos-shotcut.svg">
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

                    </nav>
                </li>
            </ul>
        </div>

    </header>
    <main>
            <div class="container_total_felpudos">
                <span id="total_felpudos"></span>
            </div>

            <div class="title-adocao">
                <h2>Encontre seu Felpudo</h2>
            </div>
            <!-- ESTLIZAÇÃO DOS CARDS -->

            <section class="felpudos-container">
            
            </section>
        </main>
       

        <footer>
            <div class="footer-content">
                <nav class="footer-nav-shortcut">
                    <h3>Mapa do Site</h3>
                    <ul>
                        <li><a href="./inicio.html">Início</a></li>
                        <li><a href="./quem-somos.html">Quem Somos</a></li>
                        <li><a href="./contato.html">Contato</a></li>
                        <li><a href="./quero-ajudar.html">Quero Ajudar</a></li>
                    </ul>
                </nav>

                <nav>
                    <a href="inicio.html">
                        <img src="./img/logo-icon-white.svg" alt="Logo Felpudos">
                    </a>
                </nav>
        </footer>

        <script src="./js/custom.js"></script>
        <script src="./js/header-script-forphp.js"></script>
</body>
</html>