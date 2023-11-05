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
                        <li class="desktop-menu-item"><a href="inicio.html" id="menu-inicio">Início</a></li>
                        <li class="desktop-menu-item"><a href="quem-somos.html" id="menu-quem-somos">Quem Somos</a></li>
                        <li class="desktop-menu-item"><a href="quero-ajudar.html" id="menu-quero-ajudar">Quero Ajudar</a></li>
                        <li class="desktop-menu-item"><a href="contato.html" id="menu-contato">Contato</a></li>
                        <li class="desktop-menu-item"><a href="#our-services-id">Nossos Serviços</a></li>
                    </ul>
                </div>

                <div class="mobile-menu-icon">
                    <button onclick="menuShow()"><img src="./img/menu-icon.svg" alt="Menu" class="icon"></button>
                </div>

                <div class="acess">
                    <ul>
                        <span><a href="login.html">ENTRAR</a></span>
                        <a href="cadastro.html  "><button>CRIAR CONTA</button></a>
                    </ul>
                </div>
            </nav>


            <div class="mobile-menu">
                <ul>
                    <li id="mobile-menu-title">Menu</li>
                    <li>
                        <nav class="nav-mobile">
                            <a href="inicio.html">
                                <div class="mobile-menu-title">Início</div>
                                <div class="mobile-menu-description">Volte para o início da nossa página.</div>
                            </a>
    
                            <div class="style-separator"></div>
                            
                            <a href="quem-somos.html">
                                <div class="mobile-menu-title">Quem Somos</div>
                                <div class="mobile-menu-description">Descubra mais sobre nós, nossos objetivos e missão.</div>
                            </a>
    
                            <div class="style-separator"></div>
    
                            <a href="quero-ajudar.html">
                                <div class="mobile-menu-title">Quero Ajudar</div>
                                <div class="mobile-menu-description">Apoie-nos! Saiba como você pode fazer a diferença.</div>
                            </a>
    
                            <div class="style-separator"></div>
    
                            <a href="contato.html">
                                <div class="mobile-menu-title">Contato</div>
                                <div class="mobile-menu-description">Estamos aqui para responder às sua perguntas e ouvir seus comentários.</div>
                            </a>
    
                            <div class="style-separator"></div>
                        </nav>
                    </li>
                </ul>
            </div>
        </header>


        <main>
            <div class="title-adocao">
                <h2>Encontre seu Felpudo</h2>
            </div>

            <section class="filter-container">
                <form action="">
                    <select name="" id="porte-select" class="box-selection">
                        <option value="">Selecione o Porte</option>
                        <option value="">Pequeno</option>
                        <option value="">Médio</option>
                        <option value="">Grande</option>
                    </select>
                </form>

                <form action="">
                    <select name="" id="sexo-select" class="box-selection">
                        <option value="">Sexo</option>
                        <option value="">Fêmea</option>
                        <option value="">Macho</option>
                    </select>
                </form>

                <form action="">
                    <select name="" id="especie-select" class="box-selection">
                        <option value="">Espécie</option>
                        <option value="">Cachorro</option>
                        <option value="">Gato</option>
                    </select>
                </form>
            </section>



            <section class="felupudos-cards">
                    <a href="">
                        <div class="felpudo-card" >
                            <img src="./img/img-adocao/chica.jpg" alt="">
                            <span>Chica</span>
                        </div>
                    </a>

                    <a href="">
                        <div class="felpudo-card">
                            <img src="./img/img-adocao/gato1.jpg" alt="">
                            <span>Mucho</span>
                        </div>
                    </a>

                    <a href="">
                        <div class="felpudo-card">
                            <img src="./img/img-adocao/pretinha.jpg" alt="">
                            <span>Pretinha</span>
                        </div>
                    </a>

                    <a href="">
                        <div class="felpudo-card">
                            <img src="./img/img-adocao/scooby.jpg" alt="">
                            <span>Scooby</span>
                        </div>
                    </a>

                    <a href="">
                        <div class="felpudo-card">
                            <img src="./img/img-adocao/kiana.jpg" alt="">
                            <span>Kiana</span>
                        </div>
                    </a>

                    <a href="">
                        <div class="felpudo-card">
                            <img src="./img/img-adocao/bardo.jpg" alt="">
                            <span>Bardo</span>
                        </div>
                    </a>

                    <a href="">
                        <div class="felpudo-card">
                            <img src="./img/img-adocao/augusto.jpg" alt="">
                            <span>Augusto</span>
                        </div>
                    </a>

                    <a href="">
                        <div class="felpudo-card">
                            <img src="./img/img-adocao/thelma.jpg" alt="">
                            <span>Thelma</span>
                        </div>
                    </a>

                    <a href="">
                        <div class="felpudo-card">
                            <img src="./img/img-adocao/adolfo.jpg" alt="">
                            <span>Adolfo</span>
                        </div>
                    </a>

                    <a href="">
                        <div class="felpudo-card">
                            <img src="./img/img-adocao/cesar.jpg" alt="">
                            <span>Cesar</span>
                        </div>
                    </a>


                    <a href="">
                        <div class="felpudo-card">
                            <img src="./img/img-adocao/suzi.jpg" alt="">
                            <span>Suzi</span>
                        </div>
                    </a>

                    <a href="">
                        <div class="felpudo-card">
                            <img src="./img/img-adocao/tuti.jpg" alt="">
                            <span>Tuti</span>
                        </div>
                    </a>

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
    
    </body>
</html>