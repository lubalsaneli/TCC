<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/contato-style.css">
    <link rel="stylesheet" href="./css/footer-style.css">
    <script src="./js/header-script.js"></script>
    <link rel="shortcut icon" type="imagex/svg" href="./img/felpudos-shortcut.svg">
    <title>Felpudos | Encontre um amigo, salve uma vida</title>
</head>
<body>
    <?php require_once "./html/header.html"; ?>
    <section class="banner">
        <div class="banner-text">
            <h1>Contato</h1>
        </div>
    </section>
    <main>
        <div class="container-contato">
            <span>
                <h2>Meios de Contato</h2>
            </span>
            <span class="contato-infos">
                <h3>Telefone</h3>
                <p>(16) 99999-9999</p>
            </span>
            <span class="contato-infos">
                <h3>E-mail</h3>
                <p>suporte@felpudos.com.br</p>
            </span>
        </div>
        <div class="container-mensagem">
            <form action="" method="POST">
                <h2>Nos envie uma mensagem!</h2>
                <input type="text" id="nome" placeholder="Nome" required="required" name="nome" /> <br> <br>
                <input type="text" id="Sobrenome" placeholder="Sobrenome" required="required" name="Sobrenome" /> <br> <br>
                <input type="email" id="email" placeholder="E-mail" required="required" name="email" /> <br> <br>
                <input type="tel" id="Telefone" placeholder="Celular" required="required" name="Telefone" /> <br> <br>
                <textarea placeholder="Digite sua Mensagem" cols="30" rows="10"></textarea><br>
                <input id="button" type="submit" class="enviar" onclick="Enviar();" value="Enviar">
            </form>
        </div>
    </main>
    <?php require_once "./html/footer.html"; ?>
</body>
</html>