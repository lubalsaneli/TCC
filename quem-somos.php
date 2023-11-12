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
    <link rel="stylesheet" href="./css/quem-somos-style.css">
    <link rel="stylesheet" href="./css/footer-style.css">
    <script src="./js/header-script.js"></script>
    <link rel="shortcut icon" type="imagex/svg" href="./img/felpudos-shortcut.svg">
    <title>Felpudos | Encontre um amigo, salve uma vida</title>
</head>
<body>
    <?php require_once "./components/header.html"; ?>
    <main>
        <section class="banner">
            <div class="banner-text">
                <h1>Quem somos</h1>
            </div>
        </section>
        <section class="primeiro-texto">
            <div class="organizacao">
                <h2>A organização Felpudos</h2>
                <p>Nós somos uma iniciativa dedicada a criar um impacto positivo na vida dos nossos amigos de quatro patas. Nossa missão é oferecer atendimento médico gratuito para animais em situação de rua e aqueles que foram resgatados, em parceria com centros veterinários locais. Estamos comprometidos em transformar a realidade desses animais e, ao mesmo tempo, conscientizar a comunidade sobre a importância da adoção responsável e dos cuidados adequados.</p>
            </div>
        </section>
        <section class="org-felpudos-content">
            <h2>Nossos Objetivos</h2>
            <div class="goal-global">
                <div class="goal-container">
                    <div class="goal-global-col1">
                        <div class="goal-content">
                            <div class="circle-goal"><h3>1</h3></div>
                            <p>Inibir a quantidade de <br> animais domésticos em <br> situação de rua.</p>
                        </div>
                        <div class="goal-content">
                            <div class="circle-goal"><h3>3</h3></div>
                            <p>Fornecer atendimento <br> veterinário gratuito <br> para animais resgatados.</p>
                        </div>
                    </div>
                    <div class="goal-global-col2">
                        <div class="goal-content">
                            <div class="circle-goal"><h3>2</h3></div>
                            <p>Prover qualidade de vida <br> e bem estar para cães e <br> gatos.</p>
                        </div>
                        <div class="goal-content">
                            <div class="circle-goal"><h3>4</h3></div>
                            <p>Proporcionar um meio <br> para a adoção <br> responsável de animais.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once "./components/footer.html"; ?>
</body>
</html>