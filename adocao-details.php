<?php
    include_once "conexao.php";

    session_start();
    ob_start();

    $id_felpudo = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $query_detail = "SELECT * FROM animais WHERE id=:id_felpudo";
    $result_detail = $pdo->prepare($query_detail);
    $result_detail->bindParam(':id_felpudo', $id_felpudo, PDO::PARAM_INT);
    $result_detail->execute();  

    if ($result_detail->rowCount() > 0) {
        $row_slide = $result_detail->fetch(PDO::FETCH_ASSOC);
        extract($row_slide);
        
    } else {
        // Trate o caso em que não há resultados, por exemplo, redirecione ou mostre uma mensagem de erro
        echo "Nenhum resultado encontrado para o ID especificado.";
    }
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
            <link rel="stylesheet" href="./css/footer-style.css">
            <link rel="stylesheet" href="./css/adocao-details-style.css">
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
                        <li class="desktop-menu-item"><a href="agendar-consulta.php" id="cadastrar-felpudo">Agendamento de Consulta</a></li>
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
                <?php
                    echo "
                    
                    <div class=container-voltar>
                        <a href=./adocao.php>
                            <span><img src=./img/Arrow.svg></span>
                            <span>Voltar para adoção</span>
                        </a>
                    </div>

                    <div class='container-details'>
                   
                        <img src=$imagem src=imagem-felpudo>
        

                        <div class=container-infos>
                            <div class=container-infos-title>
                                <h3>$nome</h3>
                            </div>

                            <div class=container-infos-list>
                                <ul>
                                    <li><h4>Mais Detalhes</h4></li>
                                    <li>Idade: $idade</li>
                                    <li>Sexo: $sexo</li>
                                    <li>Raça: $raca</li>
                                    <li>Porte: $porte</li>
                                    <li>Espécie: $especie</li>
                                </ul>
                            </div>

                            <div class=container-infos-descri>
                                <span><h4>Descrição</h4></span>
                                <span id=cont-descri>$descricao</span>
                            </div>

                            <div class=container-infos-button> 
                                <button>AGENDAR VISITA</button>
                            </div>
                        </div>

                    </div>";
                ?>
        
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
    
        </body>
    </html>