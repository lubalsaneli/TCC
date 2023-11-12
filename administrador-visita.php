<?php
// Inclui o arquivo de conexão com o banco de dados
require_once "./src/conexao.php";

// Verifica se a pesquisa foi submetida
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtém o nome e o tipo enviados pelo formulário
  $nome = $_POST["nome"];

  // Consulta o banco de dados com base nos valores enviados
  $stmt = $pdo->prepare("SELECT * FROM visitas WHERE nome LIKE ?");
  $stmt->execute(array("%$nome%"));
  $visitas = $stmt->fetchAll();
} else {
  // Se a pesquisa não foi submetida, retorna todos os produtos
  $stmt = $pdo->prepare("SELECT * FROM visitas");
  $stmt->execute();
  $visitas = $stmt->fetchAll();
}
?>


<!-- site -->

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
    <link rel="stylesheet" href="./css/administrador-consulta.css">
    <link rel="shortcut icon" type="imagex/svg" href="./img/felpudos-shortcut.svg">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Felpudos | Administrador</title>
</head>
<body>
    <?php require_once "./html/header-administrador.html"; ?>
    <main>
        <div class="container">
        <h1>Visitas Agendadas</h1>

        <form method="POST">
            <div class="form-input">
            <input type="text" name="nome" placeholder="Nome do dono">
            </div>
            <button type="submit" value="Pesquisar" class="btn-pesquisar">Pesquisar</button>
        </form>

        <table>
            <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Celular</th>
              <th>CPF</th>
              <th>Nome Animal</th>
              <th>Data</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($visitas as $visita) { ?>
                <tr>
                <td><?php echo $visita["nome"]; ?></td>
                <td><?php echo $visita["email"]; ?></td>
                <td><?php echo $visita["celular"]; ?></td>
                <td><?php echo $visita["cpf"]; ?></td>
                <td><?php echo $visita["nomeanimal"]; ?></td>
                <td><?php echo $visita["datavisita"]; ?></td>
                <td><div class="btn-container"><a href='alterar-visita.php?id=<?php echo $visita["ID"]; ?>'><button class="btn">Alterar</button></a>
                <a href='./src/remover_visita.php?id=<?php echo $visita["ID"]; ?>'><button class="btn">Remover</button></a></div></td>
              </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </main>
</body>
</html>