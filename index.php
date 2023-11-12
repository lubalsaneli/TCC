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
    <link rel="stylesheet" href="./css/inicio-style.css">
    <link rel="stylesheet" href="./css/footer-style.css">
    <script src="./js/header-script.js"></script>
    <link rel="shortcut icon" type="imagex/svg" href="./img/felpudos-shortcut.svg">
    <title>Felpudos | Encontre um amigo, salve uma vida</title>
</head>
<body>
    <?php require_once "./components/header.html"; ?>
    <main>
        <div class="banner">
            <div class="banner-text">
                <h1>Encontre um amigo, salve uma vida.</h1>
                <p>Adote um animalzinho, ajude ou agende uma consulta gratuita</p>
            </div>
        </div>
        <section class="how-it-works-content">
            <h2>Como Funciona?</h2>
            <div class="pointer-separator">
                <div class="black-circle"></div>
                <div class="black-circle"></div>
                <div class="black-circle"></div>
                <div class="black-circle"></div>
            </div>
            <div class="how-it-works-menu">
                <div class="how-it-works-item">
                    <div class="circle-how-it-works">
                        <img src="./img/globe-icon.svg" alt="">
                    </div>
                    <h3>Acesse nosso site</h3>
                </div>
                <div class="how-it-works-item">
                    <div class="circle-how-it-works">
                        <img src="./img/pet-icon.svg" alt="">
                    </div>
                    <h3>Escolha um felpudo</h3>
                </div>
                <div class="how-it-works-item">
                    <div class="circle-how-it-works">
                        <img src="./img/home-icon.svg" alt="">
                    </div>
                    <h3>Agende uma visita</h3>
                </div>
                <div class="how-it-works-item">
                    <div class="circle-how-it-works">
                        <img src="./img/paw-icon.svg" alt="">
                    </div>
                    <h3>Adote!</h3>
                </div>
            </div>
        </section>
        <div class="how-it-works-text">
            <div class="how-it-works-text-h2">
                <h2>Resgatando um animalzinho da rua, você se torna elegível para <span class="how-it-works-text-h2-color">consultas gratuitas</span></h2>
            </div>
        </div>
        <section class="our-services">
            <div class="our-services-menu">
                <div class="our-services-adopt">
                    <div class="circle-our-services">
                        <img src="./img/heart-icon.svg" alt="">
                    </div>
                    <h3>Adote um felpudo</h3>
                    <p>Clicando no botão "Adotar", você pode conferir a listagem completa de felpudos que estão esperando um lar</p>
                    <a href="./login"><button>ADOTAR</button></a>
                </div>
                <div class="our-services-appointment">
                    <div class="circle-our-services">
                        <img src="./img/appointment-icon.svg" alt="">
                    </div>
                    <h3>Agende um horário</h3>
                    <p>Já adotou seu felpudo? Se sim, clique no botão "Agendar" e verifique os horários disponíveis em conjunto com nossos veterinários parceiros</p>
                    <a href="./login"><button>AGENDAR</button></a>
                </div>
            </div>
        </section>
        <section class="slide-images">
            <div class="image-config" id="slide-photo1"></div>
            <div class="image-config" id="slide-photo2"></div>
            <div class="image-config" id="slide-photo3"></div>
            <div class="image-config" id="slide-photo4"></div>
        </section>
    </main>
    <?php require_once "./components/footer.html"; ?>
</body>
</html>