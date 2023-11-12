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
    <link rel="shortcut icon" type="imagex/svg" href="./img/paw-icon.svg">
    <title>Felpudos | Encontre um amigo, salve uma vida</title>
</head>
<body>
    <?php include_once "./html/header copy.html"; ?>
    <main>
        <section class="tela-inicio-content">
            <div class="div1">
                <h2 border-top>Bem vindo(a),</h2>
                <p>neste espaço, você vai conseguir adotar seu felpudo e ter maior facilidade no processo de agendamento de consultas.</p>
            </div>
            <div class="div2">
                <a href="./adocao" class="id-link">
                    <div class="card-container">ADOTAR UM FELPUDO</div>
                </a>
                <a href="./agendar-consulta" class="id-link">
                    <div class="card-container">AGENDAR UMA CONSULTA</div>
                </a>
            </div>
        </section>
    </main>
    <?php require_once "./html/footer.html"; ?>
</body>
</html>