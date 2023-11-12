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
    <link rel="stylesheet" href="./css/quero-ajudar-style.css">
    <link rel="stylesheet" href="./css/footer-style.css">
    <script src="./js/header-script.js"></script>
    <link rel="shortcut icon" type="imagex/svg" href="./img/felpudos-shortcut.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Felpudos | Encontre um amigo, salve uma vida</title>
</head>
<body>
    <?php require_once "./html/header.html"; ?>
    <main>
        <section class="banner">
            <div class="banner-text">
                <h1>Quero ajudar</h1>
            </div>
        </section>
        <section class="section-texto-primeiro">
            <div class="boas-vindas">
                <h2>Boas vindas a nossa página de doações!</h2>
                <p>Neste espaço, é possível visualizar a listagem completa de tudo que nossos amigos felpudos precisam no dia a dia e contribuir.</p>
            </div>
            <div class="endereco">
                <h2>Endereço de Entrega</h2>
                <p id="cidade"><b>Taiaçu - SP</b></p>
                <p>R. Raul Maçone, 306 - Centro, Taiaçu - SP, 14725-000</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.169525224702!2d-48.51655598822331!3d-21.145650780451895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b95bac0376cce3%3A0x1885e3fdcf2dab1!2sR.%20Raul%20Ma%C3%A7one%2C%20306%20-%20Centro%2C%20Taia%C3%A7u%20-%20SP%2C%2014725-000!5e0!3m2!1spt-BR!2sbr!4v1699769762075!5m2!1spt-BR!2sbr" title="Prefeitura de Taiaçu - SP" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section class="section-texto-segundo">
            <div class="como-funciona">
                <h2>Como Funciona?</h2>
                <p>Este recurso oferece uma forma prática e eficiente para manter nossos companheiros de quatro patas, que ainda não encontraram um lar, bem cuidados. Ao acessar essa área dedicada, os colaboradores têm a oportunidade de explorar uma lista detalhada das necessidades diárias dos nossos cães e gatos e fazer suas doações de forma direta no nosso endereço.</p>
            </div>
        </section>
        <section class="especialidades">
            <div class="interface">
                <h2 class="titulo">Necessidade de Doações</h2>
                <div class="flex">
                    <div class="especialidade-box">
                        <i class="bi bi-cart-plus"></i>
                        <h3>Alimentos</h3>
                        <p>Você pode fazer a diferença na vida de um fiel amigo de quatro patas! Doe alimento para cachorro e ajude a garantir que esses animais recebam o amor e cuidado que merecem. Sua generosidade fará os rabinhos abanarem e os corações dos peludos baterem mais felizes.</p>
                    </div>
                    <div class="especialidade-box">
                        <i class="bi bi-shift"></i>
                        <h3>Roupas de Pet</h3>
                        <p>Já pensou em dar um toque de estilo e conforto extra aos amiguinhos de quatro patas? Doe roupas de pet e ajude a manter os peludos quentinhos e adoráveis. Seu gesto de carinho fará com que eles se sintam ainda mais amados e estilosos</p>
                    </div>
                    <div class="especialidade-box">
                        <i class="bi bi-trash2"></i>
                        <h3>Vasilhas</h3>
                        <p>Ajude-nos a encher os pratinhos de esperança! Sua doação de vasilhas de alimento garantirá que todos os peludos tenham acesso a refeições deliciosas e nutritivas. Cada pratinho cheio é um passo em direção a barriguinhas satisfeitas e corações gratos.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once "./html/footer.html"; ?>
</body>
</html>