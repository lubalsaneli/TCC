<?php include_once "./src/conexao.php"; ?>

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
    <link rel="stylesheet" href="./css/adocao-style.css">
    <script src="./js/header-script.js"></script>
    <link rel="shortcut icon" type="imagex/svg" href="./img/paw-icon.svg">
    <title>Felpudos | Encontre um amigo, salve uma vida</title>
</head>
<body>
    <?php include_once "./html/header copy.html"; ?>
    <main>
        <div class="container_total_felpudos">
            <span id="total_felpudos"></span>
        </div>
        <div class="title-adocao">
            <h2>Encontre seu Felpudo</h2>
            <p>Aqui você encontra todos os nossos felpudos que estão disponíveis para adoção, basta clicar e agendar sua visita.</p>
        </div>
        <!-- ESTLIZAÇÃO DOS CARDS -->
        <section class="felpudos-container"><script src="./js/custom.js"></script></section>
    </main>
    <?php require_once "./html/footer.html"; ?>
</body>
</html>